@extends('layouts.master')

@section('content')
    @include('layouts.banner')

    <!-- Company Slide -->
    <div class="container">
        <div class="company-slider">
        </div>
    </div>


@endsection

@push('css')
    <link rel="stylesheet" href="{{asset('css/slider.css')}}">
@endpush
