@extends('layouts.master')

@section('content')
@include('layouts.banner')
<div class="dashboard-area">
    <div class="container">
        <div class="pt-3">
            <h3>About</h3>
            My Careers is the most reliable digital recruitment services company in Myanmar, and trying to be smart and smooth transaction between employers and jobseekers we work to keep the best talent candidates on our recruitment digital platform, and provide the best talent to our best employer.
        </div>
        <div class="mt-3">
            <h3>Purpose</h3>
            <div>
                <p style="margin-bottom: 0px;">1.	We work to bring smart and smooth Digital recruitment services platform.</p>
                <p>2.	To improve our community with the best careers and provide it to the best employers.</p>
            </div>
        </div>

        <div class="mt-3">
            <h3>Vision</h3>
            <p>My careers will be leading the most reliable digital platform for recruitment services.</p>
        </div>

        <div class="mt-3">
            <h3>Mission</h3>
            <p>
                We create and deliver with smart and smooth digital recruitment services platform to meet up the best employers and talent candidates.
            </p>
        </div>

        <div class="mt-3 pb-3">
            <h3>Why My Careers?</h3>
            <p style="margin-bottom: 0px;">
                We are driving in the age of digital platform to provide digital recruitment services between our best employers and talent candidates. We make it smart and smooth digital platform. We believe that we are the best business partner of yours.
            </p>
        </div>

    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
<style>
    .jumbotron {
        margin-bottom: 0px !important;
    }
</style>
@endpush
@push('script')
<script src="{{asset('js/seeker.js')}}"></script>
@endpush
