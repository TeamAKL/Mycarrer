@extends('layouts.master')

@section('content')

{{-- @include('seeker.searchContainer') --}}
@include('layouts.banner')
<div class="dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="mn-shdcmmn">
                    <h1 class="mn_h1 mrgnbtm20" style="font-size:20px">Policy</h1>

                    <div class="mrgnbtm20">MyCareers is a global online employment solution for people seeking jobs and the employers who need great people. We've been doing this for more than 20 years, and have expanded from our roots as a "job board" to a global provider of a full array of job seeking, career management, recruitment and talent management products and services.</div>


                    <div class="mrgnbtm20">At the heart of our success and our future is innovation: We are changing the way people think about work, and we're helping them actively improve their lives and their workforce performance with new technology, tools and practices</div>

                    <div class="mrgnbtm20"> <h4>A MyCareers purpose</h4><em>Why we do what we do</em> </div>

                    <div class="mrgnbtm20">At MyCareers, we work to bring humanity and opportunity to the job market, to enhance lives, businesses and communities around the world. </div>

                    <div class="mrgnbtm20"> <h4>A Monster vision</h4><em>Who we want to be</em> </div>

                    <div class="mrgnbtm20">Monster will be the leading global talent platform connecting jobs and people.</div>

                    <div class="mrgnbtm20"> <h4>A MyCareers mission</h4><em>How we deliver that vision</em> </div>

                    <div class="mrgnbtm20">We create and deliver the best recruiting media, technologies and platforms for connecting jobs and people; we strive every day to help our customers hire and help people find jobs.</div>

                    <div class="mrgnbtm20"> <h4>Why MyCareers?</h4> </div>

                    <div class="mrgnbtm20">MyCareers with its cutting edge technology provides relevant profiles to employers and relevant jobs to jobseekers across industry verticals, experience levels and geographies.</div>

                    <div class="mrgnbtm20">We help employers find not only the best quality candidates, but more of them. To streamline the process so you can save time and money. And to help you make smarter decisions to improve your ROI. Basically, we want to give you the ability to hire like no one else can.</div>

                    <br>
                    <br>
                </div>
            </div>


        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
@endpush
@push('script')
<script src="{{asset('js/seeker.js')}}"></script>
@endpush