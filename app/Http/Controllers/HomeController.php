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
}
