<?php

namespace App\Http\Controllers;

use App\Company;
use App\Post;
use App\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// use App\Http\Requests\PostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $post = Post::with(['company'])->findOrFail(1);
        // dd($post->company->id);
        $posts = Post::where('job_status', 'active')->with(['company'])->orderBy('created_at', 'desc')->paginate(10);
        return view('seeker.index', ["posts" => $posts]);
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
        if($request->urgent) {
            $urgent = 1;
        } else {
            $urgent = 0;
        }
        $post = Post::create([
            "position" => $request->jobposition,
            "experience" => $request->experience,
            "address" => $request->address,
            "type" => $request->jobtype,
            "employer_type" => $request->emptype,
            "employer_number" => $request->employernumber,
            "min_salary" => $request->minsalary,
            "max_salary" => $request->maxsalary,
            "salary_unit" => $request->currency,
            "department" => $request->department,
            "report_to" => $request->reportto,
            "job_description" => $request->jobdescription,
            "job_requirement" => $request->jobrequirement,
            "company_id" => $request->company_id,
            "urgent" => $urgent
        ]);
        $post->job_categories()->attach(JobCategory::findOrFail($request->jobcategory));
        return redirect('employer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, $id)
    {
        $postDetail = Post::find($id);
        return view('seeker.show', ["post" => $postDetail]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $status = $request->status;
        $id = $request->id;
        $post = Post::find($id);
        $post->job_status = $status;
        $post->save();
        if($post) {
            return "true";
        } else {
            return "false";
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }

    /**
     * To Show in Employer Job List File
     * Get All Jobs
     */
    public function employerindex()
    {
        // $posts = Post::paginate(3);
        $company_id = Auth::user()->companies->id;
        $company = Company::where('id', $company_id)->with('posts')->first();
        return view('employer.jobs', ['posts' => $company->posts()->paginate(3)]);
    }
}
