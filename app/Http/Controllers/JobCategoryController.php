<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\JobCategory;
use App\Http\Requests\JobCategoryRequest;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobCat = JobCategory::all();
        return view('jobcat.index', compact('jobCat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobcat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobCategoryRequest $request)
    {
        JobCategory::create(['category_name' => $request->name]);
        session()->flash('success');
        return redirect("job-category");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $jobcat = JobCategory::findOrFail($id);
        return view('jobcat.edit', compact('jobcat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JobCategoryRequest $request, $id)
    {
        $jobcat = JobCategory::findOrFail($id);
        $jobcat->category_name = $request->name;
        $jobcat->save();
        return redirect("job-category");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = JobCategory::findOrFail($id);
        $category->delete();
        return redirect('job-category');
    }
    /**
     *
     * To Get All RECORD FOR JOB PREFERRED
     */
    public function getall()
    {
        $categories = JobCategory::all();
        return response()->json(["message" => "Successfully Get Categories", "categories" => $categories]);
    }

    /**
     *
     * JOB CAT LIVE SEARCH
     */
    public function jobcatlivesearch(Request $req)
    {
        $search = trim($req->data);
        $categories = JobCategory::where('category_name', 'like', '%'.$search.'%')->get();
        return response()->json(["message" => "success", "categories" => $categories]);
    }
}
