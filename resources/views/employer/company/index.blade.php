@extends('layouts.app', ['page' => __('Company information'), 'pageSlug' => 'company_info'])
@section('content')
<h3>Company Information</h3>
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-body ">
                {{-- <form action="{{url('company-info')}}" method="post"> --}}
                <form method="post" action="{{url('company/company-info')}}" enctype="multipart/form-data">
                     @csrf
                    <div class="form-row">
                        <input type="hidden" name="company_id" value="{{ isset($user->companies) ? $user->companies->id : ''}}"/>
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Company Name') }}</label>
                                <input type="text" name="company_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Name') }}" value="{{ isset($user->companies) ? $user->companies->company_name : ''}}" >
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="country">{{ __('Country') }}</label>
                                        <input type="text" name="country_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 border-unset" placeholder="{{ __('Country Name') }}" id="country" value="{{isset($user->companies) ? $user->companies->country : ''}}">
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="select-area" >

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="city">{{ __('City Name') }}</label>
                                        <input type="text" name="city_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 state" placeholder="{{ __('City Name') }}" id="city" value="{{isset($user->companies) ? $user->companies->city : ''}}">
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="state-area">

                                        </div>
                                        <div class="search-city">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                        @dd($user->companies);--}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="company_email" placeholder="Company Email" value="{{ isset($user->companies) ? $user->companies->company_email : ''}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Company Address" name="address" value="{{ isset($user->companies) ? $user->companies->address : ''}}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="industry">Company Industry</label>
                                <select name="industry" id="industry" class="form-control">
                                    <option >Please Choose</option>
                                    @if(isset($jobCategories))
                                        @foreach($jobCategories as $jobCategory)
                                            @isset($user->companies->job_category_id)
                                                @if($jobCategory->id == $user->companies->job_category_id)
                                                    <option value="{{$jobCategory->id}}" selected>{{$jobCategory->category_name}}</option>
                                                @endif
                                            @endisset
                                            <option value="{{$jobCategory->id}}">{{$jobCategory->category_name}}</option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" placeholder="Phone Number" name="phone_number" value="{{ isset($user->companies) ? $user->companies->phone_number : ''}}" >
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-gropu ">
                                        <p class="custom-lable">Company Logo</p>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="logo" name="company_logo">
                                            <label class="custom-file-label" for="logo">Choose Logo</label>
                                        </div>
                                        <img src="{{$user->companies->company_logo  != null ? asset('images/company/'.$user->companies->company_logo) : asset('images/company-logo-avatar.png')}}" id="logo-preview" class="img-thumbnail preview">
                                    </div>
                                </div>
{{--                                @dd($user->compani$user->companieses->about);--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" id="about" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="vision-des">Company Vision</label>
                                <textarea name="vision" id="vision-des" cols="30" rows="10" class="form-control rich_editor" value="{{ isset($user->companies) ? $user->companies->vission : ''}}"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-gropu ">
                                <p class="custom-lable">Vision Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="vision" name="vision_image">
                                    <label class="custom-file-label" for="vision">Choose Vision Image</label>
                                </div>
                                <img src="{{$user->companies->vission_image != null ? asset('images/company/'.$user->companies->vission_image) : asset('images/vision.jpg')}}" id="vision-preview" class="img-thumbnail preview">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-gropu ">
                                <p class="custom-lable">Mission Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="mission" name="mission_image">
                                    <label class="custom-file-label" for="mission">Choose Mission Image</label>
                                </div>
                                <img src="{{$user->companies->mission_image != null ? asset('images/company/'.$user->companies->mission_image) : asset('images/mission.jpg') }}" id="mission-preview" class="img-thumbnail preview">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mission-des">Company Mission</label>
                                <textarea name="mission" id="mission-des" cols="30" rows="10" class="form-control rich_editor" value="{{ isset($user->companies) ? $user->companies->mission : ''}}"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="company-size">Company Size</label>
                                <select name="size" id="emp-size" class="form-control">
                                    @if(isset($emp_sizes))
                                        @for($i=0;$i < 11;$i++)
                                            @isset($user->companies->size)
                                                @if($user->companies->size == $i)
                                                    <option value="{{$i}}" selected>{{$emp_sizes[$i]}}</option>
                                                    @endif
                                            @endisset
                                                <option value="{{$i}}">{{$emp_sizes[$i]}}</option>
                                        @endfor
                                    @endif
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="foundation-date">Foundation Date</label>
                                <input type="date" name="foundation-date" id="foundation-date" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-gropu ">
                                <p class="custom-lable">Choose banner Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="banner" name="banner_image">
                                    <label class="custom-file-label" for="banner">Choose banner Image</label>
                                </div>
                                <img src="{{$user->companies->banner_image ? asset('images/company/'.$user->companies->banner_image) : asset('images/hero-img.jpg')}}" id="banner-preview" class="img-thumbnail preview">
                            </div>
                        </div>
                    </div>
                     <button type="submit" class="btn btn-primary mt20">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('stylesheet')
{{-- <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> --}}
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">

<style>
    /* bootstrap-tagsinput.css file - add in local */

    .bootstrap-tagsinput {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        display: inline-block;
        padding: 4px 6px;
        color: #555;
        vertical-align: middle;
        border-radius: 4px;
        max-width: 100%;
        line-height: 22px;
        cursor: text;
    }
    .bootstrap-tagsinput input {
        border: none;
        box-shadow: none;
        outline: none;
        background-color: transparent;
        padding: 0 6px;
        margin: 0;
        width: auto;
        max-width: inherit;
    }
    .bootstrap-tagsinput.form-control input::-moz-placeholder {
        color: #777;
        opacity: 1;
    }
    .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
        color: #777;
    }
    .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
        color: #777;
    }
    .bootstrap-tagsinput input:focus {
        border: none;
        box-shadow: none;
    }
    .bootstrap-tagsinput .tag {
        margin-right: 2px;
        color: white;
    }
    .bootstrap-tagsinput .tag [data-role="remove"] {
        margin-left: 8px;
        cursor: pointer;
    }
    .bootstrap-tagsinput .tag [data-role="remove"]:after {
        content: "x";
        padding: 0px 2px;
    }
    .bootstrap-tagsinput .tag [data-role="remove"]:hover {
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    }
    .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
        box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    }

</style>
@endpush

@push('js')
<script>
    $("#country").bind('keyup', function() {
        let $value = $(this).val();
        if($value.length == 0) {
            displayBlock();
            $(".state-area").html('');
        } else {
            $.ajax({
                type: 'get',
                url: '{{URL::to("findcountry")}}',
                data: {'country': $value},
                success: function(countries) {
                    $(".select-area").css("display", "block");
                    $(".border-unset").css({
                        "border-bottom": "1px solid #2b3553;",
                        "border-bottom-right-radius": "unset",
                        "border-bottom-left-radius": "unset"
                    });
                    $.each(countries, function(index, value) {
                        $(".select-area").html("<p id='setid' countryid='"+value.id+"' countryname='"+value.name+"'>" + value.name + "</p>");
                    });

                    $("#setid").bind('click', function() {
                        let $id = $(this).attr("countryid");
                        $("#country").val($(this).attr("countryname"));
                        if($("#country").val()) {
                            displayBlock();
                            $.ajax({
                                type: 'get',
                                url: '{{URL::to("city")}}',
                                data: {'countryId': $id},
                                success: function(cities) {
                                    $(".state-area").css("display", "block");
                                    $(".state").addClass("state-nonradius");
                                    $(".state").removeAttr("disabled");
                                    $.each(cities, function(index, value) {
                                        $(".state-area").append("<p class='cityname'>"+ value.name +"</p>");
                                    });

                                    $(".state").bind('keyup', function() {
                                        if($(this).val().length == 0) {
                                            $(".search-city > p").css('display', 'none');
                                        } else {
                                            $(".search-city > p").css('display', 'block');
                                        }
                                        $(".state-area").css("display", "none")
                                        $(".search-city").css("display", "block")
                                        let $that = $(this).val();

                                        let $citiesName = $that.toLowerCase().replace(/\b[a-z]/g, function(txtVal) {
                                            return txtVal.toUpperCase();
                                        });
                                        if ( $(".cityname:contains('"+ $citiesName +"')") ) {
                                            let $city = $(".cityname:contains('"+ $citiesName +"')");
                                            $.each($city, function(index, value) {
                                                $(".search-city").prepend(value);
                                            });
                                            console.log($city.length + "is length");
                                        }
                                    });

                                    $(".cityname").on('click', function() {
                                        let $cityName = $(this).text();
                                        $(".state").val($cityName);

                                        if($(".state").val().length != null) {
                                            $(".search-city, .state-area").css("display", "none")
                                            $(".state").removeClass("state-nonradius");
                                        }
                                    });
                                }
                            });
                        } else {
                            console.log("No");
                        }
                    });
                }
            });
        }
        $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
    });

    if($("#country").val().length == 0) {
        $(".state").attr("disabled", true);
        console.log($("#country").val().length);
    }

    console.log($("#country").val().length);

    function displayBlock() {
        $(".select-area").html("").css({
            'display': 'none'
        });
        $(".border-unset").css({
            "border-bottom": "1px solid #2b3553;",
            "border-bottom-right-radius": "0.4285rem",
            "border-bottom-left-radius": "0.4285rem"
        });
    }

    // Image Preview
    $('input[type="file"]').change(function(e) {
        var fileName = e.target.files[0].name;
        $("#file").val(fileName);
        let $idname = $(this).attr("id");
        var reader = new FileReader();
        reader.onload = function(e) {
            // get loaded data and render thumbnail.
            if($idname == "logo") {
                document.getElementById("logo-preview").src = e.target.result;
            } else if($idname == "vision") {
                document.getElementById("vision-preview").src = e.target.result;
            } else if($idname == "mission") {
                document.getElementById("mission-preview").src = e.target.result;
            } else {
                document.getElementById("banner-preview").src = e.target.result;
            }
        };
        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    });

    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });


    // //====== CKE Editore
    // let $names = ['vision-des', 'mission-des', 'about'];
    // $.each($names, function(index, valuename) {
        //     CKEDITOR.replace(valuename, {
            //         toolbar : [
            //         {name: 'basicstyles', items: ['Bold', 'Italic', 'Strike', '_', 'RemoveFormat']},
            //         {name: 'paragraph', items: ['NumberedList', 'BulletedList', '_', 'Outdent', '_', 'Indent', '_', 'Blockquote']},
            //         {name: 'style', items: ['Styles', 'Format']}
            //         ],
            //         // toolbarGroups: [
            //         // { name: 'document',	   groups: [ 'mode'] },
            //         // ],
            //     });
            // });

        </script>
        @endpush
