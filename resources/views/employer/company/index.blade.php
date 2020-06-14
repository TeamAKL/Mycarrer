@extends('layouts.app', ['pageSlug' => 'jobs'])
@section('content')
<h3>Company Information</h3>
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <form action="" method="post">
                @csrf
                <div class="card-body ">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                <label>{{ __('Category Name') }}</label>
                                <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Category Name') }}" >
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
                                        <label>{{ __('Province/State') }}</label>
                                        <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 state" placeholder="{{ __('Category Name') }}" >
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="state-area">

                                        </div>
                                        <div class="search-city">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
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

                                        console.log($citiesName);
                                        if ( $(".cityname:contains('"+ $citiesName +"')") ) {
                                            let $city = $(".cityname:contains('"+ $citiesName +"')");
                                            $.each($city, function(index, value) {
                                                $(".search-city").prepend(value);
                                            });
                                            console.log($city.length + "is length");
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
</script>
@endpush
