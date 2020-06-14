@extends('layouts.app', ['pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category ">All Jobs</h5>
                    <h3 class="card-title">12</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Active Jobs</h5>
                    <h3 class="card-title">3</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Closed Jobs</h5>
                    <h3 class="card-title">9</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Successfull Jobs</h5>
                    <h3 class="card-title">8</h3>
                </div>
            </div>
        </div>
    </div>
    <p>Welcome {{Auth::user()->name}} Today is {{ \Carbon\Carbon::now()->format('j F Y') }},</p>
    <div class="row">
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-simple-add text-primary fs-2"></i></h5>
                        <h5 class="card-title">Create New Job Post</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-coins text-primary fs-2"></i></h5>
                        <h5 class="card-title">Resumes Database</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-badge text-primary fs-2"></i></h5>
                        <h5 class="card-title">Applied Resume</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-paper text-primary fs-2"></i></h5>
                        <h5 class="card-title">History List</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-single-02 text-primary fs-2"></i></h5>
                        <h5 class="card-title">Users</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="http://">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-laptop text-primary fs-2"></i></h5>
                        <h5 class="card-title">Services</h5>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush
