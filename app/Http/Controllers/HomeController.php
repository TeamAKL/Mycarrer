<?php

namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use App\Country;
use App\City;
use App\JobCategory;
use Dotenv\Regex\Result;

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
        return view('home', ['categories' => $categories]);
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
