<?php

namespace App\Http\Controllers;

use App\Cmoney;
use App\Post;
use App\JobCategory;
use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

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
        $posts = Post::where('job_status', 'active')->with(['company'])->orderBy('created_at', 'desc')->paginate(10);
        // $user = User::find(Auth::id());
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
            if(isset($post)) {
                $company = Cmoney::where('company_id', '=', $request->company_id)->first();
                $company->amount -= 30000;
                $company->save();
            }
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

            $sessionID = session()->getId();
            $counterKey = "job-post-{$id}-counter";
            $userKey = "job-post-{$id}-user";
            $users = Cache::get($userKey, []);
            $userUpdate = [];
            $difference = 0;
            $now = now();
            foreach($users as $session => $lastVisit) {
                if($now->diffInMinutes($lastVisit) >= 1) {
                    $difference;
                } else {
                    $userUpdate[$session] = $lastVisit;
                }
            }
            if(!array_key_exists($sessionID, $users) || $now->diffInMinutes($users[$sessionID]))
            {
                $difference++;
            }
            $userUpdate[$sessionID] = $now;
            Cache::forever($userKey, $userUpdate);
            if(!Cache::has($counterKey)) {
                Cache::forever($counterKey, 1);
            } else {
                Cache::increment($counterKey, $difference);
            }

            $counter = Cache::get($counterKey);
            $user = User::find(Auth::id());
            $hasPostUser =  $user->posts()->where('post_id', $id)->exists();
            return view('seeker.show', ["post" => $postDetail, "counter" => $counter,"hasPostUser" => $hasPostUser,"postId" =>$id]);
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
            $company_id = Auth::user()->companies->id;
            // $company = Company::where('id', $company_id)->with('posts')->first();
            // return view('employer.jobs', ['posts' => $company->posts()->paginate(3)]);
            $posts = Post::where('company_id', $company_id)->paginate(15);
            return view('employer.jobs', ['posts' => $posts ]);
        }

        public function livesearch(Request $request)
        {
            $search = $request->get('query');
            $page = $request->get('page');
            $company_id = Auth::user()->companies->id;
            if(strlen($search) != 0) {
                $posts = Post::where(function($query) use ($search) {
                    $query->where('position', 'like', '%'.$search.'%')
                    ->orWhere('address', 'like', '%'.$search.'%')
                    ->orWhere('job_status', 'like', '%'.$search.'%');
                })
                ->where(function($query) use ($company_id) {
                    $query->where('company_id', $company_id);
                })->paginate(15);
            } else {
                $posts = Post::where('company_id', $company_id)->paginate(15);
            }

            return view('employer.jobtable', compact('posts'))->render();
        }

        /**
        *
        * Find The JOB
        */
        public function searchjobs(Request $req)
        {
            $skill = $req->skill;
            $location = $req->location;
            $experience = $req->experience;
            $sql = Post::select('posts.*')
            ->where('posts.job_status', '=', 'active')
            ->where(function($query) use($skill, $location, $experience) {
                $query->where('posts.experience', 'like', '%'.$experience.'%')
                ->orWhere('posts.address', 'like', '%'.$location.'%')
                ->where('posts.position', 'like', '%'.$skill.'%');
            });
            $posts = $sql->orderBy('created_at', 'desc')->paginate(10);
            // dd($posts);
            return view('seeker.index', ["posts" => $posts]);
        }

        //Applied Jobs

        public function appliedjob($id)
        {
            $post = Post::findOrFail($id);
            foreach($post->users as $user) {
                if($user->pivot->user_id == Auth::id()) {
                    $applieddate = $user->pivot->created_at->format('d-m-Y');
                }
            }
            return view('seeker.applied_job', ["post" => $post, "date" => $applieddate]);
        }

        public function showbycate($id) {
            $posts = JobCategory::find($id)->posts()->where('job_status', 'active')->orderBy('created_at', 'desc')->paginate(10);
            return view('seeker.index', ["posts" => $posts]);
        }
    }
