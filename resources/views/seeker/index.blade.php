@extends('layouts.master')

@section('content')
@include('seeker.searchContainer')
<div class="dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-20">
                <h1 class="main-header">Dashboard</h1>
            </div>
        </div>
        <div class="user-dashboard-parent row">
            <div class="user-dashboard-left col-md-4 col-xl-3 col-lg-4">
                @if(Auth::user())
                <div class="profile-sec mb8">
                    <div class="user-imgname">
                        <div class="profile-avatar avatar-dashboard">
                            <img src="{{asset('images/adele.jpg')}}" alt="" class="user-image">
                            <label for="avatar" class="camera-btn">
                                <input type="file" name="" id="avatar">
                                <i class="fa fa-camera"></i>
                            </label>
                        </div>
                        <div class="user-name">
                            <h3>{{Auth::user()->name}}</h3>
                        </div>
                    </div>
                    <div class="clearb mt10">
                        <p class="fl fs-12 color-g-b">09957363847</p>
                        <a class="fr" id="ph-show-modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <div class="clearb mt10">
                        <p class="fl fs-12 color-g-b">{{Auth::user()->email}}</p>
                        <a class="fr" id="mail-modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <a class="btn btn-outline-info mt10 w-100" href="{{url('seeker/profile')}}">Update Profile</a>
                    <div class="cmodal-overly phone-overly">
                        <div class="global-modal phone-modal">
                            <span class="close-modal"><i class="fa fa-close"></i></span>
                            <div class="modal-body">
                                <div class="cmodal-header d-block">
                                    <h3>Verify Phone Number</h3>
                                    <p>We will send OPT to your phone</p>
                                </div>
                                <div class="modal-description mt10">
                                    <form action="">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="" id="" class="formbb">
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="" id="" class="formbb">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-end">
                                            <input type="submit" value="Verify" class="custom-btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cmodal-overly">
                        <div class="global-modal">
                            <span class="close-modal"><i class="fa fa-close"></i></span>
                            <div class="modal-body">
                                <div class="cmodal-header d-block">
                                    <h3>Verify Phone Number</h3>
                                    <p>We will send OPT to your phone</p>
                                </div>
                                <div class="modal-description mt10">
                                    <form action="">
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="text" name="" id="" class="formbb">
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" name="" id="" class="formbb">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group d-flex justify-content-end">
                                            <input type="submit" value="Verify" class="custom-btn">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="job-category-holder">
                    <div class="row" id="rm-id">
                        <div class="col-md-12 dp-inline">
                            <p class="job-cat">Recommended Jobs <span>(100)</span> </p>
                        </div>
                        <div class="col-md-12 dp-inline">
                            <p class="job-cat">Applied Jobs <span>(10)</span></p>
                        </div>
                        <div class="col-md-12 dp-inline">
                            <p class="job-cat">Saved Jobs <span></span></p>
                        </div>
                        <div class="col-md-12 dp-inline">
                            <p class="job-cat">Networked Jobs</p>
                        </div>
                    </div>
                </div>
                @else
                <div id="sticky-monster" class="filter-aside mt15">
                    <aside class="pb0 no-bdr">
                        <div class="engage tc">
                            <h2 class="fs-14 mb20 semi-bold uprcse">New to Mycarrer?</h2>
                            <div class="upload-resume">
                                <a href="" title="Click to upload your resume" class="btn block resume-btn btn-orange">
                                    <span class="uprcse semi-bold">Upload Resume</span>
                                    <span class="block fs-11 mt10">We will create your profile</span>
                                </a>

                            </div>
                            <div class="or">
                                <span>OR</span>
                            </div>
                            <div class="signinModal">
                                <a href="" draggable="false" class="semi-bold reg-btn block uprcse">Register with us</a>
                            </div>
                        </div>
                    </aside>
                </div>
                @endif
            </div>

            <div class="user-dashboard-right col-md-8 col-xl-9 col-lg-8">
                <div class="user-status-area mb10">
                    <div class="dashboard-status text-center">
                        <h3 class="fs-30 custom-blue">0</h3>
                        <p>Viewed your profile</p>
                    </div>
                    <div class="dashboard-status text-center">
                        <h3 class="fs-30 custom-blue">13</h3>
                        <p>Contacted You</p>
                    </div>
                    <div class="dashboard-status text-center">
                        <h3 class="fs-30 custom-blue">0</h3>
                        <p>Companies Followed</p>
                    </div>
                    <div class="dashboard-status text-center">
                        <h3 class="fs-30 custom-blue">0</h3>
                        <p>Recruiter Followed</p>
                    </div>
                </div>
                <div class="recommended-job">
                    <h3>Recommended Jobs - <span> 100 </span></h3>
                </div>

                <!-- Job Card -->
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-md-10">
                        <div class="card mb10">
                            @if($post->urgent != 0)
                            <div class="mycareers-bags">
                                <span class="featuer">Urgent</span>
                            </div>
                            @endif
                            <div class="card-body pd-b20">
                                <div class="holder">
                                    <div class="item job-contact-area">
                                        <a href="{{url('seeker/job-detail/'.$post->id)}}" target="_blank" class="job-position">
                                            <h3>
                                                {{$post->position}}
                                            </h3>
                                            <a href="{{url('company/detail/'.$post->company->id)}}">{{$post->company->company_name}}</a>
                                            <p class="text-muted">{{$post->created_at->diffForHumans()}}</p>
                                        </a>
                                        <div class="row mt10">
                                            <di class="col-md-6">
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$post->company->country}}</span>
                                            </di>
                                            <di class="col-md-6">
                                                <span><i class="fa fa-briefcase" aria-hidden="true"></i> {{$post->experience}} Years</span>
                                                <span><i class="fa fa-database" aria-hidden="true"></i> {{$post->min_salary}} - {{$post->max_salary}} {{$post->salary_unit}} </span>
                                            </di>
                                        </div>
                                    </div>
                                    <div class="item job-logo">
                                        <img src="{{asset('images/company/'.$post->company->company_logo)}}" alt="">
                                    </div>
                                </div>
                                <div class="mt10 pr">
                                    <a href="{{url('seeker/job-detail/'.$post->id)}}" class="job-des-holder" target="_blank">
                                        <p class="job-desc">
                                            <span>Job Description: </span>
                                            {{strip_tags($post->job_description)}}
                                        </p>
                                        <p class="job-skill">
                                            <span>Skill: Regional Pricing Analyst (6 months renewable or Convertible)</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="star-share-holder pa">
                                    <a href="http://"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                                    <div class="share-hover">
                                        <i class="fa fa-share-alt custom-blue" aria-hidden="true"></i>
                                        <div class="pop-share pa-rt">
                                            <a href="http://"><i class="fa fa-facebook-square social-font-l" aria-hidden="true"></i></a>
                                            <a href="http://"><i class="fa fa-twitter-square social-font-l" aria-hidden="true"></i></a>
                                            <a href="http://"><i class="fa fa-linkedin-square social-font-l" aria-hidden="true"></i></a>
                                            <a href="http://"><i class="fa fa-envelope-o social-font" aria-hidden="true"></i></a>
                                        </div>
                                    </div>

                                </div>
                                <div class="apply-hover">
                                    <a href="" class="appl-btn">Apply</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{ $posts->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
@endpush

@push('script')
<script src="{{asset('js/seeker.js')}}"></script>
@endpush

