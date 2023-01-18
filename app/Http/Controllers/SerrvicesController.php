<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerrvicesController extends Controller
{
    public function index()
    {
        return view('pages.services');
    }
}