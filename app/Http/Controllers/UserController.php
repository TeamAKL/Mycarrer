<?php

namespace App\Http\Controllers;

use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
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

        $to = $request->email;
        $message = 'test email';
        $subject = 'CV Form';
        $currentUser = Auth::id();
        $user = User::with(['projects', 'education', 'work_experiences'])->findOrFail($currentUser);
        $file_name = $user->name."_cv_form.pdf";
        $pdf = PDF::setOptions(['images' => true, 'isPhpEnabled' => true, 'isRemoteEnabled' => true])->loadView('exports.cv_form', compact('user'))->setPaper('a4', 'portrait');



        Mail::send(['html' => 'emails.mail'],['text' => $message],function ($messages) use ($subject,$to,$pdf,$file_name) {
            $messages->to($to)->subject($subject)->attachData($pdf->output(), $file_name);
            $messages->from('thettun1741997@gmail.com', $name = 'AKL');
            $messages->replyTo('thettun1741997@gmail.com', $name = 'AKL');
        });
    }
}
