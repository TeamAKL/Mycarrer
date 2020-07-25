<?php

namespace App\Http\Controllers;

use App\JobPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class JobPreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JobPreference::create([
            "role" => $request->role,
            "preferred_location" => $request->location,
            "expected_salary" => $request->salary_amount,
            "salary_mode" => $request->salary_unit,
            "notice_period" => $request->notice,
            "employer_type" => $request->emp_type,
            'user_id' => Auth::id()
        ]);
        $updated_score = Session::get('user_score')+15;
        Session::forget('user_score');
        Session::put('user_score',$updated_score);
        return redirect('seeker/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function show(JobPreference $jobPreference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return response()->json(["message" => "hello"]);
        $jobpreference = JobPreference::findOrFail($request->id);
        return response()->json(["data" => $jobpreference]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $preference = JobPreference::find($request->id);
        $preference->role = $request->role;
        $preference->preferred_location = $request->location;
        $preference->expected_salary = $request->salary_amount;
        $preference->salary_mode = $request->salary_unit;
        $preference->notice_period = $request->notice;
        $preference->employer_type = $request->emp_type;
        $preference->user_id = Auth::id();
        $preference->save();
        return redirect('seeker/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobPreference $jobPreference)
    {
        //
    }
}
