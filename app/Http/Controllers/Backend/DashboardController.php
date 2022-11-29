<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('backend.home', compact('users'));
    }
}
