{{--<div class="jumbotron company-banner" style="--image:url('../../images/hero-img.jpg')">--}}
    <div class="jumbotron company-banner" @if($company->banner_image)style="--image:url('../../images/company/{{$company->banner_image}}')" @else style="--image:url('../../images/hero-img.jpg')" @endif>
        <div class="center">
            <p class="company-name">{{$company->company_name}}</p>
            <div class="jobs">
                <div class="job-ch"><a href="{{url('company/detail/'.$company->id)}}" class="@if(Route::currentRouteName() == 'about') active @endif">About</a></div>
                <div class="job-ch"><a href="{{url('company/hotjobs/'.$company->id)}}" class="@if(Route::currentRouteName() == 'hotjobs') active @endif">Hot Jobs</a></div>
                <div class="job-ch"><a href="{{url('company/detail/alljobs/'.$company->id)}}" class="@if(Route::currentRouteName() == 'alljobs') active @endif">All Jobs</a></div>
            </div>
        </div>
    </div>


