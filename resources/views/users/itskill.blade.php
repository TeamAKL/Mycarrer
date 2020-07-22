<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Skills</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="skill"><i class="fa fa-plus"></i>{{$user->skills->count() == 0 ? 'Add' : 'Add More'}}</a>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-12">
                <div class="jd-c">
                    @foreach($user->skills as $skill)
                    <a class="oval-shape oval-hover skilldel" data-toggle="tooltip" title="Press to Delte" id="{{$skill->id}}">{{$skill->skill}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<div class="cmodal-overly skill-overly">
    <div class="global-modal skill-modal">
        <span class="close-modal"><i class="fa fa-close"></i></span>
        <div class="modal-body">
            <div class="cmodal-header d-block">
                <h3>Add Skills</h3>
            </div>
            <div class="modal-description mt10">
                <form action="{{url('skills')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb30">
                                    <input type="text" id="itskill" name="skill" required/>
                                    <label for="itskill">Skill</label>
                                    <span class="line"></span>
                                </div>
                            </div>
                            {{-- <div class="col-md-6">
                                <div class="custom-select" style="margin-top: 24px;">
                                    <select name="skill_level" id="skill-level">
                                        <option value="">Select Skill Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Professional">Professional</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <input type="submit" value="Add" class="custom-btn">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@push("css")
<style>
    .jd-c {
        display: inline-block;
    }
    
    .jd-c .hover-custom-blue a{
        color: #969696;
    }
    
    .jd-c .hover-custom-blue a:hover {
        color: #3490dc;
        text-decoration: none;
    }
    
    .jd-c .oval-shape {
        background-color: #eaeaea;
        border-radius: 50px;
        display: inline-block;
        padding: 6px 20px;
        margin-right: 10px;
        margin-bottom: 5px;
    }
    
    .jd-c .oval-hover {
        color: #787878;
    }
    
    .jd-c .oval-hover:hover {
        cursor: pointer;
        -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
        box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
    }
    
    .jd-c .oval-hover a {
        color: inherit;
        text-decoration: none;
    }
    
    .jd-c .oval-hover a:hover {
        color: #3490dc;
    }
</style>
@endpush

@push("script")
<script>
    $("a.skilldel").on('click', function() {
        var id = $(this).attr('id');
       $.ajax({
            type: "post",
            url: "{{URL::to('deleteskill')}}",
            data: {"id": id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(response) {
                if(response.data) {
                    window.location.href = "/seeker/profile";
                }
            }
       });
    });
</script>
@endpush