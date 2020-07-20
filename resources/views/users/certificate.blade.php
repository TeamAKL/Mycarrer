<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Courses & Certification</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="certification"><i class="fa fa-plus"></i>{{$user->certificates->count() == 0 ? 'Add' : 'Add More'}}</a>
    </div>
    @foreach ($user->certificates as $cert)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$cert->certificate}}</p>
            <a class="blue-color show-modal" id="certification" dataid="{{$cert->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">Issued By: {{$cert->issue_by}}</p>
            <p class="date">{{$cert->year}} ({{$cert->month}})</p>
            @if($cert->lifetime == 1)
            <p class="date">Validity: Lifetime</p>
            @endif
        </div>
    </div>
    @endforeach
</div>

<!-- For Add Courses & Certification -->
<div class="cmodal-overly certification-overly">
    <div class="global-modal certification-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block">
                <h3>Courses & Certification</h3>
            </div>
            <div class="modal-description mt10">
                <form method="POST" id="certificateform" action="{{url('certificate')}}">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb10">
                                    <input type="text" id="certificate" name="certificate" required/>
                                    <label for="certificate" >Certificate</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb10">
                                    <input type="text" id="issueby" name="issueby" required/>
                                    <label for="issueby" >Issued By</label>
                                    <span class="line"></span>
                                </div>

                                <div class="row mb30">
                                    <div class="col-md-6">
                                        <p class="validity">Validity</p>
                                        <div class="floating-label-input mb10">
                                            <input type="text" id="year" name="certificate_year" required class="startyear"/>
                                            <label for="year" >Year</label>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt23">
                                        <div class="floating-label-input mb10">
                                            <input type="text" id="month" name="cerfificate_month" required class="month"/>
                                            <label for="month" >Month</label>
                                            <span class="line"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-group">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="lifetime" class="custom-control-input" id="lifetime" value="1">
                                        <label class="custom-control-label" for="lifetime">Lifetime</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Save" class="custom-btn" id="certsubmit">
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
                url: '{{URL::to("certEdit")}}',
                data: {'id':$dataid},
                success:function(response) {
                    console.log(response.data.certificate);
                    if(response.data) {
                        $("#certificate").val(response.data.certificate);
                        $("#issueby").val(response.data.issue_by);
                        $("#year").val(response.data.year);
                        $("#month").val(response.data.month);
                        if(response.data.lifetime == 1) {
                            $("#lifetime").attr("checked", true);
                        } else {
                            $("#lifetime").attr("checked", false);
                        }
                        $("#certificateform").attr('action', '{{url("certupdate")}}');
                        $("#certificateform").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
                        $("#certsubmit").val("Verify");
                    }else {
                        console.log("hello");
                    }
                }
            });
            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
            $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
        } else {
            $("#certificate").val("");
            $("#issueby").val("");
            $("#year").val("");
            $("#month").val("");
            $("#lifetime").attr("checked", false);
            $("#certificateform").attr('action', "{{url('certificate')}}");
            $("#certsubmit").val("Save");
        }
    });
</script>
@endpush
