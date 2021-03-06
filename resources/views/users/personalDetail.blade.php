<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Personal Detail</h4>
    </div>
    <div class="col-md-3">
        @if(isset($user->profile_details))
        <a class="fr blue-color show-modal" id="job-person" dataid="{{$user->profile_details->id}}"> <i class="fa fa-pencil"></i></a>
        @else
        <a class="fr blue-color show-modal" id="job-person"><i class="fa fa-plus"></i>Add</a>
        @endif
    </div>
    @if(isset($user->profile_details))
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Home Town:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->home_town}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Permanent Address:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->permanent_address}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Gender:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->gender}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Date of Birth:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->date_of_birth}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Marital Status:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->marital_status}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Nationality:</div>
                    <div class="col-md-7 column-color text-capitalize fw400">{{$user->profile_details->nationality}}</div>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
<div class="cmodal-overly job-person-overly">
    <div class="global-modal job-person-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block mb10">
                <h3>Personal Detail</h3>
            </div>
            <div class="modal-description mt15">
                <form action="{{url('profile_detail/create')}}" method="POST" id="personaldetail">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb30">
                                    <input type="text" id="hometown" name="home_town" value="{{$user->profile_details ? $user->profile_details->home_town : ''}}"/>
                                    <label for="hometown">Home Town</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Gender</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Male</span>
                                        <input type="radio" name="gender" value="male" @if($user->profile_details && $user->profile_details->gender == "male") checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Female</span>
                                        <input type="radio" name="gender" value="female" @if($user->profile_details && $user->profile_details->gender == "female") checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Marital Status</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Single</span>
                                        <input type="radio" name="marital_status" value="single" @if($user->profile_details && $user->profile_details->marital_status == "single") checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Married</span>
                                        <input type="radio" name="marital_status" value="married" @if($user->profile_details && $user->profile_details->marital_status == "married") checked @endif>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="permanent_address" name="permanent_address" value="{{$user->profile_details ? $user->profile_details->permanent_address : ''}}"/>
                                    <label for="permanent_address">Permanent Address</label>
                                    <span class="line"></span>
                                </div>
                                <div class="custom-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth" class="formbb tocurrent" placeholder="dd-MM-yyyy" value="{{$user->profile_details ? $user->profile_details->date_of_birth : ''}}">
                                </div>
                                <div class="floating-label-input mb30">
                                    <input type="text" id="nationality" name="nationality" value="{{$user->profile_details ? $user->profile_details->nationality : ''}}" required/>
                                    <label for="nationality">Nationality</label>
                                    <span class="line"></span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Save" class="custom-btn" id="perosnal_submit">
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
            $("#personaldetail").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
            $("#personaldetail").attr('action', '{{url("updatepersonaldetail")}}');
            $("#perosnal_submit").val("Verify");
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
        } else {
            $("#personaldetail").attr('action', '{{url("profile_detail/create")}}');
            $("#perosnal_submit").val("Save");
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

        $("#personaldetail").validate({
            "errorClass": 'is-invalid',
            "validClass": 'is-valid',
            "errorElement": 'div',

            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                error.appendTo(element.parent());
            },

            rules: {
                "home_town": {
                    required: true,
                },
                "gender": {
                    required: true
                },
                "marital_status": {
                    required: true
                },
                "permanent_address": {
                    required: true
                },
                "date_of_birth": {
                    required: true
                },
                "nationality": {
                    required: true
                }
            },

            submitHandler: function(form) {
                form.submit();
            }
        });
    </script>
@endpush
