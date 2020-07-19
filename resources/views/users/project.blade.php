<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Projects</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="project"><i class="fa fa-plus"></i>{{$user->projects->count() == 0 ? 'Add' : 'Add More'}}</a>
    </div>
    @foreach ($user->projects as $project)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$project->title}}</p>
            <a class="blue-color show-modal" id="project" dataid="{{$project->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">{{$project->client}}</p>
            <p class="date">{{$project->start_month}}, {{$project->start_year}} to {{$project->end_year ? $project->end_month : 'Present'}}, {{$project->end_year ? $project->end_year : ''}}</p>
        </div>
        <div class="job-description">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat dicta cum laboriosam consequatur, nemo tempore, doloremque minus quae architecto, illo possimus dignissimos. Corrupti amet reiciendis deleniti facere facilis cupiditate atque.</p>
            <p class="pjurl">URL: <a href="" class="custom-blue"> http://thettun.com</a></p>
        </div>
    </div>
    @endforeach
</div>


<!-- For Add new Project -->
<div class="cmodal-overly project-overly">
    <div class="global-modal project-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block">
                <h3>Projects</h3>
            </div>
            <div class="modal-description mt10">
                <form action="" method="POST" id="pjaction">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb10">
                                    <input type="text" id="job-title" name="title" required/>
                                    <label for="job-title" >Title</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="job-client" name="client" required/>
                                    <label for="job-client" >Client</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Project Status</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">In Progress</span>
                                        <input type="radio" name="pjstatus" value="inprogress" class="pj-status" checked id='inpro'>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Finished</span>
                                        <input type="radio" name="pjstatus" value="finished" class="pj-status" id='f'>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="year_mont">
                                    <div class="row mb30">
                                        <div class="col-md-6">
                                            <div class="floating-label-input">
                                                <input type="text" id="job-startyear" name="start_year" class="startyear" />
                                                <label for="job-startyear" >Start Year</label>
                                                <span class="line"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="floating-label-input">
                                                <input type="text" id="job-startmonth" name="start_month" class="month" />
                                                <label for="job-startmonth" >Start Month</label>
                                                <span class="line"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="end">
                                        <div class="row mb30">
                                            <div class="col-md-6">
                                                <div class="floating-label-input">
                                                    <input type="text" id="job-endyear" name="end_year" class="startyear" />
                                                    <label for="job-endyear" >End Year</label>
                                                    <span class="line"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="floating-label-input">
                                                    <input type="text" id="job-endmonth" name="end_month" class="month" />
                                                    <label for="job-endmonth" >End Month</label>
                                                    <span class="line"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="custom-group">
                                    <label for="detailpj" >Detail of project</label>
                                    <textarea name="detailpj" id="detailpj" rows="6" class="form-control" placeholder="Please Type Here"></textarea>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="job-location" required name="location"/>
                                    <label for="job-location" >Location</label>
                                    <span class="line"></span>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="job-link" required name="link"/>
                                    <label for="job-link" >Link</label>
                                    <span class="line"></span>
                                </div>

                            </div>
                        </div>
                        <div class="form-group d-flex justify-content-end">
                            <input type="submit" value="Save" class="custom-btn" id="pjStatus">
                        </div>
                    </form>
                </div>
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
        let $status = "inprogress";
        if($dataid) {
            $.ajax({
                type: 'get',
                url: '{{URL::to("projectedit")}}',
                data: {'id':$dataid},
                success: function(data) {
                    $("#job-title").val(data.title);
                    $("#job-client").val(data.client);
                    $("#job-location").val(data.location);
                    $("#job-link").val(data.link);
                    $("#detailpj").val(data.detail);
                    if(data.end_year) {
                        $status = "finished";
                    } else {
                        $status = "inprogress";
                    }
                    checkPjStatus($status);
                    $("input[name='start_year']").val(data.start_year);
                    $("input[name='start_month']").val(data.start_month);
                    $("input[name='end_month']").val(data.end_month);
                    $("input[name='end_year']").val(data.end_year);
                }
            });
            $("#pjaction").append("<input type='hidden' value='"+ $dataid +"' name='id'/>");
            $("#pjaction").attr('action', "{{url('job-updateproj')}}");
            $("#pjStatus").val("Verify");

            $("."+$index+"-overly").addClass('show-modal');
            $("."+$index+"-modal").addClass("slide-modal");
        } else {
            $("#job-title").val('');
            $("#job-client").val('');
            $("#job-location").val('');
            $("#job-link").val('');
            $("#detailpj").val('');
            checkPjStatus($status);
            $("input[name='start_year']").val('');
            $("input[name='start_month']").val('');
            $("input[name='end_month']").val('');
            $("input[name='end_year']").val('');
            $("#pjaction").attr('action', "{{url('job-proj')}}");
            $("#pjStatus").val("Save");
        }
    });
</script>
@endpush
