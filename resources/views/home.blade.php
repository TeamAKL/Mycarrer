@extends('layouts.master')

@section('content')

@include('layouts.banner')
<div class="container">
    <div class="item">
        <ul id="autoplay" class="content-slider">
            <li>
                <img src="{{asset('images/1.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/2.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/3.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/1.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/2.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/3.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/1.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/2.jpg')}}" alt="Img">
            </li>
            <li>
                <img src="{{asset('images/3.jpg')}}" alt="Img">
            </li>
            @foreach($companies as $company)
            <li>
                <a href="{{url('company/detail/'.$company->id)}}">
                    <img src="{{asset('images/company/'.$company->company_logo)}}" alt="Img">
                </a>
            </li>
            @endforeach
        </ul>
    </div>

    <div class="bg-gray my-5">
        <div class="ch job-live">
            <i class="fa fa-briefcase d-block" aria-hidden="true"></i>
            <span class="d-block">{{$posts->where('job_status', 'active')->count()}}</span>
            <span class="d-block">Job Lives</span>
        </div>
        <div class="ch today-job">
            <i class="fa fa-calendar d-block" aria-hidden="true"></i>
            <span class="d-block">{{$todayjobs}}</span>
            <span class="d-block">Today Jobs</span>
        </div>
        <div class="ch company-hiring">
            <i class="fa fa-users d-block" aria-hidden="true"></i>
            <span class="d-block">300</span>
            <span class="d-block">Companies Hiring</span>
        </div>
    </div>


    <div class="row my-5">
        @foreach($categories as $category)
        <div class="col-md-4 text-center">
            <div class="job-title">
                <a href="{{url('jobs/'.$category->id)}}">{{$category->category_name}}</a><span class="pl-4 custom-blue">{{$category->posts()->where('job_status', 'active')->count()}}</span>
            </div>
        </div>
        @endforeach
    </div>

    <!-- For Service -->

    <div id="fh5co-staff">
        <div class="container">
            <div class="col-md-12">
                <h3 class="heading-title text-center">
                    SERVICES <span>We are looking forward to being your partner.</span>
                </h3>
            </div>
            <div class="row">
                @foreach($toolkits as $toolkit)
                <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                    <div class="staff">
                        <div class="staff-img" >
                            @if(isset($toolkit->blog_image))
                            <img src="{{'images/blog/'.$toolkit->blog_image}}" alt="img" style="width: 100%;height: 200px">
                            @else
                            {!! $toolkit->video !!}
                            @endif
                        </div>

                        <h3><a href="{{'blog/'.$toolkit->id}}">{{$toolkit->title}}</a></h3>
                        <p>{{Str::limit($toolkit->content,350)}}</p>
                        <a href="{{'blog/'.$toolkit->id}}" class="btn btn-second btn-full">Detail</a>
                    </div>
                </div>
                @endforeach
                <div class="col-md-4 col-sm-6  col-xs-12 text-center">
                    <div class="staff">
                        <div class="staff-img">
                            @if(isset($latestBlog->blog_image))
                            <img src="{{'images/blog/'.$latestBlog->blog_image}}" alt="img" style="width: 100%; height: 200px">
                            @else
                            {!! $latestBlog->video !!}
                            @endif
                        </div>

                        <h3><a href="{{'blog/'.$latestBlog->id}}">{{$latestBlog->title}}</a></h3>
                        <p>{{Str::limit($latestBlog->content,350)}}</p>
                        <a href="{{'blog/'.$latestBlog->id}}" class="btn btn-second btn-full">Detail</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @push('css')
    <link rel="stylesheet" href="{{asset('css/service.css')}}">
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('css/lightslider.css')}}" />
    <style>
        div.staff-img iframe {
            width: 100% !important;
            height: 100% !important;
        }
        ul{
            list-style: none outside none;
            padding-left: 0;
            margin: 0;
        }
        .demo .item{
            margin-bottom: 60px;
        }
        .content-slider li{

            text-align: center;
            width: 175px;
            height:150px;
        }
        .content-slider img {
            margin:22px auto;
            width:130px;
            height:100px;
            box-shadow: 0 5px 8px 5px gray, 0 5px 20px 5px gray;

        }
        .demo{
            width: 800px;
        }

    </style>
    @endpush

    @push('script')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="{{asset('js/lightslider.js')}}"></script>
    <script>
        $(document).ready(function() {
            var autoplaySlider = $('#autoplay').lightSlider({
                auto:true,
                loop:true,
                autoWidth: true,
                pauseOnHover: true,
                onBeforeSlide: function (el) {
                    $('#current').text(el.getCurrentSlideCount());
                }
            });
            $('#total').text(autoplaySlider.getTotalSlideCount());
        });
    </script>
    @endpush
