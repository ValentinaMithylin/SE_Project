<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function showHome() {
        return view('HomePage');
    }

    function showAbout() {
        return view('AboutPage');
    }
}
