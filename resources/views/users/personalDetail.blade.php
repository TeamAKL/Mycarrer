<div class="bg-white row">
    <div class="col-md-9">
        <h4 class="medium">Personal Detail</h4>
    </div>
    <div class="col-md-3">
        <a class="fr blue-color show-modal" id="job-person">@if(isset($user->profile_details)) <i class="fa fa-pencil"></i> @else <i class="fa fa-plus"></i> @endif</a>
    </div>
    @if(isset($user->profile_details))
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Home Town:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->home_town}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Permanent Address:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->permanent_address}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Gender:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->gender}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Date of Birth:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->date_of_birth}}</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-xs-12 mt15">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Marital Status:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->marital_status}}</div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-5 fw700">Nationality:</div>
                    <div class="col-md-7 column-color fw400">{{$user->profile_details->nationality}}</div>
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
                <form action="{{url('profile_detail/create')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="floating-label-input mb30">
                                    <input type="text" id="hometown" name="home_town" required/>
                                    <label for="hometown">Home Town</label>
                                    <span class="line"></span>
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Gender</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Male</span>
                                        <input type="radio" name="gender" value="male">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Female</span>
                                        <input type="radio" name="gender" value="female">
                                        <span class="checkmark"></span>
                                    </label>    
                                </div>

                                <div class="custom-group">
                                    <span class="group-lable">Marital Status</span>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Single</span>
                                        <input type="radio" name="marital_status" value="single">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="radio-lable-container pr100">
                                        <span class="clabel">Married</span>
                                        <input type="radio" name="marital_status" value="married">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                                <div class="floating-label-input mb30">
                                    <input type="text" id="permanent_address" name="permanent_address" required/>
                                    <label for="permanent_address">Permanent Address</label>
                                    <span class="line"></span>
                                </div>
                                <div class="custom-group">
                                    <label for="date_of_birth">Date of Birth</label>
                                    <input type="text" name="date_of_birth" id="date_of_birth" class="formbb tocurrent" placeholder="dd-MM-yyyy">
                                </div>
                                <div class="floating-label-input mb30">
                                    <input type="text" id="nationality" name="nationality" required/>
                                    <label for="nationality">Nationality</label>
                                    <span class="line"></span>
                                </div>


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
@push('script')
<script>
   
</script>
@endpush