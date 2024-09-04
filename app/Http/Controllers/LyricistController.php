<?php

namespace App\Http\Controllers;

use App\Models\Lyricist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LyricistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lyricists = Lyricist::all();

        return view('backend.lyricists.index', [
            'lyricists' => $lyricists,
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
        while (Lyricist::where('slug', $request['slug'])->exists()) {
            $request['slug'] = Str::slug($request->name).'-'.$i;
            $i++;
        }

        if ($request->status == 'on') {
            $status =  1;
        } else {
            $status =  0;
        }
        lyricist::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'status' => $status,
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
    public function destroy(lyricist $lyricist)
    {
        try {
            $lyricist->delete();
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Lyricist Deleted Successfully');
    }

    public function updateStatus(lyricist $lyricist)
    {
        try {
            $lyricist->update([
                'status' => $lyricist->status == 0 ? 1 : 0,
            ]);
        } catch (\Exception $e) {
            Log::error($e);
            return error($e->getMessage());
        }

        return success('Status Updated Successfully');
    }
}
