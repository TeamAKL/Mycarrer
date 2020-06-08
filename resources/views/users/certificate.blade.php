<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Courses & Certification</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="certification"><i class="fa fa-plus"></i>{{$user->education->count() == 0 ? 'Add' : 'Add More'}}</a>
    </div>
    @foreach ($user->education as $edu)
    <div class="col-md-12 mt15 experience-box">
        <div class="work-title">
            <p>{{$edu->qualification}}</p>
            <a class="blue-color show-modal" id="certification" dataid="{{$edu->id}}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
        </div>
        <div class="work-company">
            <p class="company">{{$edu->institute}}</p>
            <p class="date">{{$edu->passing_year}} ({{$edu->education_type}})</p>
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
                <form method="POST" id="eduaction" action="">
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
                                        <input type="checkbox" class="custom-control-input" id="lifetime">
                                        <label class="custom-control-label" for="lifetime">Lifetime</label>
                                    </div>
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
