<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Work Experience</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="newworkexp"><i class="fa fa-plus"></i>{{$user->work_experiences->count() == 0 ? 'Add' : 'AddMore'}}</a>
    </div>
    @foreach ($user->work_experiences as $workexp)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$workexp->desigination}}</p>
            <a class="blue-color show-modal" id="newworkexp" dataid="{{$workexp->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">{{$workexp->organisation}}</p>
            <p class="date">{{$workexp->work_from}} to {{$workexp->work_till ? $workexp->work_till : 'Present'}}</p>
        </div>
        <div class="job-description">
        <p>{{$workexp->profile_detail}}</p>
        </div>
    </div>
    @endforeach
    <!-- End Experience Box -->
</div>


<!-- For  New Work Experience -->
<div class="cmodal-overly newworkexp-overly">
    <div class="global-modal newworkexp-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block">
                <h3>Work Experience</h3>
            </div>
            <div class="modal-description mt10">
                <form action="{{url('addworkexp')}}" method="POST" id="expwork">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb10">
                                    <input type="text" id="designation" name="designation"/>
                                    <label for="designation" >Designation</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="organisation" name="organisation"/>
                                    <label for="organisation" >Organisation</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Is this your current company?</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Yes</span>
                                        <input type="radio" name="currcompany" value="yes" class="currcompany" id="ccyes" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">No</span>
                                        <input type="radio" name="currcompany" value="no" class="currcompany" id="ccno">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="custom-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="workfrom">Worked From</label>
                                            <input type="text" name="workfrom" id="workfrom" class="formbb tocurrent" placeholder="dd-MM-yyyy">
                                        </div>
                                        <div class="col-md-6 cpresent">
                                            <label for="worktail">Worked Tail</label>
                                            <input type="text" name="worktill" id="worktill" class="formbb tocurrent" value="Present" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-group">
                                    <label for="desProfile" >Describe Your Job Profile</label>
                                    <textarea name="profiledetail" id="desProfile" rows="6" class="form-control" placeholder="Please Type Here"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Save" class="custom-btn" id="expworksubmit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $("input[name='salarymode']").bind("change", function() {
        if($(this).val() == "Monthly") {
            $(this).attr("checked", "true");
            $("input[value='Annually']").removeAttr("checked");
        } else if($(this).val() == "Annually") {
            $(this).attr("checked", "true");
            $("input[value='Monthly']").removeAttr("checked");
        }
        let $resultf = current_salaryMode($(this).val(), null, $(this));
        $(".calculatedSalary").html($resultf);
    });

    $(".amount").bind('keyup', function() {
        let $finalresult = current_salaryMode(null, $(this).val());
        $(".calculatedSalary").html($finalresult);
    });


    $(".show-modal").on('click', function() {
        $('body').css('overflow-y', 'hidden');
        let $index = $(this).attr('id');
        let $dataid = $(this).attr('dataid');
        let $stst = 'yes';
        if($dataid) {
            $.ajax({
                type: 'get',
                url: '{{URL::to("editworkexp")}}',
                data: {'id': $dataid},
                success: function(data) {
                    $("#designation").val(data.desigination);
                    $("#organisation").val(data.organisation);
                    checkCurrentCompany(data.current_company)
                    $("#workfrom").val(data.work_from);
                    if(data.work_till) {
                        $("#worktill").val(data.work_till);
                    } else {
                        $("#worktill").val('Present');
                    }
                    $("#desProfile").val(data.profile_detail);
                }
            });
            $("#expwork").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
            $("#expwork").attr('action', '{{url("updateworkexp")}}');
            $("#expworksubmit").val("Verify");
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        } else {
            $("#designation").val("");
            $("#organisation").val("");
            checkCurrentCompany($stst)
            $("#desProfile").val();
            $("#worktill").val('Present');
            $("#desProfile").val("");
            $("#workfrom").val("");
            $("#expwork").attr('action', '{{url("addworkexp")}}');
            $("#expworksubmit").val("Save");
        }
    });

    // Check current Salary Mode
    function current_salaryMode($current = null, $amount = null, that)
    {
        var $boole = $(that).hasClass("work");
        let $salary_unit = $("div.select-selected").html();
        var $salary;
        if($boole) {
            $salary = $("#amount1").val()
        } else {
            $salary = $(".amount").val();
        }
        let $salary_mode;
        let $final;
        let $result;
        $("input[name='salarymode']").each(function() {
            if($(this).is(":checked")) {
                $salary_mode = $(this).val();
            }
        });

        if($amount) {
            if($salary_mode == "Monthly") {
                $final = $amount * 12;
                $result = "Calculated Annually Salary is "+ $final;
            } else {
                $final = $amount / 12;
                $result = "Calculated Monthly Salary is "+ Math.round($final);
            }
        }

        if($current) {
            if($salary_mode == "Monthly") {
                $final = $salary * 12;
                $result = "Calculated Annually Salary is "+ $final;
            } else {
                $final = $salary / 12;
                $result = "Calculated Monthly Salary is "+ Math.round($final);
            }
        }
        return $result;
    }

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

        $("#expwork").validate({
            "errorClass": 'is-invalid',
            "validClass": 'is-valid',
            "errorElement": 'div',

            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.appendTo(element.parent());
            },

            rules: {
                "designation": {
                    required: true,
                },
                "organisation": {
                    required: true
                },
                "workfrom": {
                    required: true
                },
                "worktill": {
                    required: true
                },
                "profiledetail": {
                    required: true
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endpush
