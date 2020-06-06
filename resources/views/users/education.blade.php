<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Educational Details</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="edudetail"><i class="fa fa-plus"></i>{{$user->education->count() == 0 ? 'Add' : 'Add More'}}</a>
    </div>
    @foreach ($user->education as $edu)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$edu->qualification}}</p>
            <a class="blue-color show-modal" id="edudetail" dataid="{{$edu->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">{{$edu->institute}}</p>
            <p class="date">{{$edu->passing_year}} ({{$edu->education_type}})</p>
        </div>
    </div>
    @endforeach
</div>


<!-- For Add Education Detail -->
<div class="cmodal-overly edudetail-overly">
    <div class="global-modal edudetail-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block">
                <h3>Educational Details</h3>
            </div>
            <div class="modal-description mt10">
            <form method="POST" id="eduaction" action="">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb10">
                                    <input type="text" id="qualification" name="qualification" required/>
                                    <label for="qualification" >Highest Qualification</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb10">
                                    <input type="text" id="specilization" name="specilization" required/>
                                    <label for="specilization" >Specilization</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb10">
                                    <input type="text" id="institute" name="institute" required/>
                                    <label for="institute" >Institute</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="passyear" name="passing_year" class="startyear" required/>
                                    <label for="passyear" >Passing Year</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Education Type</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Full time</span>
                                        <input type="radio" name="edutype" value="Full time">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Part time</span>
                                        <input type="radio" name="edutype" value="Part time">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Correspondence</span>
                                        <input type="radio" name="edutype" value="Correspondence">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Save" class="custom-btn" id="edusubmit">
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
                url: '{{URL::to("eduEdit")}}',
                data: {'id':$dataid},
                success:function(data) {
                    if(data) {
                        $("#qualification").val(data.qualification);
                        $("#institute").val(data.institute);
                        $("#specilization").val(data.specilization);
                        $("#specilization").val(data.specilization);
                        $("#passyear").val(data.passing_year);
                        $("input[name='edutype']").each(function() {
                            if($(this).val() == data.education_type) {
                                $(this).attr('checked', "true");
                            }
                        });
                        $("#eduaction").attr('action', '{{url("eduupdate")}}');
                        $("#eduaction").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
                        $("#edusubmit").val("Verify");
                    }else {
                        console.log("hello");
                    }
                }
            });
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        } else {
            $("#qualification").val("");
            $("#institute").val("");
            $("#specilization").val("");
            $("#specilization").val("");
            $("#passyear").val("");
            $("input[name='edutype']").each(function() {
                $(this).removeAttr("checked");
            });
            $("#eduaction").attr('action', "{{url('education')}}");
            $("#edusubmit").val("Save");
        }
    });
</script>
@endpush
