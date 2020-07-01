@extends('layouts.app', ['page' => __('Dashboard'), 'pageSlug' => 'dashboard'])
@section('content')
<div class="container">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category ">All Jobs</h5>
                    <h3 class="card-title">{{$company->posts()->count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Active Jobs</h5>
                    <h3 class="card-title">{{$company->posts()->where('job_status', 'active')->count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Closed Jobs</h5>
                    <h3 class="card-title">{{$company->posts()->where('job_status', 'closed')->count()}}</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ">
            <div class="card card-chart">
                <div class="card-header text-center">
                    <h5 class="card-category">Successfull Jobs</h5>
                    <h3 class="card-title">{{$company->posts()->where('job_status', 'successed')->count()}}</h3>
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
                <a href="{{url('allresumes')}}">
                    <div class="card-header text-center ptb">
                        <h5 class="card-category "><i class="tim-icons icon-coins text-primary fs-2"></i></h5>
                        <h5 class="card-title">Resumes Database</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card card-chart">
                <a href="{{url('appliedresume')}}">
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
                <a href="{{url('profile')}}">
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
                <form class="modal-form" action="{{route('createpost')}}" method="post" id="potCreateForm">
                    @csrf
                    <input type="hidden" name="company_id" value="{{$company->id}}">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="job-position">Job Position</label>
                            <input type="text" name="jobposition" class="form-control" id="job-position" placeholder="Job Position">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="job-type">Job Type</label>
                            <select name="jobtype" id="job-category" class="form-control">
                                <option value="">Select</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Work From Home">Work From Home</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="job-category">Job Category</label>
                            <select name="jobcategory" id="job-category" class="form-control">
                                <option value="">Select..</option>
                                @foreach ($jobCategories as $jobCategory)
                                <option value="{{$jobCategory->id}}">{{$jobCategory->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="experience">Experience</label>
                            <input type="text" class="form-control" id="experience" name="experience">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Address</label>
                            <input type="text" name="address" class="form-control" id="inputAddress" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCity">Number Of Employer</label>
                            <input type="number" name="employernumber" min="1" class="form-control" id="inputCity">
                        </div>
                    </div>

                    <div class="form-group ">
                        <label for="" class="pd-r">Employer Type</label>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="emptype" id="inlineRadio1" value="Male"> Male
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="emptype" id="inlineRadio2" value="Female"> Female
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                        <div class="form-check form-check-radio form-check-inline">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="emptype" id="inlineRadio3" value="Mail / Female"> Both
                                <span class="form-check-sign"></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="min-salary">Minimum Salary</label>
                            <input type="text" name="minsalary" class="form-control" id="min-salary">
                        </div>
                        <div class="form-group col-md-5">
                            <label for="max-salary">Maximum Salary</label>
                            <input type="text" name="maxsalary" class="form-control" id="max-salary">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="unit">Currency</label>
                            <select name="currency" id="unit" class="form-control">
                                <option value="">Choose...</option>
                                <option value="MMK">MMK</option>
                                <option value="USD">USD</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="department">Department</label>
                            <input type="text" name="department" class="form-control" id="department" placeholder="HR Department">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="report-to">Report To</label>
                            <input type="text" name="reportto" class="form-control" id="report-to" placeholder="HR Manager">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="job-description">Job Description</label>
                        <textarea class="form-control" name="jobdescription" id="job-description" placeholder="Job Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="job-requirement">Job Requirement</label>
                        <textarea class="form-control" name="jobrequirement" id="job-requirement" placeholder="Job Requirement"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" name="urgent" type="checkbox" value="1">
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

@push('js')
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js"></script>
<script>
    jQuery.validator.addMethod(
    "regex",
    function(value, element, regexp) {
        if (regexp.constructor != RegExp)
        regexp = new RegExp(regexp);
        else if (regexp.global)
        regexp.lastIndex = 0;
        return this.optional(element) || regexp.test(value);
    },"erreur expression reguliere"
    );

    $("#potCreateForm").validate({
        "errorClass": 'is-invalid',
        "validClass": 'is-valid',
        "errorElement": 'div',

        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            error.appendTo(element.parent());
        },

        rules: {
            "experience": {
                required: true,
                regex: "^[0-9 -]*$"
            },
            "jobposition": {
                required: true
            },
            "jobtype": {
                required: true
            },
            "jobcategory": {
                required: true
            },
            "employernumber": {
                required: true,
                digits: true
            },
            "emptype": {
                required: true
            },
            "address": {
                required: true
            },
            "minsalary": {
                required: true,
                digits: true
            },
            "maxsalary": {
                required: true,
                digits: true
            },
            "currency": {
                required: true
            },
            "department": {
                required: true
            },
            "reportto": {
                required: true
            },
            "jobdescription": {
                required: true,
                minlength: 5,
                maxlength: 30,
                lettersonly: true
            },
            "jobrequirement": {
                required: true
            }
        },

        submitHandler: function(form) {
            form.submit();
        }
    });
</script>
@endpush
