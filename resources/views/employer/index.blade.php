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
                <a href="http://" data-toggle="modal" data-target=".bd-example-modal-lg" onclick="e.preventDefault();">
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

{{--Create Job Modal --}}
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Create New Job Post</h3>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove"></i>
                </button>
            </div>
            <div class="modal-body">
                <form class="modal-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="job-position">Job Position</label>
                            <input type="text" class="form-control" id="job-position" placeholder="Job Position">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="job-type">Job Type</label>
                            <input type="text" class="form-control" id="job-type" placeholder="Job Type">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="form-group">
                        <label for="job-category">Select Category</label>
                        <select name="" id="job-category" class="form-control">
                            <option value="">Mane</option>
                        </select>
                    </div>

                    <div class="form-group ">
                        <label for="" class="pd-r">Employer Type</label>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> Male
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> Female
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> Both
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Number Of Employer</label>
                            <input type="text" class="form-control" id="inputCity">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="amount">Salary Amount</label>
                            <input type="text" class="form-control" id="amount">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="unit">Salary Unit</label>
                            <select id="unit" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="department">Department</label>
                                <input type="text" class="form-control" id="department" placeholder="HR Department">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="report-to">Report To</label>
                                <input type="text" class="form-control" id="report-to" placeholder="HR Manager">
                            </div>
                        </div>

                    <div class="form-group">
                        <label for="job-description">Job Description</label>
                        <textarea class="form-control" id="job-description" placeholder="Job Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="job-requirement">Job Requirement</label>
                        <textarea class="form-control" id="job-requirement" placeholder="Job Requirement"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" value="">
                                Urgent
                                <span class="form-check-sign">
                                    <span class="check"></span>
                                </span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Post</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush
