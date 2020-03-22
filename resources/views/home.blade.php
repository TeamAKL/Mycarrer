@extends('layouts.master')

@section('content')
@include('layouts.banner')
<div class="container-fluid">
    <div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="900000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2 active">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400/000/fff?text=1" alt="slide 1">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=2" alt="slide 2">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=3" alt="slide 3">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=4" alt="slide 4">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=5" alt="slide 5">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=6" alt="slide 6">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=7" alt="slide 7">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=8" alt="slide 8">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=9" alt="slide 9">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=10" alt="slide 10">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=11" alt="slide 11">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=12" alt="slide 12">
            </div>
            <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-2">
                <img class="img-fluid mx-auto d-block" src="//placehold.it/600x400?text=13" alt="slide 13">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <i class="fa fa-chevron-left fa-lg text-muted"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <i class="fa fa-chevron-right fa-lg text-muted"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endpush

@push('script')
<script>
    $('#carouselExample').on('slide.bs.carousel', function (e) {

        /*

        CC 2.0 License Iatek LLC 2018
        Attribution required

        */


        var $e = $(e.relatedTarget);
        var idx = $e.index();
        var itemsPerSlide = 7;
        var totalItems = $('.carousel-item').length;

        if (idx >= totalItems-(itemsPerSlide-1)) {
            var it = itemsPerSlide - (totalItems - idx);
            for (var i=0; i<it; i++) {
                // append slides to end
                if (e.direction=="left") {
                    $('.carousel-item').eq(i).appendTo('.carousel-inner');
                }
                else {
                    $('.carousel-item').eq(0).appendTo('.carousel-inner');
                }
            }
        }
    });</script>
    @endpush
