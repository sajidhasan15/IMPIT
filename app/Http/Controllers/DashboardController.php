<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function index()
    {

        $employeeCount = Employee::count();
        // dd($employeeCount); die;
        $departments = DB::table('department')->count();
        $countries = DB::table('country')->count();
        $countries = DB::table('country')->count();

        return view('dashboard', [
            'employeeCount' => $employeeCount,
            'countries'
            => $countries,
            'departments' => $departments
        ]);
    }

    public function indexDashbord()
    {
        $employees = DB::table('employees')->count();
        $departments = DB::table('department')->count();
        $countries = DB::table('country')->count();
        $countries = DB::table('country')->count();
    }
}