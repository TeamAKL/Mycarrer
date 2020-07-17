<div class="container">
    <button class="custom-btn wd-100" >Modify Search</button>
    <div class="search-container">
        <div>
            <span class="close-modal"><i class="fa fa-close"></i></span>
            <form class="pd-13 mb-search" action="{{url('result')}}" method="GET">
                @csrf
                <div class="modif-search-title">
                    <h2 class="text-center">Modify Search</h2>
                </div>
                <div class="form-row">
                    <div class=" input-group mb-2 col-md-4 pl-pr-0">
                        <div class="input-group-prepend ">
                            <div class="input-group-text custom-input"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" name="skill" id="search" class="form-control custom-input" placeholder="Search by Skills, Company & Job Title">
                    </div>
                    <div class="input-group mb-2 col-md-3 expend-search-form pl-pr-0 d-flex">
                        <div class="input-group-prepend ">
                            <div class="input-group-text custom-input"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        </div>
                        <input type="text" name="location" class="form-control custom-input" id="location" placeholder="Location">
                    </div>
                    <div class="col-md-3 expend-search-form pl-pr-0 d-flex">
                        <select class="form-control custom-input" id="selectoption" name="experience">
                            <option>Experience</option>
                            <option value="0">0 Year</option>
                            <option value="1">1 Year</option>
                            <option value="2">2 Year</option>
                            <option value="3">3 Year</option>
                            <option value="4">4 Year</option>
                            <option value="5">5 Year</option>
                            <option value="6">6 Year</option>
                            <option value="7">7 Year</option>
                            <option value="8">8 Year</option>
                            <option value="9">9 Year</option>
                            <option value="10">10 Year</option>
                            <option value="11">More than 10 Year</option>
                        </select>
                    </div>
                    <div class="col-md-2 col-sm-12 pl-pr-0">
                        <input type="submit" value="Search" class="custom-btn">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
