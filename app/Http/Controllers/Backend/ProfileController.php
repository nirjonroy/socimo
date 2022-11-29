<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
class ProfileController extends Controller
{
    public function index()
    {
        return view('backend.profile');
    }

    

}
