@extends('layouts.master')
@section('content')
@include('seeker.searchContainer')

<div class="dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-4">
                <h2 class="main-header">My Profile</h2>
                <div class="row">
                    <div class="col-md-12 mb10">
                        <div class="bg-white pd20">
                            <p class="score-text">Profile Score</p>
                            <div class="scroe">
                                <div class="inside-scroe" style="--color:red; --width: 70%;"></div>
                                <span class="scroe-percent" style="--left: 70%;">70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="bg-white pd20 d-flex center ">
                            <img src="{{asset('images/adele.jpg')}}" alt="" class="current-user">
                        <h2 class="d-block">{{Auth::user()->name}}</h2>
                            <p>Fresher</p>
                            <div class="flex-row">
                                <p>+95957363847</p>
                                <a href="http://">Verify</a>
                            </div>
                            <div class="flex-row">
                            <p>{{Auth::user()->email}}</p>
                                <a href="http://">Verify</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-xs-8">
                <p class="d-flex justify-content-end">Last Updated on: 7 january 2020</p>
                <div class="row">
                    <div class="col-md-12 col-xs-12 mb10">
                        <div class="bg-white row">
                            <div class="col-md-9">
                                <h4 class="medium">Fresher</h4>
                            </div>
                            <div class="col-md-3">
                                <a class="fr blue-color show-modal" id="fr"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12 mb10">
                        <div class="bg-white row">
                            <div class="col-md-9">
                                <h4 class="medium">Resume</h4>
                            </div>
                            <div class="col-md-3">
                                <a class="fr blue-color show-modal" id="resume"><i class="fa fa-upload" aria-hidden="true"></i></a>
                            </div>
                            <div class="col-md-12 mt10">
                                <div class="show-upload-cv">
                                    <div class="ico-holder">
                                        <i class="fa fa-file-text-o" style="font-size: 40px; color: #5d4da8"></i>
                                    </div>
                                    <div class="upload-cv-text">
                                        <p class="mb0">Thet Tun</p>
                                        <div class="cv-upload-action">
                                            <a href="http://">Download</a>
                                            <a href="http://">Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sx-12 mb10">
                        <div class="bg-white row">
                            <div class="col-md-9">
                                <h4 class="medium">Skills</h4>
                            </div>
                            <div class="col-md-3">
                                <a class="fr blue-color show-modal" id="skill"><i class="fa fa-plus"></i>Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sx-12 mb10">
                        <div class="bg-white row">
                            <div class="col-md-9">
                                <h4 class="medium">IT Skills</h4>
                            </div>
                            <div class="col-md-3">
                                <a class="fr blue-color show-modal" id="skill"><i class="fa fa-plus"></i>Add</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-sx-12 mb10">
                        <div class="bg-white row">
                            <div class="col-md-9">
                                <h4 class="medium">Job Preference</h4>
                            </div>
                            <div class="col-md-3">
                                <a class="fr blue-color show-modal" id="job-preference"><i class="fa fa-pencil"></i></a>
                            </div>
                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">industry:</div>
                                            <div class="col-md-7 column-color fw400">IT/Computers - Software</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Function:</div>
                                            <div class="col-md-7 column-color fw400">IT</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Role:</div>
                                            <div class="col-md-7 column-color fw400">Software Engineer/Programmer</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Job Type:</div>
                                            <div class="col-md-7 column-color fw400">Permanent</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Employment Type:</div>
                                            <div class="col-md-7 column-color fw400">Full</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Preferred Shift:</div>
                                            <div class="col-md-7 column-color fw400">Day Shift</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Preferred Location:</div>
                                            <div class="col-md-7 column-color fw400">Singapore, Myanmar</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-5 fw700">Expected Salary:</div>
                                            <div class="col-md-7 column-color fw400">Monthly salary:SGD 3200</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-5 fw700">Are you willing to work 6 days a week?</div>
                                    <div class="col-md-7 column-color fw400">Yes</div>
                                </div>
                            </div>

                            <div class="col-md-12 col-xs-12 mt15">
                                <div class="row">
                                    <div class="col-md-5 fw700">Are you open to joining early stage startups?</div>
                                    <div class="col-md-7 column-color fw400">Yes</div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12 col-sx-12 mb10">
                        @include('users.workexperience')
                    </div>

                    <!-- Education Detail -->
                    <div class="col-md-12 col-sx-12 mb10">
                        @include('users.education')
                    </div>

                    <!-- Projects -->
                    <div class="col-md-12 col-sx-12 mb10">
                        @include('users.project')
                    </div>
                </div>
            </div>
            <!-- CModal Overly Section -->
            <div class="cmodal-overly fr-overly">
                <div class="global-modal fr-modal">
                    <span class="close-modal"><i class="fa fa-close"></i></span>
                    <div class="modal-body">
                        <div class="cmodal-header d-block">
                            <h3>Profile Summary</h3>
                        </div>
                        <div class="modal-description mt10">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label for="">Enter Your Summary</label>
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

            <div class="cmodal-overly resume-overly">
                <div class="global-modal resume-modal">
                    <span class="close-modal"><i class="fa fa-close"></i></span>
                    <div class="modal-body">
                        <div class="cmodal-header d-block">
                            <h3>Upload Resume</h3>
                            <p>Upload your resume to get more opportunity to your relevant profile.</p>
                        </div>
                        <div class="modal-description mt10">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="upload-resume mb10">
                                                <div class="d-flex justify-content-center mb10">
                                                    <i class="fa fa-cloud-upload" style="font-size: 31px; color: #5d4da8"></i>
                                                </div>
                                                <p class="mb30 text-center">Thet_Tun.pdf</p>
                                                <div class="line-btn text-center">or select file to upload</div>
                                                <p class="text-center mb0">* doc, docx, rtf, pdf - Max. 6 MB</p>
                                                <input type="file" name="" class="resume">
                                            </div>
                                            <div class="ib hroizonal-line mb30">
                                                <div class="horizonal-text">OR</div>
                                            </div>
                                            <div class="copy-paste-resume mt10">
                                                <textarea name="" row="12" placeholder="Copy and paste resume"></textarea>
                                            </div>
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

            <div class="cmodal-overly skill-overly">
                <div class="global-modal skill-modal">
                    <span class="close-modal"><i class="fa fa-close"></i></span>
                    <div class="modal-body">
                        <div class="cmodal-header d-block">
                            <h3>Skills</h3>
                        </div>
                        <div class="modal-description mt10">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="custom-group">
                                                <input type="text" name="" id="name" class="formbb inputc">
                                                <label for="name" class="test">Please Type Here</label>
                                            </div>
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

            <div class="cmodal-overly job-preference-overly">
                <div class="global-modal job-preference-modal">
                    <span class="close-modal"><i class="fa fa-close"></i></span>
                    <div class="modal-body">
                        <div class="cmodal-header d-block mb10">
                            <h3>Job Preference</h3>
                        </div>
                        <div class="modal-description mt15">
                            <form action="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="floating-label-input mb10">
                                                <input type="text" id="id" required/>
                                                <label for="id" >Preferred Industry</label>
                                                <span class="line"></span>
                                            </div>

                                            <div class="floating-label-input mb10">
                                                <input type="text" id="pfunction" required/>
                                                <label for="pfunction">Preferred Function</label>
                                                <span class="line"></span>
                                            </div>

                                            <div class="floating-label-input mb30">
                                                <input type="text" id="prole" required/>
                                                <label for="prole">Preferred Role</label>
                                                <span class="line"></span>
                                            </div>
                                            {{-- <div class="custom-group">
                                                <input type="text" name="" id="name" class="formbb inputc" >
                                                <label for="name" class="test">Preferred Industry</label>
                                            </div>

                                            <div class="custom-group">
                                                <input type="text" name="" id="name" class="formbb inputc">
                                                <label for="name" class="test">Preferred Function</label>
                                            </div>

                                            <div class="custom-group">
                                                <input type="text" name="" id="name" class="formbb inputc" >
                                                <label for="name" class="test">Preferred Role</label>
                                            </div> --}}

                                            <div class="custom-group">
                                                <span class="group-lable">Job Type</span>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Permanent</span>
                                                    <input type="radio" name="gender" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container pr162">
                                                    <span class="clabel">Temporary/Contract</span>
                                                    <input type="radio" name="gender" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container">
                                                    <span class="clabel">Both</span>
                                                    <input type="radio" name="gender" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="custom-group">
                                                <span class="group-lable">Employment Type</span>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Full time</span>
                                                    <input type="radio" name="emp_type" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Part time</span>
                                                    <input type="radio" name="emp_type" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container">
                                                    <span class="clabel">Both</span>
                                                    <input type="radio" name="emp_type" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            {{-- <div class="custom-group">
                                                <input type="text" name="" id="name" class="formbb inputc" >
                                                <label for="name" class="test">Preferred Shift</label>
                                            </div> --}}

                                            <div class="floating-label-input mb30">
                                                <input type="text" id="pshift" required/>
                                                <label for="pshift">Preferred Shift</label>
                                                <span class="line"></span>
                                            </div>

                                            <div class="custom-group">
                                                <span class="group-lable">Expected Salary</span>
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        {{-- <input type="text" name="currency_unit" id="" class="formbb"> --}}
                                                        <div class="custom-select">
                                                            <select name="slaray_unit" id="">
                                                                <option value="">Select</option>
                                                                <option value="">USD</option>
                                                                <option value="">MMK</option>
                                                                <option value="">SGD</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" name="salary_amount" id="" class="formbb">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="custom-group">
                                                <span class="group-lable">Salary Mode</span>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Monthly</span>
                                                    <input type="radio" name="salary_mode" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Annually</span>
                                                    <input type="radio" name="salary_mode" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="custom-group">
                                                <span class="group-lable">Are you willing to work 6 days a week?</span>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Yes</span>
                                                    <input type="radio" name="work" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">No</span>
                                                    <input type="radio" name="work" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

                                            <div class="custom-group">
                                                <span class="group-lable">Are you open to joining early stage startups?</span>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">Yes</span>
                                                    <input type="radio" name="join" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <label class="radio-lable-container pr100">
                                                    <span class="clabel">No</span>
                                                    <input type="radio" name="join" value="permanent">
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>

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
        @endsection
        @push('css')
        <link rel="stylesheet" href="{{asset('css/banner.css')}}">
        <link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
        <link rel="stylesheet" href="{{asset('css/profile.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker3.standalone.css')}}">
        @endpush

        @push('script')
        <script src="{{asset('js/seeker.js')}}"></script>
        <script src="{{asset('js/bootstrap-datepicker.js')}}"></script>
        <script>
            $(document).ready(function() {

                $(".tocurrent").datepicker({
                    format: 'dd-MM-yyyy',
                    endDate: "0d",
                    todayHighlight: true
                });

                $(".startyear").datepicker({
                    format: "yyyy",
                    viweMode: "years",
                    minViewMode: "years",
                    endDate: "year"
                });

                $(".month").datepicker({
                    format: "MM",
                    viweMode: "months",
                    minViewMode: "months",
                    endDate: 'today',
                    todayHighlight: true
                });
            });
        </script>
        <script src="{{asset('js/customselect.js')}}"></script>
        @endpush
