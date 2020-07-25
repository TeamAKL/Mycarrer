<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use DataTables;
use DB;
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

    public function getallseeker()
    {
        $seekers = User::select('users.id', 'users.created_at', 'users.name as name', 'users.email as email', 'users.phone_number as phone')
                    ->where('role_id', '0')
                    ->with(['job_preferences', 'profile_details'])
                    ->orderBy('created_at', 'desc')
                    ->get();
        return DataTables::of($seekers)
        ->editColumn('create', function($seekers) {
            return $seekers->created_at->format('d-m-Y');
        })
        ->editColumn('role', function($seekers)
        {
            if(isset($seekers->job_preferences->role)) {
                return $seekers->job_preferences->role;
            }else {
                return null;
            }
        })
        ->editColumn('location', function($seekers)
        {
            if(isset($seekers->job_preferences->preferred_location)) {
                return $seekers->job_preferences->preferred_location;
            } else {
                return null;
            }
        })
        ->editColumn('address', function($seekers)
        {
            if(isset($seekers->profile_details->permanent_address)) {
                return $seekers->profile_details->permanent_address;
            } else {
                return null;
            }
        })
        ->make(true);
    }

    public function getcompanies()
    {

    }
}
