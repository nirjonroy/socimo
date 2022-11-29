<?php

namespace App\Http\Controllers\Frontend\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
        return view('frontend.social.videos');
    }
}
