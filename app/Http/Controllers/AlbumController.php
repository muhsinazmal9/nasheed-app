<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;
use Illuminate\Support\Facades\Log;

class AlbumController extends Controller
{
    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $albums = Album::latest()->get();
        return view('backend.albums.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.albums.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'cover_image' => 'image|mimes:jpg,jpeg,png',
            'release_date' => 'date',
        ]);

        $data = $request->except(['_token', '_method', 'tracks_id']);
        $data['status'] = $request->boolean('status');
        $data['released_at'] = $request->date('release_date');

        if ($request->hasFile('cover_image')) {
            $data['cover_image'] = $this->saveImage('albums/cover_images', $request->file('cover_image'), 400, 400);
        }

        $album = Album::create($data);
        $album->tracks()->sync($request->get('tracks_id'));

        return redirect()->route('albums.index')->with('success', 'Album created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Album $album)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Album $album)
    {

        $selectedTracks = $album->tracks()->select('id', 'title')->get();
        return view('backend.albums.edit', compact('album', 'selectedTracks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'title' => 'required',
            'cover_image' => 'image|mimes:jpg,jpeg,png',
            'release_date'=> 'date',
        ]);

        if($request->status == null){
            $status = 0;
        }
        else{
            $status = 1;
        }

        if ($request->hasFile('cover_image')) {
            if (!empty($album->cover_image)) {
                $this->deleteImage(public_path($album->cover_image));
            }
            $image_name = $this->saveImage('albums/cover_images', $request->file('cover_image'), 400, 400);

            $tracks = $request['tracks_id'];
            $album->update([
                'title' => $request->title,
                'description' => $request->description,
                'cover_image' => $image_name,
                'released_at' => $request->release_date,
                'status' => $status,
            ]);
            $album->tracks()->sync($tracks);
        }
        else{

            $tracks = $request['tracks_id'];
            $album->update([
                'title' => $request->title,
                'description' => $request->description,
                'released_at' => $request->release_date,
                'status' => $status,
            ]);
            $album->tracks()->sync($tracks);
        }

        return redirect()->route('albums.index')->with('success', 'Album Created Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        if (!empty($album->cover_image)) {
            $this->deleteImage(public_path($album->cover_image));
        }
        try {
            $album->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Album Deleted Successfully');
    }

    public function updateStatus(Album $album)
    {


        try {
            $album->update([
                'status' => $album->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Album Status Updated Successfully');
    }
}
