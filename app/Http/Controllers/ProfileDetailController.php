<?php

namespace App\Http\Controllers;

use App\ProfileDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ProfileDetailController extends Controller
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
        $user_id = Auth::id();
        $detail = ProfileDetail::where('user_id', '=', $user_id)->first();
        if(isset($detail)) {
            $detail->home_town = $request->home_town;
            $detail->gender = $request->gender;
            $detail->marital_status = $request->marital_status;
            $detail->permanent_address = $request->permanent_address;
            $detail->date_of_birth = $request->date_of_birth;
            $detail->nationality = $request->nationality;
            $detail->user_id = $user_id;
            $detail->save();
        } else {
            ProfileDetail::create([
                "home_town" => $request->home_town,
                "gender" => $request->gender,
                "marital_status" => $request->marital_status,
                "permanent_address" => $request->permanent_address,
                "date_of_birth" => $request->date_of_birth,
                "nationality" => $request->nationality,
                'user_id' => $user_id
            ]);
        }
        return redirect('seeker/profile');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profileDetail  $profileDetail
     * @return \Illuminate\Http\Response
     */
    public function show(profileDetail $profileDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profileDetail  $profileDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(profileDetail $profileDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profileDetail  $profileDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_id = Auth::id();
        $detail = profileDetail::find($request->id);
        $detail->home_town = $request->home_town;
        $detail->gender = $request->gender;
        $detail->marital_status = $request->marital_status;
        $detail->permanent_address = $request->permanent_address;
        $detail->date_of_birth = $request->date_of_birth;
        $detail->nationality = $request->nationality;
        $detail->user_id = $user_id;
        $detail->save();
        return redirect('seeker/profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profileDetail  $profileDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(profileDetail $profileDetail)
    {
        //
    }
}
