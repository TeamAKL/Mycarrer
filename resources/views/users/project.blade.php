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
            <p class="date">{{$project->start_year}} to Present</p>
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
                <form action="{{url('job-proj')}}" method="POST">
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
                                        <input type="radio" name="pjstatus" value="Inprogress" class="pjstatus" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Finished</span>
                                        <input type="radio" name="pjstatus" value="finished" class="pj-status">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="floating-label-input mb30 prl-20 start">
                                    <div class="row ">
                                        <div class="col-md-6">
                                            <input type="text" id="job-startyear" class="tocurrent" name="start_year"/>
                                            <label for="job-startyear" >Start Year</label>
                                            <span class="line wd-90"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="job-startmonth" class="tocurrent" name="start_month">
                                            <label for="job-startmonth" >Start Month</label>
                                            <span class="line wd-90"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="floating-label-input mb30 prl-20 end">
                                    <div class="row mt15">
                                        <div class="col-md-6">
                                            <input type="text" id="job-endyear"  class="date-picker" name="endyear"/>
                                            <label for="job-endtyear" >End Year</label>
                                            <span class="line wd-90"></span>
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" id="job-endmonth" class="date-picker" name="endmonth"/>
                                            <label for="job-endmonth" >End Month</label>
                                            <span class="line wd-90"></span>
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
                            <input type="submit" value="Save" class="custom-btn">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
