@extends('layouts.master')

@section('content')

@include('seeker.searchContainer')


    <div class="container">
        <div class="row">
            <div class="col-xs-12">
              <div class="mn-shdcmmn">
                <h1 class="mn_h1 mrgnbtm20" style="font-size:20px">About Us</h1>
        
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
@endsection
@push('css')
    <link rel="stylesheet" href="{{asset('css/banner.css')}}">
    <link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
     
    <style>
        body{
            background-color: #f8fafc;
            margin: 0;
            font-family: "Nunito", sans-serif;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
        }
        .mn_h1{
            font-size: 20px;
            font-weight:bold;
        }
        .container {
            padding: 10px 15px;
            margin-right: auto;
            margin-left: auto;
        }
        * {
            line-height: 1.2;
            outline: none;
            text-rendering: optimizeLegibility;
            /* font-family:!important; */
        }
        *, :after, :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }
        div {
            display: block;
        }
        .col-xs-12 {
            width: 100%;
        }
        .mn-shdcmmn {
            background: #fff;
            margin-bottom: 30px;
            border: 1px solid #f5f5f5;
            padding: 30px;
        }
        .mrgnbtm20 {
            margin-bottom: 20px;
        }
        .pt6 {
            margin-top: 5px;
            padding-top: 6px;
        }
        .custom-btn {
            border-radius: unset !important;
            opacity: 1;
            background: #5d4da8;
            border: 1px solid #5d4da8;
            color: #fff;
            padding: 0.375rem 1.75rem;
            height:36px;
        }
    </style>
@endpush
@push('script')
 <script src="{{asset('js/seeker.js')}}"></script>
@endpush