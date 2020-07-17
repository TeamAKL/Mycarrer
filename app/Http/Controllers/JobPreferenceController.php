<?php

namespace App\Http\Controllers;

use App\JobPreference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'user_id' => Auth::id()
        ]);
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
    public function edit(JobPreference $jobPreference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\JobPreference  $jobPreference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobPreference $jobPreference)
    {
        //
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
