<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    public function index(Request $request)
    {
        $ip = $request->ip();
        $request->session()->put('ip_address', $ip);
        $val = $request->session()->get('ip_address');
        return view('home', ['count' => collect($val)->count()]);
    }
}
