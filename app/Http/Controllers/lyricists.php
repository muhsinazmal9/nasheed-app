<?php

namespace App\Http\Controllers;

use App\Models\lyricist;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class lyricists extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $lyricists = lyricist::all();
        return view('backend.lyricists.lyricists', [
            'lyricists'=>$lyricists,
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
            'name'=>'required',
            'description'=>'required',
            // 'image'=>'required|image',
        ]);

        $request['slug'] = Str::slug($request->name);

        // check username availability
        $i = 1;
        while (lyricist::where('slug', $request['slug'])->exists()) {
            $request['slug'] = Str::slug($request->name).'-'.$i;
            $i++;
        }

        lyricist::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'slug'=>$request->slug,
        ]);
        return back()->with('success', 'lyricists Created Successfully');
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
    public function destroy(string $id)
    {
        lyricist::find($id)->delete();
    //    return redirect()->route('artists.index')->with('success', 'Artist Deleted Successfully');
    return response()->json(['success'=>true]);
    }



}
