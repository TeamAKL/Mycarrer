<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Job Preference</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="job-preference">@if($user->job_preferences->count() == 0) <i class="fa fa-plus"></i> @else <i class="fa fa-pencil"></i> @endif</a>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Role:</div>
                    <div class="col-md-7 column-color fw400">Software Engineer/Programmer</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Preferred Location:</div>
                    <div class="col-md-7 column-color fw400">Myanmar</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Job Type:</div>
                    <div class="col-md-7 column-color fw400">Permanent</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Expected Salary:</div>
                    <div class="col-md-7 column-color fw400">SGD-3000</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Notice Period:</div>
                    <div class="col-md-7 column-color fw400">Immediate</div>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="cmodal-overly job-preference-overly">
    <div class="global-modal job-preference-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block mb10">
                <h3>Job Preference</h3>
            </div>
            <div class="modal-description mt15">
                <form action="{{url('job_perefernce/create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb30">
                                    <input type="text" id="prole" name="role" required/>
                                    <label for="prole">Preferred Role</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Employment Type</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Full time</span>
                                        <input type="radio" name="emp_type" value="permanent">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Part time</span>
                                        <input type="radio" name="emp_type" value="permanent">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container" style="width: 100%;">
                                        <span class="clabel">Work From Home</span>
                                        <input type="radio" name="emp_type" value="permanent">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="pshift" name="location" required/>
                                    <label for="pshift">Preferred Location</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="noticeperiod" name="notice" required/>
                                    <label for="noticeperiod">Notice Period</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Current Salary</span>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-select">
                                                <select name="salary_unit" id="unit">
                                                    <option value="">Select</option>
                                                    <option value="USD" class="salary_unit">USD</option>
                                                    <option value="MMK" class="salary_unit">MMK</option>
                                                    <option value="SGD" class="salary_unit">SGD</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="salary_amount" class="formbb amount">
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Salary Mode</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Monthly</span>
                                        <input type="radio" name="salarymode" value="Monthly" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Annually</span>
                                        <input type="radio" name="salarymode" value="Annually">
                                        <span class="checkmark"></span>
                                    </label>
                                    <span class="calculatedSalary"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Save" class="custom-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('css')
<style>
</style>
@endpush

@push('script')
<script>

</script>
@endpush
