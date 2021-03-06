<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Company;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
    * Where to redirect users after registration.
    *
    * @var string
    */
    // protected $redirectTo = RouteServiceProvider::HOME;
    // protected $admindashboard = RouteServiceProvider::ADMIN;
    protected $registerRedirect = RouteServiceProvider::LOGIN;

    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
    * Get a validator for an incoming registration request.
    *
    * @param  array  $data
    * @return \Illuminate\Contracts\Validation\Validator
    */
    protected function validator(array $data)
    {
        if($data['role_id'] == 0) {
            return Validator::make($data, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'phone_number' => ['required', 'string', 'min:11' , 'max:13'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'role_id' => ['integer']
                ]);
            } else {
                return Validator::make($data, [
                    'company_name' => ['required', 'string', 'max:255'],
                    'company_email' => ['required', 'string', 'max:255', 'unique:companies'],
                    'size' => ['required', 'string'],
                    'company_logo' => ['required'],
                    'name' => ['required', 'string', 'max:255'],
                    'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                    'phone_number' => ['required', 'string', 'min:11' , 'max:13'],
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                    'role_id' => ['integer']
                    ]);
                }

            }

            /**
            * Create a new user instance after a valid registration.
            *
            * @param  array  $data
            * @return \App\User
            */
            protected function create(array $data)
            {
                if($data['role_id'] == 0) {
                    return User::create([
                        'name' => $data['name'],
                        'email' => $data['email'],
                        'password' => Hash::make($data['password']),
                        'phone_number' => $data['phone_number'],
                        'role_id' => $data['role_id']
                        ]);
                    Session::put('user_score',0);
                    } else {
                        return User::create([
                            'name' => $data['name'],
                            'email' => $data['email'],
                            'password' => Hash::make($data['password']),
                            'phone_number' => $data['phone_number'],
                            'role_id' => $data['role_id']
                            ]);
                            }

                        }

                    }
