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
        </ul>
    </div>

    <div class="bg-gray my-5">
        <div class="ch job-live">
            <i class="fa fa-briefcase d-block" aria-hidden="true"></i>
            <span class="d-block">3000</span>
            <span class="d-block">Job Lives</span>
        </div>
        <div class="ch today-job">
            <i class="fa fa-calendar d-block" aria-hidden="true"></i>
            <span class="d-block">300</span>
            <span class="d-block">Today Jobs</span>
        </div>
        <div class="ch company-hiring">
            <i class="fa fa-users d-block" aria-hidden="true"></i>
            <span class="d-block">300</span>
            <span class="d-block">Companies Hiring Today</span>
        </div>
    </div>


    <div class="row my-5">
        @foreach($categories as $category)
        <div class="col-md-4 text-center">
            <div class="job-title">
            <a href="http://">{{$category->category_name}}</a><span class="pl-4 custom-blue">{{$category->posts()->count()}}</span>
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
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="staff">
                            <div class="staff-img" style="background-image: url({{asset('images/it.jpg')}});">	
                            </div>
                            
                            <h3><a href="#">Mike Smith</a></h3>
                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit.
                               Nullam ac urna eu felis dapibus condimentum. Sed ut imperdiet nisi.</p>
                            <a href="" class="btn btn-second btn-full">Detail</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 text-center">
                        <div class="staff">
                            <div class="staff-img" style="background-image: url({{asset('images/it.jpg')}});">	
                            </div>
                            
                            <h3><a href="#">Mike Smith</a></h3>
                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. 
                               Nullam ac urna eu felis dapibus condimentum.Sed ut imperdiet nisi.</p>
                            <a href="" class="btn btn-second btn-full">Detail</a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6  col-xs-12 text-center">
                        <div class="staff">
                            <div class="staff-img" style="background-image: url({{asset('images/it.jpg')}});">
                            </div>
                            
                            <h3><a href="#">Mike Smith</a></h3>
                            <p>Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. 
                               Nullam ac urna eu felis dapibus condimentum. Sed ut imperdiet nisi.</p>
                            <a href="" class="btn btn-second btn-full">Detail</a>
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
