<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Job Preference</h4>
    </div>
    <div class="col-md-3">
        @if(isset($user->job_preferences))
        <a class="fr blue-color show-modal" id="job-preference" dataid="{{$user->job_preferences->id}}"><i class="fa fa-pencil"></i></a>
        @else
        <a class="fr blue-color show-modal" id="job-preference"><i class="fa fa-plus"></i>Add</a>
        @endif
    </div>
    @if(isset($user->job_preferences))
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Role:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->job_preferences->role}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Preferred Location:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->job_preferences->preferred_location}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Expected Salary:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->job_preferences->salary_mode}} {{number_format($user->job_preferences->expected_salary)}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Notice Period:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->job_preferences->notice_period}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Employer Type:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->job_preferences->employer_type}}</div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<div class="cmodal-overly job-preference-overly">
    <div class="global-modal job-preference-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block mb10">
                <h3>Job Preference</h3>
            </div>
            <div class="modal-description mt15">
                <form action="{{url('job_perefernce/create')}}" method="POST" id="preference_form">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb30">
                                    <input type="text" id="prole" name="role" value="{{$user->job_preferences ? $user->job_preferences->role : ''}}"/>
                                    <label for="prole">Preferred Role</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Employment Type</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Full time</span>
                                        <input type="radio" name="emp_type" value="Full Time" @if($user->job_preferences && $user->job_preferences->employer_type == 'Full Time') checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Part time</span>
                                        <input type="radio" name="emp_type" value="Part Time" @if($user->job_preferences && $user->job_preferences->employer_type == 'Part Time') checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container" style="width: 100%;">
                                        <span class="clabel">Work From Home</span>
                                        <input type="radio" name="emp_type" value="Work From Home" @if($user->job_preferences && $user->job_preferences->employer_type == 'Work From Home') checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="pshift" name="location" value="{{$user->job_preferences ? $user->job_preferences->preferred_location : ''}}" />
                                    <label for="pshift">Preferred Location</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="noticeperiod" name="notice" value="{{$user->job_preferences ? $user->job_preferences->notice_period : ''}}" />
                                    <label for="noticeperiod">Notice Period</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Expected Salary</span>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="custom-select">
                                                <select name="salary_unit" id="unit">
                                                    <option value="">Select</option>
                                                    <option value="USD" class="salary_unit" @if($user->job_preferences && $user->job_preferences->salary_mode == 'USD') selected @endif>USD</option>
                                                    <option value="MMK" class="salary_unit" @if($user->job_preferences && $user->job_preferences->salary_mode == 'MMK') selected @endif>MMK</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="text" name="salary_amount" class="formbb amount" value="{{$user->job_preferences ? $user->job_preferences->expected_salary : ''}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Salary Mode</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Monthly</span>
                                        <input type="radio" name="salarymode" value="Monthly">
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
                        <input type="submit" value="Save" class="custom-btn" id="preference_form_submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>

    $(".show-modal").on('click', function() {
        $('body').css('overflow-y', 'hidden');
        let $index = $(this).attr('id');
        let $dataid = $(this).attr('dataid');
        if($dataid) {
            current_salaryMode($("input[name='salarymode']").val(), $(".amount").val());
            $("#preference_form").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
            $("#preference_form").attr('action', '{{url("updatepreference")}}');
            $("#preference_form_submit").val("Verify");
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
        } else {
            $("#preference_form").attr('action', '{{url("job_perefernce/create")}}');
            $("#preference_form_submit").val("Save");
        }
    });

</script>
@endpush
@push('script')
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

        $("#preference_form").validate({
            "errorClass": 'is-invalid',
            "validClass": 'is-valid',
            "errorElement": 'div',

            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.appendTo(element.parent());
            },

            rules: {
                "role": {
                    required: true,
                },
                "emp_type": {
                    required: true
                },
                "location": {
                    required: true
                },
                "notice": {
                    required: true
                },
                "salary_amount": {
                    required: true,
                    digits: true
                },
                "salary_unit": {
                    required: true,
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endpush

