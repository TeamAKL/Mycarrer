<?php

namespace App\Http\Controllers;

use App\Company;
use App\User;
use Illuminate\Http\Request;
use DataTables;
use DB;
use App\Cmoney;
use App\Helper\CompanySize;
class AdminController extends Controller
{
    use CompanySize;
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('notAdmin');
        // $this->middleware('employer');
    }

    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\View\View
    */
    public function index()
    {
        return view('dashboard');
    }

    /**
    *
    * TO Get All Employer From the system
    */
    public function allEmployer()
    {
        return view('admin.allemployer');
    }

    public function allSeeker()
    {
        return view('admin.allseeker');
    }

    public function getallseeker()
    {
        $seekers = User::select('users.id', 'users.created_at', 'users.name as name', 'users.email as email', 'users.phone_number as phone')
        ->where('role_id', '0')
        ->with(['job_preferences', 'profile_details'])
        ->orderBy('created_at', 'desc')
        ->get();
        return DataTables::of($seekers)
        ->editColumn('create', function($seekers) {
            if(isset($seekers->created_at)) {
            return $seekers->created_at->format('d-m-Y');
            } else {
                return null;
            }
        })
        ->editColumn('role', function($seekers)
        {
            if(isset($seekers->job_preferences->role)) {
                return $seekers->job_preferences->role;
            }else {
                return null;
            }
        })
        ->editColumn('salary', function($seekers)
        {
            if(isset($seekers->job_preferences->expected_salary)) {
                $amount = number_format($seekers->job_preferences->expected_salary);
                $unit = $seekers->job_preferences->salary_mode;
                return $amount." ".$unit;
            }else {
                return null;
            }
        })
        ->editColumn('location', function($seekers)
        {
            if(isset($seekers->job_preferences->preferred_location)) {
                return $seekers->job_preferences->preferred_location;
            } else {
                return null;
            }
        })
        ->editColumn('address', function($seekers)
        {
            if(isset($seekers->profile_details->permanent_address)) {
                return ucwords($seekers->profile_details->permanent_address);
            } else {
                return null;
            }
        })
        ->editColumn('gender', function($seekers)
        {
            if(isset($seekers->profile_details->gender)) {
                return ucwords($seekers->profile_details->gender);
            } else {
                return null;
            }
        })
        ->make(true);
    }

    public function getcompanies()
    {
        $companySize = $this->get_company_size();
        $companies = Company::with(['posts', 'user', 'job_category'])
        ->orderBy('created_at', 'desc')
        ->get();
        return DataTables::of($companies)
        ->editColumn('created_at', function($companies) {
            return $companies->created_at->format('d-m-Y');
        })
        ->editColumn('owner', function($companies) {
            return $companies->user->name;
        })
        ->editColumn('ownerEmail', function($companies) {
            return $companies->user->email;
        })
        ->editColumn('ownerphone', function($companies) {
            return $companies->user->phone_number;
        })
        ->editColumn('companySize', function($companies) use ($companySize) {
            foreach($companySize as $key => $value) {
                if($key == $companies->size)
                {
                    return $value;
                }
            }
        })
        ->editColumn('industry', function($companies) {
            if(isset($companies->job_category->category_name)) {
                return $companies->job_category->category_name;
            } else {
                return null;
            }
        })
        ->editColumn('totalposts', function($companies) {
            if(isset($companies->posts)) {
                return $companies->posts->count();
            } else {
                return 0;
            }
        })
        ->editColumn('active', function($companies) {
            if(isset($companies->posts)) {
                return $companies->posts->where('job_status', 'active')->count();
            } else {
                return 0;
            }
        })
        ->editColumn('success', function($companies) {
            if(isset($companies->posts)) {
                return $companies->posts->where('job_status', 'success')->count();
            } else {
                return 0;
            }
        })
        ->editColumn('closed', function($companies) {
            if(isset($companies->posts)) {
                return $companies->posts->where('job_status', 'closed')->count();
            } else {
                return 0;
            }
        })
        ->editColumn('expired', function($companies) {
            if(isset($companies->posts)) {
                return $companies->posts->where('job_status', 'expired')->count();
            } else {
                return 0;
            }
        })
        // ->editColumn('created', function($companies) {
        //     if(isset($companies->posts)) {
        //         foreach($companies->posts as $post) {
        //             return $post->created_at;
        //         }
        //         // return $companies->posts->where('id', $companies->posts->id)->get();
        //     } else {
        //         return 0;
        //     }
        // })
        ->make(true);
    }

    public function addAmount()
    {
        return view('admin.add_amount');
    }

    public function getCompanyName()
    {
       $companies = Company::select(['company_name', 'id'])->get();
      return response()->json(['companies' => $companies], 200);
    }

    public function getCompanySearch(Request $request)
    {
        $search = $request->get('name');
        $companies = Company::where('company_name', 'like', '%'.$search.'%')->get();

        return response()->json(['companies' => $companies], 200);
    }

    public function saveAmount(Request $req)
    {
        $req->validate([
            'amount' => 'required|numeric',
            'company' => 'required'
        ]);

        $company = Cmoney::where('company_id', '=', $req->company_id)->first();
        if(isset($company)) {
            $company->amount += $req->amount;
            $company->save();
            return redirect('add-amount')->with('success', 'You added '. number_format($req->amount) .' to '. $req->company);
        } else {
        Cmoney::create([
            'amount' => $req->amount,
            'company_id' => $req->company_id
        ]);
        return redirect('add-amount')->with('success', "Successfully Added Amount to ".$req->company);
        }
    }

}
