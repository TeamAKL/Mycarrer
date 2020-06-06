<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
}
