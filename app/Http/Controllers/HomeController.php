<?php

namespace App\Http\Controllers;

use App\Models\lyricist;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard()
    {
        return view('backend.dashboard');
    }

    function lyricistStatus(string $id)
    {
        $lyricist = Lyricist::find($id);


        if ($lyricist->status == 0) {
            Lyricist::find($id)->update([
                'status' => 1
            ]);
        } else {
            Lyricist::find($id)->update([
                'status' => 0
            ]);
        }
        return response()->json(['success' => true]);
    }
}
