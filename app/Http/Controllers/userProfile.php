<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userProfile extends Controller
{
    public function index()
    {
        return view('admin-panel.profile');
    }
}