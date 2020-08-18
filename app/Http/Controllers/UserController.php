<?php

namespace App\Http\Controllers;

use App\JobCategory;
use App\Post;
use App\ProfileDetail;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Mail;

class UserController extends Controller
{
    /**
    * Display a listing of the users
    *
    * @param \App\User $model
    * @return \Illuminate\View\View
    */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function showPass()
    {
        $admin = User::find(1);
        // dd(Hash::check($admin->password, 'admin'));
    }

    public function showProfile()
    {
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences', 'job_preferences', 'profile_details', 'certificates', 'skills'])->findOrFail($currentUser);
        // dd($user);
        return view('seeker.profile', ['user' => $user]);
    }

    public function generateCertificate($id=null)
    {
        if($id == null) {
            $currentUser = Auth::id();
        }else {
            $currentUser = $id;
        }

        $user = User::with(['projects', 'education', 'work_experiences','skills'])->findOrFail($currentUser);

        $viewFile = ob_get_clean();
        $viewFile = 'exports.cv_form';
        $fileName = $user->name . '_' . \Carbon\Carbon::parse(Carbon::now())->format('yymd');

        $pdf = PDF::setOptions(['images' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])->loadView($viewFile, compact('user'))->setPaper('a4', 'portrait');
        return $pdf->stream('' . $fileName . '.pdf', array("Attachment" => false));

    }

    public function sendEmailToCompany(Request $request)
    {

        $to = $request->company_email;
        if(isset($request->cover_letter)){
            $message = $request->cover_letter;
        }else{
            $message = "Apply CV";
        }
        $subject = 'CV Form';
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences', 'profile_details'])->findOrFail($currentUser);
        $from = $user->email;
        $file_name = $user->name . "_cv_form.pdf";
        $cv_file = $request->file('upload_resume');

        if (isset($request->checkcv)) {
            if(isset($user->profile_details->resume)) {
                $pdf = file_get_contents(public_path() . '/resumes/resumes/' . $user->profile_details->resume);
            } else {
                return false;
            }
        } else {
            $pdf = file_get_contents($cv_file);
        }

        Mail::send(['html' => 'emails.mail'], ['text' => $message], function ($messages) use ($subject, $to,$from, $pdf, $file_name) {
            $messages->to($to)->subject($subject)->attachData($pdf, $file_name);
            $messages->from($from, $name = 'AKL');
            $messages->replyTo($from, $name = 'AKL');
        });
        return true;

    }

    public function applyCvToCompany(Request $request)
    {
        $user_id = Auth::id();
        $user = User::findOrFail($user_id);
        $post = Post::findOrFail($request->post_id);
        $check = $this->sendEmailToCompany($request);
        if($check) {
            $user->posts()->attach($post);
            return redirect('/seeker/applied-job/'.$request->post_id);
        } else {
            return redirect('/seeker/job-detail/'.$request->post_id)->with('needcv', "Sorry! you don't upload any CV");
        }

    }

    public function checkApplyPost(Request $request)
    {

        $post_id = $request->post_id;
        $user = User::find(Auth::id());
        $hasPostUser = $user->posts()->where('post_id', $post_id)->exists();
        return \Response::json(array(
            'status' => $hasPostUser,
            'message' => 'Valid Pincode'),
            200
        );
    }

    public function phoneupdate(Request $req)
    {
        $user = User::find(Auth::id());
        $user->phone_number = $req->phone;
        $user->save();
        return redirect('seeker/profile');
    }

    public function emailupdate(Request $req)
    {
        $user = User::find(Auth::id());
        $user->email = $req->email;
        $user->save();
        return redirect('seeker/profile');
    }

    public function getUserEmail(){
        return view('seeker/get_email_forget_pass');
    }

    public function sendEmailForgotPassword(Request $request){
        $subject = 'reset your password';
        $to = $request->email;
        $user = User::where('email',$request->email)->first();
        $from = 'thettun1741997@gmail.com';
        $message = 'thettun1741997@gmail.com';

        if($user != null){
            Mail::send(['html' => 'emails.forgot_password_mail'], ['user' => $user], function ($messages) use ($subject, $to ,$from) {
                $messages->to($to)->subject($subject);
                $messages->from($from, $name = 'AKL');
            });
            return redirect('/seeker/getUserEmail')->with('success', 'hello');
        }else{
            return redirect('/seeker/getUserEmail')->with('error', 'hello');
        }
    }
    public function showResetForm($id){
        return view('users/reset_password',['id' => $id]);
    }
    public function setResetPassword(Request $request){
        $request->validate([
            'new_password' => 'required|string|min:8|confirmed'
            ]);
            $user = User::find($request->user_id);
            $user->password = Hash::make($request->new_password);
            $user->save();
            return redirect('/');
        }

    public function feedBack(Request $req)
    {
        $subject = "Feedback Email From Mycareers";
        $to = "thettun1741997@gmail.com";
        $from = $req->email;
        $message = $req->message;
        Mail::send(['html' => 'emails.feedback'], ['text' => $message], function ($messages) use ($subject, $to ,$from) {
            $messages->to($to)->subject($subject);
            $messages->from($from, $name = "Mycareers");
        });
        return redirect('/')->with('feedback', 'helo');
    }
}
