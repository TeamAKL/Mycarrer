<div class="jumbotron jumbotron-fluid bg-jumbotron">
    <div class="container">
        <div class="banner-header">
            <h2 class="bg-logo">Find Smarter, Faster & Better with MyCareers</h2>
            <div class="search-close">
                <i class="fa fa-times" aria-hidden="true" id="close-icon"></i>
            </div>
        </div>
        <div class="custom-row">
            <div class="search-engin">
                <div class="unexpend-nav-bar">
                    <ul class="search-nav">
                        <li class="search-nav-itme"><a href="{{url('show_all_jobs')}}" class="search-nav-link-name">All Jobs</a></li>
{{--                        <li class="search-nav-itme"><a href="{{url('show_contract_jobs')}}" class="search-nav-link-name">Contract Jobs</a></li>--}}
                        <li class="search-nav-itme"><a href="{{url('show_fresher_jobs')}}" class="search-nav-link-name">Fresher Jobs</a></li>
                        <li class="search-nav-itme"><a href="{{url('show_part_time_jobs')}}" class="search-nav-link-name">Part Time</a></li>
                    </ul>
                </div>
                <form class="user-search-form" action="{{url('result')}}" method="GET">
                    @csrf
                    <div class="form-row">
                        <div class=" input-group mb-2 col-md-10 pl-pr-0" id="change-md">
                            <div class="input-group-prepend ">
                                <div class="input-group-text custom-input"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" name="skill" id="search" class="form-control custom-input" placeholder="Search by Skills, Company & Job Title">
                        </div>
                        <div class="input-group mb-2 col-md-3 expend-search-form pl-pr-0">
                            <div class="input-group-prepend ">
                                <div class="input-group-text custom-input"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" name="location" class="form-control custom-input" id="location" placeholder="Location">
                        </div>
                        <div class="col-md-3 expend-search-form pl-pr-0">
                            <select class="form-control custom-input" id="selectoption" name="experience">
                                <option>Experience</option>
                                <option value="0">0 Year</option>
                                <option value="1">1 Year</option>
                                <option value="2">2 Year</option>
                                <option value="3">3 Year</option>
                                <option value="4">4 Year</option>
                                <option value="5">5 Year</option>
                                <option value="6">6 Year</option>
                                <option value="7">7 Year</option>
                                <option value="8">8 Year</option>
                                <option value="9">9 Year</option>
                                <option value="10">10 Year</option>
                                <option value="11">More than 10 Year</option>
                            </select>
                        </div>
                        <div class="col-md-2 col-sm-12 pl-pr-0 mb-mt">
                            <input type="submit" value="Search" class="custom-btn" disabled>
                        </div>
                    </div>
                </form>
                <!-- <a href="http://" class="search-model" data-toggle="modal" data-target=".bd-example-modal-lg">Advanced Search</a> -->
            </div>

            <div class="right-side">
                <div class="upload-cv">
                    @guest
                    <h3 class="pt-3 text-center">Register With Us</h3>
                    <div class="row my-3">
                        <div class="col-md-6 sepreater">
                            <a href="{{url('seeker/login')}}" class="button-fill button-custom v-align-center">Upload Resume</a>
                        </div>
                        <div class="col-md-6">
                            <a href="" class="c-yellow button-custom v-align-center">Create Job Alert</a>
                        </div>
                    </div>
                    @else
                    <div class="profile">
                        <div class="row mb10">
                            <div class="col-xs-9 col-sm-8 col-md-8" style="text-align:center;">
                             {{Auth::user()->name}}<br>
                             {{-- <img src="{{asset('images/1.jpg')}}" alt="Profile Photo" class="img-thumbnail" width="110px" height="89px"> --}}
                             @if(isset(Auth::user()->profile_details->profile_image))
                             <img src="{{asset('images/seeker_profile/'.Auth::user()->profile_details->profile_image)}}" alt="" class="img-thumbnail" width="110px">
                             @else
                             <img src="{{asset('images/seeker_profile/defaultavator.webp')}}" alt="" class="img-thumbnail" width="110px">
                             @endif
                            </div>
                            <?php
                            $percentage = (\Illuminate\Support\Facades\Session::get('user_score')) != '' ? \Illuminate\Support\Facades\Session::get('user_score') : 0;
                            $result = (($percentage/100) * 180).'deg';
                            ?>
                            <div class="col-xs-3 col-sm-4 col-md-4">
                                <div class="circle-wrap">
                                    <div class="circle">
                                        <div class="mask full" style="--transform:rotate({{$result}});">
                                            <div class="fill" style="--transform:rotate({{$result}});"></div>
                                        </div>
                                        <div class="mask half">
                                            <div class="fill" style="--transform:rotate({{$result}});"></div>
                                        </div>

                                        <div class="inside-circle" >{{$percentage.'%'  }}</div>
                                    </div>
                                </div>
                                <div class="profile-scroe">Profile Scroe</div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 offset-md-3 col-sm-6 actions text-center">
                                <!-- <div class="profile-meter">
                                    <div class="view">
                                        <span><span class="badge badge-primary badge-pill">14</span>Pending Actions</span>
                                    </div>
                                </div> -->
                                <div class="text-center">
                                    <a href="{{url('seeker/profile')}}" class="btn btn-info">Update Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">ADVANCED SEARCH</h5>
                    <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="skill" class="label-color">Key Skill</label>
                            <input type="text" class="form-control" id="skill" placeholder="Enter Job Key">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="loaction" class="label-color">Locations</label>
                            <input type="text" class="form-control" id="loaction" placeholder="Location">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="experience" class="label-color">Experience</label>
                            <select id="experience" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="month-search">  </label>
                            <select class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="industry" class="label-color">Industry</label>
                            <select id="industry" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="function" class="label-color">Function</label>
                            <select id="function" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <input type="submit" value="Show Jobs" class="shearch-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ADVANCED SEARCH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div> --}}

@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
<link rel="stylesheet" href="{{asset('css/banner_responsive.css')}}">
@endpush
