<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebPagesController extends Controller
{
    //

    public function videoplay()
    {
    	return view('web_pages/videoplay');
    }

    public function playlist()
    {
    	return view('web_pages/playlist');
    }
}
