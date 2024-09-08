<?php

namespace App\Http\Controllers;

use App\Models\Lyricist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Traits\ImageSaveTrait;

class LyricistController extends Controller
{
    use ImageSaveTrait;
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

        if ($request->hasFile('image')) {
            $image_name = $this->saveImage('lyricist', $request->file('image'), 400, 400);
        }
        lyricist::create([
            'name' => $request->name,
            'description' => $request->description,
            'slug' => $request->slug,
            'status' => $status,
            'image' => $image_name,
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
    public function edit(Lyricist $lyricist)
    {
        return view('backend.lyricists.edit', [
            'lyricist' => $lyricist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lyricist $lyricist)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('image')) {
            if (!empty($lyricist->image)) {
                $this->deleteImage(public_path('uploads/lyricist/' . $lyricist->image));
            }

            $image_name = $this->saveImage('lyricist', $request->file('image'), 400, 400);

            $lyricist->update([
                'name' => $request->name,
                'description' => $request->description,
                'image' => $image_name,
            ]);
        }
        else{
            $lyricist->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
        }



        return redirect()->route('lyricists.index')->with('success', 'Lyricist Updated Successfully');
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
