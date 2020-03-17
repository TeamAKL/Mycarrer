<div class="jumbotron jumbotron-fluid bg-jumbotron">
    <div class="container">
        <div class="banner-header">
            <h2>Find Better. Faster with Mycareer</h2>
            <div class="search-close">
                <i class="fa fa-times" aria-hidden="true" id="close-icon"></i>
            </div>
        </div>
        <div class="custom-row">
            <div class="search-engin">
                <div class="unexpend-nav-bar">
                    <ul class="search-nav">
                        <li class="search-nav-itme"><a href="http://" class="search-nav-link-name">All Jobs</a></li>
                        <li class="search-nav-itme"><a href="http://" class="search-nav-link-name">Contract Jobs</a></li>
                        <li class="search-nav-itme"><a href="http://" class="search-nav-link-name">Fresher Jobs</a></li>
                        <li class="search-nav-itme"><a href="http://" class="search-nav-link-name">Part Time</a></li>
                    </ul>
                </div>
                <form class="user-search-form">
                    <div class="form-row">
                        <div class=" input-group mb-2 mr-sm-2 col-md-10" id="change-md">
                            <div class="input-group-prepend ">
                                <div class="input-group-text custom-input"><i class="fa fa-search" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" id="search" class="form-control custom-input" placeholder="Search by Skills, Company & Job Title">
                        </div>
                        <div class="input-group mb-2 mr-sm-2 col-md-3 expend-search-form">
                            <div class="input-group-prepend ">
                                <div class="input-group-text custom-input"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            </div>
                            <input type="text" class="form-control custom-input" id="location" placeholder="Location">
                        </div>
                        <div class="col-md-3 expend-search-form">
                            <select class="form-control custom-input" id="selectoption">
                                <option>Default select</option>
                                <option>Default select</option>
                                <option>Default select</option>
                            </select>
                        </div>
                        {{-- Custom Select --}}
                        {{-- <div class="custom-select col-md-3">
                            <select class="custom-input" style="display:none;">
                                <option value="0">Select car:</option>
                                <option value="1">Audi</option>
                                <option value="2">BMW</option>
                                <option value="3">Citroen</option>
                                <option value="4">Ford</option>
                                <option value="5">Honda</option>
                                <option value="6">Jaguar</option>
                                <option value="7">Land Rover</option>
                                <option value="8">Mercedes</option>
                                <option value="9">Mini</option>
                                <option value="10">Nissan</option>
                                <option value="11">Toyota</option>
                                <option value="12">Volvo</option>
                            </select>
                        </div> --}}
                        {{-- Custom Select --}}
                        <div class="col-md-2">
                            <input type="submit" value="Search" class="custom-btn" disabled>
                        </div>
                    </div>
                </form>
                <a href="http://" class="search-model" data-toggle="modal" data-target=".bd-example-modal-lg">Advanced Search</a>
            </div>

            <div class="right-side">
                <div class="upload-cv">
                    upload now
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Search Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title">ADVANCED SEARCH</h5>
                    <button type="button" class="close modal-close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="skill" class="label-color">Key Skill</label>
                            <input type="text" class="form-control" id="skill" placeholder="Enter Job Key">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="loaction" class="label-color">Locations</label>
                            <input type="text" class="form-control" id="loaction" placeholder="Location">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="experience" class="label-color">Experience</label>
                            <select id="experience" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="month-search">  </label>
                            <select class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="industry" class="label-color">Industry</label>
                            <select id="industry" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="function" class="label-color">Function</label>
                            <select id="function" class="form-control">
                                <option selected>Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-4">
                        <input type="submit" value="Show Jobs" class="shearch-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- <div class="modal fade bd-example-modal-lg" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">ADVANCED SEARCH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
            </div>
        </div>
    </div>
</div> --}}

@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
@endpush
