<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
//use http\Env\Request;
//use http\Env\Response;
use Illuminate\Support\Facades\Hash;
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
        $user = User::with(['projects', 'education', 'work_experiences'])->findOrFail($currentUser);
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

        Mail::send(['html' => 'emails.mail'],['text' => $message],function ($messages) use ($subject,$to) {
            $messages->to($to)->subject($subject);
            $messages->from('thettun1741997@gmail.com', $name = 'AKL');
            $messages->replyTo('thettun1741997@gmail.com', $name = 'AKL');
        });
        //return Response::json(["message"=> 'message']);
    }
}
