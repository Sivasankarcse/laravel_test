<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeDetailsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('pages.employee.index');
    }

    public function create()
    {
        return view('pages.employee.create');
    }
}
