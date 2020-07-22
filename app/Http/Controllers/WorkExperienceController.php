<?php

namespace App\Http\Controllers;

use App\WorkExperience;
use Dotenv\Regex\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkExperienceController extends Controller
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
        WorkExperience::create([
            'desigination' => $request->designation,
            'organisation' => $request->organisation,
            'current_company' => $request->currcompany,
            'work_from' => $request->workfrom,
            'work_till' => $request->worktill,
            'notc_period' => $request->noticePeriod,
            'salary_unit' => $request->salary_unit,
            'salary_amount' => $request->salary_amount,
            'salary_mode' => $request->salarymode,
            'profile_detail' => $request->profiledetail,
            'user_id' => Auth::id()
            ]);
            return redirect('seeker/profile');
        }

        /**
        * Display the specified resource.
        *
        * @param  \App\WorkExperience  $workExperience
        * @return \Illuminate\Http\Response
        */
        public function show(WorkExperience $workExperience)
        {
            //
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\WorkExperience  $workExperience
        * @return \Illuminate\Http\Response
        */
        public function edit(Request $request)
        {
            $workexp = WorkExperience::findOrFail($request->id);
            return Response($workexp);
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\WorkExperience  $workExperience
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request)
        {
            $workexp = WorkExperience::find($request->id);
            $workexp->desigination = $request->designation;
            $workexp->organisation = $request->organisation;
            $workexp->current_company = $request->currcompany;
            $workexp->work_from = $request->workfrom;
            $workexp->work_till = $request->worktill;
            // $workexp->notc_period = $request->noticePeriod;
            // if($request->salary_unit != null) {
            //     $workexp->salary_unit = $request->salary_unit;
            // }
            // $workexp->salary_amount = $request->salary_amount;
            // $workexp->salary_mode = $request->salarymode;
            $workexp->profile_detail = $request->profiledetail;
            $workexp->save();
            return redirect('seeker/profile');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\WorkExperience  $workExperience
        * @return \Illuminate\Http\Response
        */
        public function destroy(WorkExperience $workExperience)
        {
            //
        }
    }
