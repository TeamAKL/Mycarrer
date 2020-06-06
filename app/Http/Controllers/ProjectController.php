<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        //
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
        $currentId = Auth::id();
        Project::create([
            'title' => $request->title,
            'client' => $request->client,
            'start_year' => $request->start_year,
            'start_month' => $request->start_month,
            'end_year' => $request->end_year,
            'end_month' => $request->end_month,
            'detail' => $request->detailpj,
            'location' => $request->location,
            'link' => $request->link,
            'user_id' => $currentId,
            ]);
            return redirect('seeker/profile');
        }

        /**
        * Display the specified resource.
        *
        * @param  \App\Project  $project
        * @return \Illuminate\Http\Response
        */
        public function show(Project $project)
        {
            //
        }

        /**
        * Show the form for editing the specified resource.
        *
        * @param  \App\Project  $project
        * @return \Illuminate\Http\Response
        */
        public function edit(Request $request)
        {
            $project = Project::findOrFail($request->id);
            return Response($project);
        }

        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\Project  $project
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request)
        {
            $project = Project::find($request->id);
            $project->title = $request->title;
            $project->client = $request->client;
            $project->start_year = $request->start_year;
            $project->start_month = $request->start_month;
            $project->end_year = $request->end_year;
            $project->end_month = $request->end_month;
            $project->detail = $request->detailpj;
            $project->location = $request->location;
            $project->link = $request->link;
            $project->save();
            return redirect('seeker/profile');
        }

        /**
        * Remove the specified resource from storage.
        *
        * @param  \App\Project  $project
        * @return \Illuminate\Http\Response
        */
        public function destroy(Project $project)
        {
            //
        }
    }
