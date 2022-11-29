<?php

namespace App\Http\Controllers\Frontend\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('frontend.user.signin');
    }

    public function signup()
    {
        return view('frontend.user.signup');
    }
}
