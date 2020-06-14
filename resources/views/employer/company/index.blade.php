@extends('layouts.app', ['pageSlug' => 'jobs'])
@section('content')
<h3>Company Information</h3>
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-body ">
                <form action="" method="post">
                    @csrf
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Company Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Company Name') }}" >
                                @include('alerts.feedback', ['field' => 'name'])
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="country">{{ __('Country') }}</label>
                                        <input type="text" name="country" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 border-unset" placeholder="{{ __('Country Name') }}" id="country">
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="select-area" >

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="city">{{ __('City Name') }}</label>
                                        <input type="text" name="cityname" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 state" placeholder="{{ __('City Name') }}" id="city">
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="state-area">

                                        </div>
                                        <div class="search-city">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Company Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" placeholder="Company Address">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="industry">Company Idustry</label>
                                <input type="text" class="form-control" id="industry" placeholder="Company Industry">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-control" placeholder="Phone Number">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-gropu ">
                                        <p class="custom-lable">Company Logo</p>
                                        <div class="custom-file mb-3">
                                            <input type="file" class="custom-file-input" id="logo" name="filename">
                                            <label class="custom-file-label" for="logo">Choose Logo</label>
                                        </div>
                                        <img src="{{asset('images/company-logo-avatar.png')}}" id="logo-preview" class="img-thumbnail preview">
                                    </div>
                                </div>
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
                                <textarea name="vision" id="vision-des" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-gropu ">
                                <p class="custom-lable">Vision Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="vision" name="filename">
                                    <label class="custom-file-label" for="vision">Choose Vision Image</label>
                                </div>
                                <img src="{{asset('images/vision.jpg')}}" id="vision-preview" class="img-thumbnail preview">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-gropu ">
                                <p class="custom-lable">Mission Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="mission" name="filename">
                                    <label class="custom-file-label" for="mission">Choose Mission Image</label>
                                </div>
                                <img src="{{asset('images/mission.jpg')}}" id="mission-preview" class="img-thumbnail preview">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="mission-des">Company Mission</label>
                                <textarea name="mission" id="mission-des" cols="30" rows="10" class="form-control"></textarea>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="size">Size</label>
                                <select name="size" id="size" class="form-control">
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
                                    <option value="1">1</option>
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
                                    <input type="file" class="custom-file-input" id="banner" name="filename">
                                    <label class="custom-file-label" for="banner">Choose banner Image</label>
                                </div>
                                <img src="{{asset('images/hero-img.jpg')}}" id="banner-preview" class="img-thumbnail preview">
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
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
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
</script>
@endpush
