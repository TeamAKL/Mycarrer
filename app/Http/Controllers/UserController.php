<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\Post;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function showPass() {
        $admin = User::find(1);
        // dd(Hash::check($admin->password, 'admin'));
    }

    public function showProfile() {
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences', 'job_preferences','profile_details'])->findOrFail($currentUser);
        // dd($user);
        return view('seeker.profile', ['user' => $user]);
    }

    public function generateCertificate() {
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences'])->findOrFail($currentUser);

        $viewFile = ob_get_clean();
        $viewFile = 'exports.cv_form';
        $fileName=$user->name.'_'.\Carbon\Carbon::parse(Carbon::now())->format('yymd');

        $pdf = PDF::setOptions(['images' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])->loadView($viewFile, compact('user'))->setPaper('a4', 'portrait');
        return $pdf->stream(''.$fileName.'.pdf', array("Attachment" => false));

    }

    public function sendEmailToCompany(Request $request){

        $to = $request->company_email;
        $message = 'test email';
        $subject = 'CV Form';
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences'])->findOrFail($currentUser);
        $file_name = $user->name."_cv_form.pdf";
        $cv_file = $request->file('upload_resume');


        if(isset($cv_file)){
            $pdf = file_get_contents($cv_file);
        }else{
            $pdf = PDF::setOptions(['images' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])->loadView('exports.cv_form', compact('user'))->setPaper('a4', 'portrait');
        }

        Mail::send(['html' => 'emails.mail'],['text' => $message],function ($messages) use ($subject,$to,$pdf,$file_name) {
            $messages->to($to)->subject($subject)->attachData($pdf, $file_name);
            $messages->from('thettun1741997@gmail.com', $name = 'AKL');
            $messages->replyTo('thettun1741997@gmail.com', $name = 'AKL');
        });
    }

    public function applyCvToCompany(Request $request){
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $hasPostUser = $this->checkApplyPost($request);
        if($hasPostUser == true){
            dd('kkg');
        }else{
            $user->posts()->attach($request->post_id);
            $this->sendEmailToCompany($request);
        }


    }

    public function checkApplyPost(Request $request){

        $post_id = $request->post_id;
        $user = User::find(Auth::id());
        $hasPostUser =  $user->posts()->where('post_id', $post_id)->exists();
        return \Response::json(array(
            'status' => $hasPostUser,
            'message' => 'Valid Pincode'),
            200
        );
    }
}
