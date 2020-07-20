<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\JobCategory;
use App\Post;
use Dotenv\Regex\Result;
use Carbon\Carbon;
use App\Company;

class HomeController extends Controller
{

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\View\View
    */
    public function index()
    {
        $categories = JobCategory::all();
        $posts = Post::all();
        $todayjobs = Post::where('job_status', 'active')->whereDate('created_at', '=',  Carbon::today())->count();
        $companies = Company::all();
        // dd($companies);
        return view('home', ['categories' => $categories, "posts" => $posts, "todayjobs" => $todayjobs, "companies" => $companies]);
    }

    public function countrySearch(Request $request)
    {
        if($request->ajax()) {
            $countries = Country::where('name', 'LIKE', '%' . $request->country . '%')->get();
            return Response($countries);
        } else {
            return Response("No country");
        }

    }

    public function searchCity(Request $request)
    {
        // return Response($request->countryId);
        $cities = City::where('country_id', $request->countryId)->get();
        return Response($cities);
    }

    public function companyedit(Request $request)
    {
        dd($request->about);
    }
}
