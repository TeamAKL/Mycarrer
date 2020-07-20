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
                    <div class="profile-avatar avatar-dashboard">
                    <form method="post" enctype="multipart/form-data" action="{{url('profile_detail/create')}}" id="formid">
                            @csrf
                        @if(isset($user->profile_details->profile_image))
                        <img src="{{asset('images/seeker_profile/'.$user->profile_details->profile_image)}}" alt="" class="current-user">
                        @else
                        <img src="{{asset('images/seeker_profile/defaultavator.webp')}}" alt="" class="current-user">
                        @endif
                        <label for="avatar" class="camera-btn">
                            <input type="file" name="profile_image" id="avatar">
                            <i class="fa fa-camera"></i>
                        </label>
                    </form>
                    </div>
                    {{-- <img src="{{asset('images/adele.jpg')}}" alt="" class="current-user"> --}}
                    <h4 class="d-block">{{Auth::user()->name}}</h4>
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
        @if(isset($user->profile_details))
        <p class="d-flex justify-content-end">Last Updated on: {{$user->profile_details->updated_at->format('j F Y')}}</p>
        @endif
        <div class="row pt-3">
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
                                @if(isset($user->profile_details->resume))
                                <p class="mb0">{{$user->profile_details->resume}}</p>
                                <div class="cv-upload-action">
                                    <a href="{{route('cv_file.getDocument')}}" data-toggle="tooltip" title="Download File" class='btn' style=""><i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    </a>
                                    <a href="{{route('cv_file.dropDocument')}}" data-toggle="tooltip" title="Delete File" class='btn' style=""><i class="fa fa-cloud-download" aria-hidden="true"></i>
                                    </a>
                                </div>
                                    @else
                                    <p class="mb0">Upload Resume</p>
                                @endif
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
                @include('users.job_preference')
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

            <!-- Course And Certification -->
            <div class="col-md-12 col-sx-12 mb10">
                @include('users.certificate')
            </div>

            <!-- Personal Detail -->
            <div class="col-md-12 col-sx-12 mb10">
                @include('users.personalDetail')
            </div>
            <a href="{!! route('seeker.generate_certificate', [$user['id']]) !!}"
            class="btn btn-warning pull-right" style="margin-right: 28px;margin-bottom: 10px;"
            target="_blank"><i class="fa fa-certificate"></i> Generate
            PDF</a>
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
                    <form action="{{url('profile_detail/create')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="upload-resume mb10">
                                        <div class="d-flex justify-content-center mb10">
                                            <i class="fa fa-cloud-upload" style="font-size: 31px; color: #5d4da8"></i>
                                        </div>
                                        <div class="line-btn text-center">select file to upload</div>
                                        <p class="text-center mb0">* doc, docx, rtf, pdf - Max. 6 MB</p>
                                        <input type="file" name="upload_resume" class="resume">
                                    </div>
                                    <div class="ib hroizonal-line mb30">
                                        <div class="horizonal-text">OR</div>
                                    </div>
                                    <div class="copy-paste-resume mt10">
                                        <textarea name="text_resume" row="12" placeholder="Copy and paste resume"></textarea>
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

        // avatar save

        $("#avatar").on("change", function() {
            if($(this).val().length != 0) {
               $("#formid").submit();
            }
        });
    });
</script>
<script src="{{asset('js/customselect.js')}}"></script>
@endpush
