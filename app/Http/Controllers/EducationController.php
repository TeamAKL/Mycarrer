<?php

namespace App\Http\Controllers;

use App\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
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
        Education::create([
            'qualification' => $request->qualification,
            'specilization' => $request->specilization,
            'institute' => $request->institute,
            'passing_year' => $request->passing_year,
            'education_type' => $request->edutype,
            'user_id' => Auth::id()
        ]);
        return redirect('seeker/profile');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $edu = Education::findOrFail($request->id);
        return Response($edu);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $education = Education::find($request->id);
        $education->qualification = $request->qualification;
        $education->specilization = $request->specilization;
        $education->specilization = $request->specilization;
        $education->institute = $request->institute;
        $education->passing_year = $request->passing_year;
        $education->passing_year = $request->passing_year;
        $education->education_type = $request->edutype;
        $education->save();
        return redirect('seeker/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        //
    }
}
