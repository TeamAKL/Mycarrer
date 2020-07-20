<?php

namespace App\Http\Controllers;

use App\Company;
use App\Helper\CompanySize;
use App\JobCategory;
use App\Post;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    use CompanySize;
    public function __construct()
    {
        $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_id = Auth::user()->companies->id;
        $company = Company::where('id', $company_id)->with('posts')->first();
        $jobCategories = JobCategory::all();
        // $emp_sizes = $this->get_company_size();
        return view('employer.index', ['jobCategories' => $jobCategories, 'company' => $company]);
        // return view('employer.index', ['jobCategories' => $jobCategories,'emp_sizes' => $emp_sizes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::where('id', $id)->with('posts')->first();

        return view('employer.company.detail',compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        $currentUser = Auth::id();
        $emp_sizes = $this->get_company_size();
        $user = User::with(['companies'])->findOrFail($currentUser);
        $jobCategories = JobCategory::all();
        //dd($jobCategories);
        return view('employer.company.index',compact('user','emp_sizes','jobCategories'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company_id = Auth::user()->companies->id;
        $company = Company::where('id', $company_id)->with('posts')->first();

        $jobCategories = JobCategory::all();
        $input = $request->all();

        if(isset($input['company_logo'])){
            $logo_file = $request->file('company_logo');
            $logo_name = uniqid().'-'.$logo_file->getClientOriginalName();
            $request->company_logo->storeAs('company', $logo_name, 'my_upload');
        }else if($company->company_logo != null){
            $logo_name = $company->company_logo;
        }
        if(isset($input['vision_image'])){
            $vision_file = $request->file('vision_image');
            $vision_logo_name = uniqid().'-'.$vision_file->getClientOriginalName();
            $request->vision_image->storeAs('company', $vision_logo_name, 'my_upload');
        }else if($company->vission_image != null){
            $vision_logo_name = $company->vission_image;
        }
        if(isset($input['mission_image'])){
            $mission_file = $request->file('mission_image');
            $mission_logo_name = uniqid().'-'.$mission_file->getClientOriginalName();
            $request->mission_image->storeAs('company', $mission_logo_name, 'my_upload');
        }else if($company->mission_image != null){
            $mission_logo_name = $company->mission_image;
        }
        if(isset($input['banner_image'])){
            $banner_file = $request->file('banner_image');
            $banner_logo_name = uniqid().'-'.$banner_file->getClientOriginalName();
            $request->banner_image->storeAs('company', $banner_logo_name, 'my_upload');
        }else if($company->banner_image != null){
            $banner_logo_name = $company->banner_image;
        }
        if(isset($input['company_id'])){
            Company::updateOrCreate(
                ['id' => $input['company_id']], [
                'company_name' => $input['company_name'] != null ? $input['company_name'] : '',
                'company_email' => $input['company_email'] != null ? $input['company_email'] : '',
                'size' => $input['size'],
                'phone_number' => $input['phone_number'] != null ? $input['phone_number'] : '',
                'city' => $input['city_name'] != null ? $input['city_name'] : '',
                'country' => $input['country_name'] != null ? $input['country_name'] : '',
                'address' => $input['address'] != null ? $input['address'] : '',
                'industry_id' =>$input['industry'] != null ? $input['industry'] : '',
                'about' =>$input['about'] != null ? $input['about'] : '',
                'mission' => $input['mission'] != null ? $input['mission'] : '',
                'vission' => $input['vision'] != null ? $input['vision'] : '',
                'foundation_date' => $input['foundation-date'],
                'company_logo' => isset($logo_name) ? $logo_name : '',
                'mission_image' => isset($mission_logo_name) ? $mission_logo_name : '',
                'vission_image' => isset($vision_logo_name) ? $vision_logo_name : '',
                'banner_image' => isset($banner_logo_name) ? $banner_logo_name : ''

            ]);
        }
        return view('employer.index', ['jobCategories' => $jobCategories, 'company' => $company]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }

    public function getAllResume(){
        $resumes = User::with(['projects', 'education', 'work_experiences', 'job_preferences', 'profile_details', 'certificates'])->where('role_id','=','0')->get();
        return view('resumes.index', ['resumes' => $resumes]);
    }
}
