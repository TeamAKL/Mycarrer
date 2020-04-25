@extends('layouts.master')

@section('content')

<div class="container">
    <button class="custom-btn wd-100" >Modify Search</button>
    <div class="search-container">
        <div>
            <span class="close-modal"><i class="fa fa-close"></i></span>
            <form class="pd-13 mb-search">
                <div class="modif-search-title">
                    <h2 class="text-center">Modify Search</h2>
                </div>
                <div class="form-row">
                    <div class=" input-group mb-2 col-md-4 pl-pr-0">
                        <div class="input-group-prepend ">
                            <div class="input-group-text custom-input"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" id="search" class="form-control custom-input" placeholder="Search by Skills, Company & Job Title">
                    </div>
                    <div class="input-group mb-2 col-md-3 expend-search-form pl-pr-0 d-flex">
                        <div class="input-group-prepend ">
                            <div class="input-group-text custom-input"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" class="form-control custom-input" id="location" placeholder="Location">
                    </div>
                    <div class="col-md-3 expend-search-form pl-pr-0 d-flex">
                        <select class="form-control custom-input" id="selectoption">
                            <option>Default select</option>
                            <option>Default select</option>
                            <option>Default select</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-12 pl-pr-0">
                        <input type="submit" value="Search" class="custom-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-20">
                <h1 class="main-header">Dashboard</h1>
            </div>
        </div>
        <div class="user-dashboard-parent row">
            <div class="user-dashboard-left col-md-4 col-xl-3 col-lg-4">
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
                            <h3>Thet Tun</h3>
                        </div>
                    </div>
                    <div class="clearb mt10">
                        <p class="fl fs-12 color-g-b">09957363847</p>
                        <a class="fr" id="ph-show-modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <div class="clearb mt10">
                        <p class="fl fs-12 color-g-b">thettun1741997@gmail.com</p>
                        <a class="fr" id="mail-modal"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                    </div>
                    <a class="btn btn-outline-info mt10 w-100">Update Profile</a>
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
                    <div class="col-md-10">
                        <div class="card mb10">
                            <div class="card-body pd-b20">
                                <div class="holder">
                                    <div class="item job-contact-area">
                                        <a href="http://" class="job-position">
                                            <h3>
                                                Regional Pricing Analyst (6 months renewable or Convertible)
                                            </h3>
                                            <a href="http://">Property Star Ltd</a>
                                        </a>
                                        <div class="row mt10">
                                            <di class="col-md-6">
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Singapore</span>
                                            </di>
                                            <di class="col-md-6">
                                                <span><i class="fa fa-briefcase" aria-hidden="true"></i> 2-3 Years</span>
                                                <span><i class="fa fa-briefcase" aria-hidden="true"></i> 2-3 Years</span>
                                            </di>
                                        </div>
                                    </div>
                                    <div class="item job-logo">
                                        <img src="{{asset('images/adele.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="mt10 pr">
                                    <a href="http://" class="job-des-holder">
                                        <p class="job-desc">
                                            <span>Job Description: </span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias molestiae saepe corporis impedit laborum earum doloribus, at expedita qui. Blanditiis eum deserunt ratione sed. Quas libero itaque eveniet quaerat placeat.
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

                    <div class="col-md-10">
                        <div class="card mb10">
                            <div class="card-body pd-b20">
                                <div class="holder">
                                    <div class="item job-contact-area">
                                        <a href="http://" class="job-position">
                                            <h3>
                                                Regional Pricing Analyst (6 months renewable or Convertible)
                                            </h3>
                                            <a href="http://">Property Star Ltd</a>
                                        </a>
                                        <div class="row mt10">
                                            <di class="col-md-6">
                                                <span><i class="fa fa-map-marker" aria-hidden="true"></i> Singapore</span>
                                            </di>
                                            <di class="col-md-6">
                                                <span><i class="fa fa-briefcase" aria-hidden="true"></i> 2-3 Years</span>
                                            </di>
                                        </div>
                                    </div>
                                    <div class="item job-logo">
                                        logo
                                    </div>
                                </div>
                                <div class="mt10 pr">
                                    <a href="http://" class="job-des-holder">
                                        <p class="job-desc">
                                            <span>Job Description: </span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias molestiae saepe corporis impedit laborum earum doloribus, at expedita qui. Blanditiis eum deserunt ratione sed. Quas libero itaque eveniet quaerat placeat.
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
