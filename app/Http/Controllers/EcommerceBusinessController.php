<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BusinessPage;
class EcommerceBusinessController extends Controller
{
    public function index()
    {
        return view('frontend.social.home');
    }

    public function showVideos()
    {
        return view('frontend.social.videos');
    }

    public function courses()
    {
        return view('frontend.social.courses');
    }

    public function books()
    {
        
        // return view('frontend.social.books'); 
    }

    public function blogs()
    {
        $shops = $busnessPages = BusinessPage::where('status', 1)->get();
        // dd($shops);
        return view('frontend.social.blogs', compact('shops'));
    }

    public function groups()
    {
        return view('frontend.social.groups');
    }
}
