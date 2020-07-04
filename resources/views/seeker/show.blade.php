@extends('layouts.master')

@section('content')
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
                        <a href="" class="appl-btn btn-fill" email="{{$post->company->company_email}}">Apply</a>
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
                            <a href="" class="appl-btn btn-fill" email="{{$post->company->company_email}}">Apply</a>
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
                                    <a href="http://">{{$post->company->company_name}}</a>
                                </a>
                                <div class="row mt10">
                                    <di class="col-md-6">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i> Singapore</span>
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
                            <h3>Responsibilities:</h3>
                            {!! $post->job_description !!}
                        </div>
                        {{-- <div class="requriment mb10">
                            <h3>Requriments:</h3>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos dolorum ratione magni fugit, doloribus at recusandae adipisci, aspernatur ipsam, voluptate mollitia quia accusamus alias tenetur aliquam qui deleniti. Modi, sunt!
                            </p>
                        </div> --}}
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
                        <div class="jd-holder">
                            <div class="jd-h">Skills:</div>
                            <div class="jd-c">
                                <span class="oval-shape oval-hover"><a href="http://">PHP Developer</a></span>
                                <span class="oval-shape oval-hover"><a href="http://">PHP Programmer</a></span>
                            </div>
                        </div>
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
                            <a href="" class="appl-btn btn-fill" email="{{$post->company->company_email}}">Apply</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
<link rel="stylesheet" href="{{asset('css/custom_card.css')}}">
@endpush

@push('script')
<script src="{{asset('js/seeker.js')}}"></script>
    <script>
        $('.appl-btn').on('click',function (e) {
            e.preventDefault();
            let email = $(this).attr('email');
            $.ajax({
                type: 'get',
                url: '{{URL::to("sendEmail")}}',
                data: {'email':email},
                success: function(data) {
                   console.log(data);

                }
            });
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        });
    </script>
@endpush
