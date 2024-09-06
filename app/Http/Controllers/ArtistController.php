<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Traits\ImageSaveTrait;

class ArtistController extends Controller
{

    use ImageSaveTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $artists = Artist::all();

        return view('backend.artists.index', [
            'artists' => $artists,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $request['slug'] = Str::slug($request->name);

        // check slug availability
        $i = 1;
        while (Artist::where('slug', $request['slug'])->exists()) {
            $request['slug'] = Str::slug($request->name).'-'.$i;
            $i++;
        }
        if ($request->status == 'on') {
            $status =  1;
        } else {
            $status =  0;
        }
        if($request->hasFile('image')) {
            $image_name = $this->saveImage('artist', $request->file('image'), 400, 400);
        }

        Artist::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'status' => $status,
            'image' =>$image_name,
        ]);

        return back()->with('success', 'Artist Created Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artist $artist)
    {
        try {
            $artist->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Artist Deleted Successfully');
    }

    public function updateStatus(Artist $artist)
    {
        try {
            $artist->update([
                'status' => $artist->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Artist Status Updated Successfully');
    }
}
