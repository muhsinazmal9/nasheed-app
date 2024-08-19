<?php

namespace App\Http\Controllers;

use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArtistController extends Controller
{
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
            // 'image'=>'required|image',
        ]);

        $request['slug'] = Str::slug($request->name);

        // check slug availability
        $i = 1;
        while (Artist::where('slug', $request['slug'])->exists()) {
            $request['slug'] = Str::slug($request->name).'-'.$i;
            $i++;
        }

        Artist::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
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
