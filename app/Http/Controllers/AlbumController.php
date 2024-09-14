<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;
use App\Traits\ImageSaveTrait;

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
            'release_date'=> 'date',
        ]);

        if ($request->hasFile('cover_image')) {
            $image_name = $this->saveImage('albums/cover_images', $request->file('cover_image'), 400, 400);
        }

        if($request->status == null){
            $status = 0;
        }
        else{
            $status = 1;
        }

        $tracks = $request['tracks_id'];
        $album = Album::create([
            'title' => $request->title,
            'description' => $request->description,
            'cover_image' => $image_name,
            'released_at' => $request->release_date,
            'status' => $status,
        ]);

        $album->tracks()->attach($tracks);

        return redirect()->route('albums.index')->with('success', 'Album Created Successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Album $album)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Album $album)
    {
        //
    }
}
