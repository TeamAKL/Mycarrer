<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('notAdmin');
        $this->middleware('employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard');
    }

    /**
     *
     * TO Get All Employer From the system
     */
    public function allEmployer()
    {
        return view('admin.allemployer');
    }

    public function allSeeker()
    {
        return view('admin.allseeker');
    }
}
