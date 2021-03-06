@extends('layouts.master')

@section('content')
    <div class="showLoading"></div>
<div class="dashboard-area" style="padding-bottom: 50px;">
    <div class="sticky-apply">
        <div class="container">
            <div class="detail-header top-most">
                <div class="top-most-detalil">
                    <h3>{{$post->position}}</h3>
                </div>
                <div class="middle">
                    <div class="star-share-holder">
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
                        <button type="button" class="appl-btn btn-fill" onclick="event.preventDefault(); showModal('{{$hasPostUser}}','{{$postId}}');">{{isset($hasPostUser) ?  $hasPostUser == "true" ? "Applied"  :"Apply" : '' }}</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10">

                <div class="detail-header mt20">
                    <div class="about-job-detail">
                        <h2>{{$post->position}}</h2>
                    </div>
                    <div>
                        <div class="star-share-holder">
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
                            <button type="button" class="appl-btn btn-fill" onclick="event.preventDefault(); showModal('{{$hasPostUser}}','{{$postId}}');">{{isset($hasPostUser) ?  $hasPostUser == "true" ? "Applied"  :"Apply" : '' }}</button>
                        </div>
                    </div>
                </div>

                <div class="card mt10">
                    <div class="card-body pd-b20">
                        <div class="holder">
                            <div class="item job-contact-area">
                                <a href="http://" class="job-position">
                                    <h3>
                                        {{$post->position}}
                                    </h3>
                                    <a href="{{url('company/detail/'.$post->company->id)}}">{{$post->company->company_name}}</a>
                                </a>
                                <div class="row mt10">
                                    <di class="col-md-6">
                                    <span><i class="fa fa-map-marker" aria-hidden="true"></i>{{$post->address}}</span>
                                    </di>
                                    <di class="col-md-6">
                                        <span><i class="fa fa-briefcase" aria-hidden="true"></i> {{$post->experience}} Years</span>
                                        <span><i class="fa fa-database" aria-hidden="true"></i>@if($post->salary_unit == 'USD') USD @endif {{$post->min_salary}} - {{$post->max_salary}} @if($post->salary_unit == 'MMK') MMK @endif</span>
                                    </di>
                                </div>
                            </div>
                            <div class="item job-logo">
                                <img src="{{asset('images/company/'.$post->company->company_logo)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer apply-footer">
                        <div class="posted-update">
                            <span class="posted seprate plr-10">Posted On: {{$post->created_at->diffForHumans()}}</span>
                            <span class="posted seprate plr-10">Total Views: {{$counter}}</span>
                            <span class="posted seprate plr-10">Total Applications: 5</span>
                        </div>
                        <div class="job-type">
                            <span>{{$post->type}}</span>
                        </div>
                    </div>
                    <div class="card-body ">
                        <h2 class="mb10">Job Description</h2>
                        <div class="responsibility mb10">
                            <h3>Responsibilities</h3>
                            {!! $post->job_description !!}
                        </div>
                        <div class="requriment mb10">
                            <h3>Requriments</h3>
                            {!! $post->job_requirement !!}
                        </div>
                    </div>
                </div>
                <div class="card mt20 pd-b20">
                    <div class="card-body">
                        <h2>Job Details</h2>
                        <div class="jd-holder">
                            <div class="jd-h">Compnay Name:</div>
                            <div class="jd-c"> {{$post->company->company_name}} </div>
                        </div>
                        <div class="jd-holder">
                            <div class="jd-h">Industry:</div>
                            <div class="jd-c">{{$post->job_categories->first()->category_name}}</div>
                        </div>
                        <div class="jd-holder">
                            <div class="jd-h">Roles:</div>
                            <div class="jd-c">
                                <span class="hover-custom-blue">
                                    <a href="http://">{{$post->position}}</a>
                                </span>
                            </div>
                        </div>
                        {{-- <div class="jd-holder">
                            <div class="jd-h">Skills:</div>
                            <div class="jd-c">
                                <span class="oval-shape oval-hover"><a href="http://">PHP Developer</a></span>
                                <span class="oval-shape oval-hover"><a href="http://">PHP Programmer</a></span>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="card mt20 pd-b20">
                    <div class="card-body">
                        <div class="star-share-holder">
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
                            <button type="button" class="appl-btn btn-fill" onclick="event.preventDefault();showModal('{{$hasPostUser}}','{{$postId}}');">{{isset($hasPostUser) ?  $hasPostUser == "true" ? "Applied"  :"Apply" : '' }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="cvUploadModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apply For {{$post->position}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{url('applyCv')}}" method="post" enctype="multipart/form-data" id="applyForm">
            @csrf
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="form-group row pt-3">
                        <label for="cover_letter" class="col-sm-3 col-form-label">Cover Letter</label>
                        <div class="col-sm-9">
                        <textarea class="form-control" maxlength="300" row="5" id="cover_letter" name="cover_letter" placeholder="Max length 300"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="company_email" value="{{$post->company->company_email}}"/>
            <input type="hidden" name="post_id" value="{{$post->id}}"/>
            <div class="apply-modal-body">
                <div class="upload-resume mb10">
                    <div class="d-flex justify-content-center mb10">
                        <i class="fa fa-cloud-upload" style="font-size: 31px; color: #5d4da8"></i>
                    </div>
                    <div class="line-btn text-center cvname">Select New CV</div>
                    <p class="text-center mb0">* pdf </p>
                    <input type="file" name="upload_resume" class="resume" id="upload_resume">
                </div>
                <div class="ib hroizonal-line mb30">
                    <div class="horizonal-text">OR</div>
                </div>
                <p class="text-center">
                    <input name="checkcv" type="checkbox" value="use_current_cv" class="btn btn-primary" id="checkcv"> <label for="checkcv">Use Current CV</label>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button class="btn btn-warning" type="submit">Apply</button>

            </div>
        </form>
    </div>
</div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
<link rel="stylesheet" href="{{asset('css/custom_card.css')}}">
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
@endpush

@push('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="{{asset('js/seeker.js')}}"></script>
<script>

    @if(session()->has('needcv'))
    console.log("hello in");
    swal('Sorry!','You need to upload CV first','error');
    @endif

    function showModal(check , post_id = null) {
        if(check == 1){
            window.location.href= '../applied-job/'+post_id;
        }else{
            $('#cvUploadModal').modal('toggle');
        }
    }

    $("input.resume").on("change", function() {
        if($(this).val().length != 0) {
            var name = $(this)[0].files[0].name;
            $("div.cvname").html(name);
        } else {
            $("div.cvname").html("Select New CV");
        }
    });

    $("#applyForm").submit(function(e) {
        $('#cvUploadModal').modal('hide');
        $("div.cvname").html("Select New CV");
        $(".showLoading").show().delay( 800 );
    });

    $("div.cvname").html("Select New CV");

</script>
@endpush
