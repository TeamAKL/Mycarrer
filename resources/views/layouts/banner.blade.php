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
                <a href="http://" class="search-model">Advanced Search</a>
            </div>

            <div class="right-side">
                <div class="upload-cv">
                    upload now
                </div>
            </div>
        </div>
    </div>
</div>



@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
@endpush
