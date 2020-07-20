<?php

namespace App\Http\Controllers;

use App\ProfileDetail;
use App\User;
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
        if($request->hasFile('profile_image')){
        $logo_image = $request->file('profile_image');
        $logo_name = uniqid().'-'.$logo_image->getClientOriginalName();
        $request->profile_image->storeAs('seeker_profile', $logo_name, 'my_upload');
        } else {
            $logo_name = $detail->profile_image;
        }
        if(isset($detail)) {
            $detail->home_town = $request->home_town;
            $detail->gender = $request->gender;
            $detail->marital_status = $request->marital_status;
            $detail->permanent_address = $request->permanent_address;
            $detail->date_of_birth = $request->date_of_birth;
            $detail->nationality = $request->nationality;
            $detail->profile_image = $logo_name;
            $detail->user_id = $user_id;
            $detail->text_resume = $request->text_resume;
            if ($request->hasFile('upload_resume')) {
                //Remove old sign
                // $old_cv = public_path() . '/resumes/resumes/' . $detail->resume;
                // if(file_exists($old_cv)) unlink($old_cv);

                $resume_file = $request->file('upload_resume');
                $resume_name = $resume_file->getClientOriginalName();

                $request->upload_resume->storeAs('resumes', $resume_name, 'upload_resume');
                $detail->resume = $resume_name;
            }
            $detail->save();

        } else {
            dd("in else");
            if ($request->hasFile('upload_resume')) {
                $resume_file = $request->file('upload_resume');
                $resume_name = $resume_file->getClientOriginalName();
                $request->upload_resume->storeAs('resumes', $resume_name, 'upload_resume');
                $resume = $resume_name;

            }
            ProfileDetail::create([
                "home_town" => $request->home_town,
                "gender" => $request->gender,
                "marital_status" => $request->marital_status,
                "permanent_address" => $request->permanent_address,
                "date_of_birth" => $request->date_of_birth,
                "nationality" => $request->nationality,
                "profile_image" => $logo_name,
                "user_id" => $user_id,
                "resume" => $resume,
                "text_resume" => $request->text_resume

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

    public function getDocument(){

        $user_id = Auth::id();
        $user = User::with(['profile_details'])->findOrFail($user_id);
        $filePath = public_path() . '/resumes/resumes/';
        $path = $filePath.$user->profile_details->resume;
        $this->downloadFile($path,$user->profile_details->resume);
    }
    public function downloadFile($fullpath,$filename){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename='.$filename.'');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        flush();
        readfile($fullpath);
        exit;
    }

    public function dropDocument(){
        $user_id = Auth::id();
        $detail = ProfileDetail::where('user_id', '=', $user_id)->first();
        $old_cv = public_path() . '/resumes/resumes/' . $detail->resume;
        if(file_exists($old_cv)) unlink($old_cv);
        ProfileDetail::where('user_id', $user_id)->update(array('resume' => ''));
        return redirect('seeker/profile');

    }
}
