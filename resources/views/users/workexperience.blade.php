<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Work Experience</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="newworkexp"><i class="fa fa-plus"></i>{{$user->work_experiences->count() == 0 ? 'Add' : 'AddMore'}}</a>
    </div>
    <!-- Experience Box -->
    {{-- <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>Full Stack Developer</p>
            <a class="blue-color show-modal" id="newworkexp" dataid="1"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">ITVISIONHUB</p>
            <p class="date">1 April 2018 to 30 November 2019</p>
            <p class="salary">Monthly Salary: SGD 1000</p>
        </div>
        <div class="job-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dicta cum laboriosam consequatur, nemo tempore, doloremque minus quae architecto, illo possimus dignissimos. Corrupti amet reiciendis deleniti facere facilis cupiditate atque.</p>
        </div>
    </div> --}}
    @foreach ($user->work_experiences as $workexp)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$workexp->desigination}}</p>
            <a class="blue-color show-modal" id="newworkexp" dataid="{{$workexp->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">{{$workexp->organisation}}</p>
            <p class="date">{{$workexp->work_from}} to {{$workexp->work_till ? $workexp->work_till : 'Present'}}</p>
            <p class="salary">Monthly Salary: SGD 1000</p>
        </div>
        <div class="job-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dicta cum laboriosam consequatur, nemo tempore, doloremque minus quae architecto, illo possimus dignissimos. Corrupti amet reiciendis deleniti facere facilis cupiditate atque.</p>
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
                <form action="" method="POST" id="expwork">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb10">
                                    <input type="text" id="designation" name="designation" required/>
                                    <label for="designation" >Designation</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="organisation" name="organisation" required/>
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

                                <div class="floating-label-input mb30">
                                    <input type="text" id="noticPeriod" name="noticePeriod" required/>
                                    <label for="noticPeriod" >Notice Period</label>
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
                                            <input type="text" name="salary_amount" id="amount" class="formbb">
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
                                    <span id="calculatedSalary"></span>
                                </div>

                                <div class="custom-group">
                                    <label for="desProfile" >Describe Your Job Profile</label>
                                    <textarea name="profiledetail" id="desProfile" rows="6" class="form-control" placeholder="Please Type Here"></textarea>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="" class="custom-btn" id="expworksubmit">
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
            $.ajax({
                type: 'get',
                url: '{{URL::to("editworkexp")}}',
                data: {'id': $dataid},
                success: function(data) {
                    $("#designation").val(data.desigination);
                    $("#organisation").val(data.organisation);
                    checkCurrentCompany(data.current_company)
                    $("#workfrom").val(data.work_from);
                    $("#noticPeriod").val(data.notc_period);
                    if(data.work_till) {
                        $("#worktill").val(data.work_till);
                    } else {
                        $("#worktill").val('Present');
                    }

                    $(".select-items.select-hide div").each(function() {
                        if($(this).html() == data.salary_unit) {
                            $(this).addClass("same-as-selected");
                            $(".select-selected").html(data.salary_unit);
                        }
                    });

                    $("#amount").val(data.salary_amount);
                    $("input[name='salarymode']").each(function() {
                        if($(this).val() == data.salary_mode) {
                            $(this).attr("checked", "true");
                        } else {
                            $(this).removeAttr("checked");
                        }
                    });
                    $("#desProfile").val(data.profile_detail);
                    // For Test in edit
                    $("#calculatedSalary").html(current_salaryMode(data.salary_mode, null));
                    $("#amount").bind('keyup', function() {
                        let $finalresult = current_salaryMode(null, $(this).val());
                        $("#calculatedSalary").html($finalresult);
                    });
                    $("input[name='salarymode']").bind('click', function() {
                        let $resultf = current_salaryMode($(this).val(), null);
                        $("#calculatedSalary").html($resultf);
                    });
                }
            });
            $("#expwork").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
            $("#expwork").attr('action', '{{url("updateworkexp")}}');
            $("#expworksubmit").val("Verify");
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        } else {

            $("input[name='salarymode']").bind("change", function() {
                if($(this).val() == "Monthly") {
                    $(this).attr("checked", "true");
                    $("input[value='Annually']").removeAttr("checked");
                } else if($(this).val() == "Annually") {
                    $(this).attr("checked", "true");
                    $("input[value='Monthly']").removeAttr("checked");
                }
            });

            $("#amount").bind('keyup', function() {
                let $finalresult = current_salaryMode(null, $(this).val());
                $("#calculatedSalary").html($finalresult);
            });
            $("input[name='salarymode']").bind('click', function() {
                let $resultf = current_salaryMode($(this).val(), null);
                $("#calculatedSalary").html($resultf);
            });

            $("#expwork").attr('action', '{{url("addworkexp")}}');
            $("#expworksubmit").val("Save");
        }
    });

    // Check current Salary Mode
    function current_salaryMode($current = null, $amount = null)
    {
        let $salary_unit = $("div.select-selected").html();
        let $salary = $("#amount").val();
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
                $result = "Calculated Annually Salary is "+$salary_unit +" "+ $final;
            } else {
                $final = $amount / 12;
                $result = "Calculated Monthly Salary is "+$salary_unit+" "+ Math.round($final);
            }
        }

        if($current) {
            if($salary_mode == "Monthly") {
                $final = $salary * 12;
                $result = "Calculated Annually Salary is "+$salary_unit +" "+ $final;
            } else {
                $final = $salary / 12;
                $result = "Calculated Monthly Salary is "+$salary_unit+" "+ Math.round($final);
            }
        }
        return $result;
    }

    // console.log(totalSalary());
</script>
@endpush
