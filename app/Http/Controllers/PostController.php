<?php

namespace App\Http\Controllers;

use App\Post;
use App\JobCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
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
        dd()
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
        dd($post);
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
    public function edit(Post $post)
    {
        //
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
}
