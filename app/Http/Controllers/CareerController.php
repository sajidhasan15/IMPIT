<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Career_table;

class CareerController extends Controller
{
    public function index()
    {
        return view('pages.career');
    }

// function DataInsart(Request $request)
// {
//     $name = $request->input('name');
//     $email = $request->input('email');
//     $message = $request->input('message');

//     $isInsertSucess = Career_table::insert(['name' => $name, 'email' => $email, 'message' => $message]);

//     if ($isInsertSucess)
//         echo '<h1>Insert Sucess</h1>';
//     else
//         echo '<h1>Insert Failed</h1>';
// }
}