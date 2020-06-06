@extends('layouts.master')

@section('content')

@include('layouts.banner')
<div class="container">
    <div class="item">
        <ul id="autoplay" class="content-slider">
            <li>
                <h3>1</h3>
            </li>
            <li>
                <h3>2</h3>
            </li>
            <li>
                <h3>3</h3>
            </li>
            <li>
                <h3>4</h3>
            </li>
            <li>
                <h3>5</h3>
            </li>
            <li>
                <h3>6</h3>
            </li>
        </ul>
    </div>

    <div class="bg-gray my-3">
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


    <div class="nth-selector my-3">
        <div class="child-jb text-center">
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
        </div>
        <div class="child-jb text-center">
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
        </div>
        <div class="child-jb text-center">
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
            <div class="job-title">
                <a href="http://">Web Developer</a><span class="pl-4 custom-blue">(4)</span>
            </div>
        </div>
    </div>
</div>

@endsection

@push('css')
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
        background-color: greenyellow;
        /* background-color: #ed3020; */
        text-align: center;
        color: #FFF;
    }
    .content-slider h3 {
        margin: 0;
        padding: 70px 0;
    }
    .demo{
        width: 800px;
    }
    .item-a { width:200px; }
    .item-b { width:340px; }
    .item-c { width:290px; }
    .item-d { width:220px; }
    .item-e { width:350px; }
    @media (max-width: 768px) {
        .item-a { width:100px; }
        .item-b { width:240px; }
        .item-c { width:190px; }
        .item-d { width:120px; }
        .item-e { width:250px; }
    }
</style>
@endpush

@push('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{asset('js/lightslider.js')}}"></script>
<script>
    // $('#carouselExample').on('slide.bs.carousel', function (e) {

        //     /*

        //     CC 2.0 License Iatek LLC 2018
        //     Attribution required

        //     */
        //     var $e = $(e.relatedTarget);
        //     var idx = $e.index();
        //     var itemsPerSlide = 7;
        //     var totalItems = $('.carousel-item').length;

        //     if (idx >= totalItems-(itemsPerSlide-1)) {
            //         var it = itemsPerSlide - (totalItems - idx);
            //         for (var i=0; i<it; i++) {
                //             // append slides to end
                //             if (e.direction=="left") {
                    //                 $('.carousel-item').eq(i).appendTo('.carousel-inner');
                    //             }
                    //             else {
                        //                 $('.carousel-item').eq(0).appendTo('.carousel-inner');
                        //             }
                        //         }
                        //     }
                        // });


                        $(document).ready(function() {
                            var autoplaySlider = $('#autoplay').lightSlider({
                                auto:true,
                                loop:true,
                                pauseOnHover: true,
                                onBeforeSlide: function (el) {
                                    $('#current').text(el.getCurrentSlideCount());
                                }
                            });
                            $('#total').text(autoplaySlider.getTotalSlideCount());
                        });
                    </script>
                    @endpush
