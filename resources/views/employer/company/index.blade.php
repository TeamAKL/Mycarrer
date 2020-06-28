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
                                        <input type="text" name="country_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 border-unset" placeholder="{{ __('Country Name') }}" id="country">
                                        @include('alerts.feedback', ['field' => 'name'])
                                        <div class="select-area" >

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                        <label for="city">{{ __('City Name') }}</label>
                                        <input type="text" name="city_name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} mb0 state" placeholder="{{ __('City Name') }}" id="city" >
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
                                            @isset($user->companies->industry_id)
                                                @if($jobCategory->id == $user->companies->industry_id)
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
                                        <img src="{{asset('images/company/'.$user->companies->company_logo)}}" id="logo-preview" class="img-thumbnail preview">
                                    </div>
                                </div>
{{--                                @dd($user->companies->about);--}}
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="about">About</label>
                                        <textarea name="about" id="about" cols="30" rows="10" class="form-control" value="kkg "></textarea>
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
                                <img src="{{asset('images/company/'.$user->companies->vission_image)}}" id="vision-preview" class="img-thumbnail preview">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-gropu ">
                                <p class="custom-lable">Mission Image</p>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="mission" name="mission_image">
                                    <label class="custom-file-label" for="mission">Choose Mission Image</label>
                                </div>
                                <img src="{{asset('images/company/'.$user->companies->mission_image)}}" id="mission-preview" class="img-thumbnail preview">
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
                                <img src="{{asset('images/company/'.$user->companies->banner_image)}}" id="banner-preview" class="img-thumbnail preview">
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


        <script>
            // bootstrap-tagsinput.js file - add in local

            (function ($) {
                "use strict";

                var defaultOptions = {
                    tagClass: function(item) {
                        return 'label label-info';
                    },
                    itemValue: function(item) {
                        return item ? item.toString() : item;
                    },
                    itemText: function(item) {
                        return this.itemValue(item);
                    },
                    itemTitle: function(item) {
                        return null;
                    },
                    freeInput: true,
                    addOnBlur: true,
                    maxTags: undefined,
                    maxChars: undefined,
                    confirmKeys: [13, 44, 9],
                    delimiter: ',',
                    delimiterRegex: null,
                    cancelConfirmKeysOnEmpty: true,
                    onTagExists: function(item, $tag) {
                        $tag.hide().fadeIn();
                    },
                    trimValue: false,
                    allowDuplicates: false
                };

                /**
                * Constructor function
                */
                function TagsInput(element, options) {
                    this.itemsArray = [];

                    this.$element = $(element);
                    this.$element.hide();

                    this.isSelect = (element.tagName === 'SELECT');
                    this.multiple = (this.isSelect && element.hasAttribute('multiple'));
                    this.objectItems = options && options.itemValue;
                    this.placeholderText = element.hasAttribute('placeholder') ? this.$element.attr('placeholder') : '';
                    this.inputSize = Math.max(1, this.placeholderText.length);

                    this.$container = $('<div class="bootstrap-tagsinput"></div>');
                    this.$input = $('<input type="text" placeholder="' + this.placeholderText + '"/>').appendTo(this.$container);

                    this.$element.before(this.$container);

                    this.build(options);
                }

                TagsInput.prototype = {
                    constructor: TagsInput,

                    /**
                    * Adds the given item as a new tag. Pass true to dontPushVal to prevent
                    * updating the elements val()
                    */
                    add: function(item, dontPushVal, options) {
                        var self = this;

                        if (self.options.maxTags && self.itemsArray.length >= self.options.maxTags)
                        return;

                        // Ignore falsey values, except false
                        if (item !== false && !item)
                        return;

                        // Trim value
                        if (typeof item === "string" && self.options.trimValue) {
                            item = $.trim(item);
                        }

                        // Throw an error when trying to add an object while the itemValue option was not set
                        if (typeof item === "object" && !self.objectItems)
                        throw("Can't add objects when itemValue option is not set");

                        // Ignore strings only containg whitespace
                        if (item.toString().match(/^\s*$/))
                        return;

                        // If SELECT but not multiple, remove current tag
                        if (self.isSelect && !self.multiple && self.itemsArray.length > 0)
                        self.remove(self.itemsArray[0]);

                        if (typeof item === "string" && this.$element[0].tagName === 'INPUT') {
                            var delimiter = (self.options.delimiterRegex) ? self.options.delimiterRegex : self.options.delimiter;
                            var items = item.split(delimiter);
                            if (items.length > 1) {
                                for (var i = 0; i < items.length; i++) {
                                    this.add(items[i], true);
                                }

                                if (!dontPushVal)
                                self.pushVal();
                                return;
                            }
                        }

                        var itemValue = self.options.itemValue(item),
                        itemText = self.options.itemText(item),
                        tagClass = self.options.tagClass(item),
                        itemTitle = self.options.itemTitle(item);

                        // Ignore items allready added
                        var existing = $.grep(self.itemsArray, function(item) { return self.options.itemValue(item) === itemValue; } )[0];
                        if (existing && !self.options.allowDuplicates) {
                            // Invoke onTagExists
                            if (self.options.onTagExists) {
                                var $existingTag = $(".tag", self.$container).filter(function() { return $(this).data("item") === existing; });
                                self.options.onTagExists(item, $existingTag);
                            }
                            return;
                        }

                        // if length greater than limit
                        if (self.items().toString().length + item.length + 1 > self.options.maxInputLength)
                        return;

                        // raise beforeItemAdd arg
                        var beforeItemAddEvent = $.Event('beforeItemAdd', { item: item, cancel: false, options: options});
                        self.$element.trigger(beforeItemAddEvent);
                        if (beforeItemAddEvent.cancel)
                        return;

                        // register item in internal array and map
                        self.itemsArray.push(item);

                        // add a tag element

                        var $tag = $('<span class="tag ' + htmlEncode(tagClass) + (itemTitle !== null ? ('" title="' + itemTitle) : '') + '">' + htmlEncode(itemText) + '<span data-role="remove"></span></span>');
                        $tag.data('item', item);
                        self.findInputWrapper().before($tag);
                        $tag.after(' ');

                        // add <option /> if item represents a value not present in one of the <select />'s options
                        if (self.isSelect && !$('option[value="' + encodeURIComponent(itemValue) + '"]',self.$element)[0]) {
                            var $option = $('<option selected>' + htmlEncode(itemText) + '</option>');
                            $option.data('item', item);
                            $option.attr('value', itemValue);
                            self.$element.append($option);
                        }

                        if (!dontPushVal)
                        self.pushVal();

                        // Add class when reached maxTags
                        if (self.options.maxTags === self.itemsArray.length || self.items().toString().length === self.options.maxInputLength)
                        self.$container.addClass('bootstrap-tagsinput-max');

                        self.$element.trigger($.Event('itemAdded', { item: item, options: options }));
                    },

                    /**
                    * Removes the given item. Pass true to dontPushVal to prevent updating the
                    * elements val()
                    */
                    remove: function(item, dontPushVal, options) {
                        var self = this;

                        if (self.objectItems) {
                            if (typeof item === "object")
                            item = $.grep(self.itemsArray, function(other) { return self.options.itemValue(other) ==  self.options.itemValue(item); } );
                            else
                            item = $.grep(self.itemsArray, function(other) { return self.options.itemValue(other) ==  item; } );

                            item = item[item.length-1];
                        }

                        if (item) {
                            var beforeItemRemoveEvent = $.Event('beforeItemRemove', { item: item, cancel: false, options: options });
                            self.$element.trigger(beforeItemRemoveEvent);
                            if (beforeItemRemoveEvent.cancel)
                            return;

                            $('.tag', self.$container).filter(function() { return $(this).data('item') === item; }).remove();
                            $('option', self.$element).filter(function() { return $(this).data('item') === item; }).remove();
                            if($.inArray(item, self.itemsArray) !== -1)
                            self.itemsArray.splice($.inArray(item, self.itemsArray), 1);
                        }

                        if (!dontPushVal)
                        self.pushVal();

                        // Remove class when reached maxTags
                        if (self.options.maxTags > self.itemsArray.length)
                        self.$container.removeClass('bootstrap-tagsinput-max');

                        self.$element.trigger($.Event('itemRemoved',  { item: item, options: options }));
                    },

                    /**
                    * Removes all items
                    */
                    removeAll: function() {
                        var self = this;

                        $('.tag', self.$container).remove();
                        $('option', self.$element).remove();

                        while(self.itemsArray.length > 0)
                        self.itemsArray.pop();

                        self.pushVal();
                    },

                    /**
                    * Refreshes the tags so they match the text/value of their corresponding
                    * item.
                    */
                    refresh: function() {
                        var self = this;
                        $('.tag', self.$container).each(function() {
                            var $tag = $(this),
                            item = $tag.data('item'),
                            itemValue = self.options.itemValue(item),
                            itemText = self.options.itemText(item),
                            tagClass = self.options.tagClass(item);

                            // Update tag's class and inner text
                            $tag.attr('class', null);
                            $tag.addClass('tag ' + htmlEncode(tagClass));
                            $tag.contents().filter(function() {
                                return this.nodeType == 3;
                            })[0].nodeValue = htmlEncode(itemText);

                            if (self.isSelect) {
                                var option = $('option', self.$element).filter(function() { return $(this).data('item') === item; });
                                option.attr('value', itemValue);
                            }
                        });
                    },

                    /**
                    * Returns the items added as tags
                    */
                    items: function() {
                        return this.itemsArray;
                    },

                    /**
                    * Assembly value by retrieving the value of each item, and set it on the
                    * element.
                    */
                    pushVal: function() {
                        var self = this,
                        val = $.map(self.items(), function(item) {
                            return self.options.itemValue(item).toString();
                        });

                        self.$element.val(val, true).trigger('change');
                    },

                    /**
                    * Initializes the tags input behaviour on the element
                    */
                    build: function(options) {
                        var self = this;

                        self.options = $.extend({}, defaultOptions, options);
                        // When itemValue is set, freeInput should always be false
                        if (self.objectItems)
                        self.options.freeInput = false;

                        makeOptionItemFunction(self.options, 'itemValue');
                        makeOptionItemFunction(self.options, 'itemText');
                        makeOptionFunction(self.options, 'tagClass');

                        // Typeahead Bootstrap version 2.3.2
                        if (self.options.typeahead) {
                            var typeahead = self.options.typeahead || {};

                            makeOptionFunction(typeahead, 'source');

                            self.$input.typeahead($.extend({}, typeahead, {
                                source: function (query, process) {
                                    function processItems(items) {
                                        var texts = [];

                                        for (var i = 0; i < items.length; i++) {
                                            var text = self.options.itemText(items[i]);
                                            map[text] = items[i];
                                            texts.push(text);
                                        }
                                        process(texts);
                                    }

                                    this.map = {};
                                    var map = this.map,
                                    data = typeahead.source(query);

                                    if ($.isFunction(data.success)) {
                                        // support for Angular callbacks
                                        data.success(processItems);
                                    } else if ($.isFunction(data.then)) {
                                        // support for Angular promises
                                        data.then(processItems);
                                    } else {
                                        // support for functions and jquery promises
                                        $.when(data)
                                        .then(processItems);
                                    }
                                },
                                updater: function (text) {
                                    self.add(this.map[text]);
                                    return this.map[text];
                                },
                                matcher: function (text) {
                                    return (text.toLowerCase().indexOf(this.query.trim().toLowerCase()) !== -1);
                                },
                                sorter: function (texts) {
                                    return texts.sort();
                                },
                                highlighter: function (text) {
                                    var regex = new RegExp( '(' + this.query + ')', 'gi' );
                                    return text.replace( regex, "<strong>$1</strong>" );
                                }
                            }));
                        }

                        // typeahead.js
                        if (self.options.typeaheadjs) {
                            var typeaheadConfig = null;
                            var typeaheadDatasets = {};

                            // Determine if main configurations were passed or simply a dataset
                            var typeaheadjs = self.options.typeaheadjs;
                            if ($.isArray(typeaheadjs)) {
                                typeaheadConfig = typeaheadjs[0];
                                typeaheadDatasets = typeaheadjs[1];
                            } else {
                                typeaheadDatasets = typeaheadjs;
                            }

                            self.$input.typeahead(typeaheadConfig, typeaheadDatasets).on('typeahead:selected', $.proxy(function (obj, datum) {
                                if (typeaheadDatasets.valueKey)
                                self.add(datum[typeaheadDatasets.valueKey]);
                                else
                                self.add(datum);
                                self.$input.typeahead('val', '');
                            }, self));
                        }

                        self.$container.on('click', $.proxy(function(event) {
                            if (! self.$element.attr('disabled')) {
                                self.$input.removeAttr('disabled');
                            }
                            self.$input.focus();
                        }, self));

                        if (self.options.addOnBlur && self.options.freeInput) {
                            self.$input.on('focusout', $.proxy(function(event) {
                                // HACK: only process on focusout when no typeahead opened, to
                                //       avoid adding the typeahead text as tag
                                if ($('.typeahead, .twitter-typeahead', self.$container).length === 0) {
                                    self.add(self.$input.val());
                                    self.$input.val('');
                                }
                            }, self));
                        }


                        self.$container.on('keydown', 'input', $.proxy(function(event) {
                            var $input = $(event.target),
                            $inputWrapper = self.findInputWrapper();

                            if (self.$element.attr('disabled')) {
                                self.$input.attr('disabled', 'disabled');
                                return;
                            }

                            switch (event.which) {
                                // BACKSPACE
                                case 8:
                                if (doGetCaretPosition($input[0]) === 0) {
                                    var prev = $inputWrapper.prev();
                                    if (prev.length) {
                                        self.remove(prev.data('item'));
                                    }
                                }
                                break;

                                // DELETE
                                case 46:
                                if (doGetCaretPosition($input[0]) === 0) {
                                    var next = $inputWrapper.next();
                                    if (next.length) {
                                        self.remove(next.data('item'));
                                    }
                                }
                                break;

                                // LEFT ARROW
                                case 37:
                                // Try to move the input before the previous tag
                                var $prevTag = $inputWrapper.prev();
                                if ($input.val().length === 0 && $prevTag[0]) {
                                    $prevTag.before($inputWrapper);
                                    $input.focus();
                                }
                                break;
                                // RIGHT ARROW
                                case 39:
                                // Try to move the input after the next tag
                                var $nextTag = $inputWrapper.next();
                                if ($input.val().length === 0 && $nextTag[0]) {
                                    $nextTag.after($inputWrapper);
                                    $input.focus();
                                }
                                break;
                                default:
                                // ignore
                            }

                            // Reset internal input's size
                            var textLength = $input.val().length,
                            wordSpace = Math.ceil(textLength / 5),
                            size = textLength + wordSpace + 1;
                            $input.attr('size', Math.max(this.inputSize, $input.val().length));
                        }, self));

                        self.$container.on('keypress', 'input', $.proxy(function(event) {
                            var $input = $(event.target);

                            if (self.$element.attr('disabled')) {
                                self.$input.attr('disabled', 'disabled');
                                return;
                            }

                            var text = $input.val(),
                            maxLengthReached = self.options.maxChars && text.length >= self.options.maxChars;
                            if (self.options.freeInput && (keyCombinationInList(event, self.options.confirmKeys) || maxLengthReached)) {
                                // Only attempt to add a tag if there is data in the field
                                if (text.length !== 0) {
                                    self.add(maxLengthReached ? text.substr(0, self.options.maxChars) : text);
                                    $input.val('');
                                }

                                // If the field is empty, let the event triggered fire as usual
                                if (self.options.cancelConfirmKeysOnEmpty === false) {
                                    event.preventDefault();
                                }
                            }

                            // Reset internal input's size
                            var textLength = $input.val().length,
                            wordSpace = Math.ceil(textLength / 5),
                            size = textLength + wordSpace + 1;
                            $input.attr('size', Math.max(this.inputSize, $input.val().length));
                        }, self));

                        // Remove icon clicked
                        self.$container.on('click', '[data-role=remove]', $.proxy(function(event) {
                            if (self.$element.attr('disabled')) {
                                return;
                            }
                            self.remove($(event.target).closest('.tag').data('item'));
                        }, self));

                        // Only add existing value as tags when using strings as tags
                        if (self.options.itemValue === defaultOptions.itemValue) {
                            if (self.$element[0].tagName === 'INPUT') {
                                self.add(self.$element.val());
                            } else {
                                $('option', self.$element).each(function() {
                                    self.add($(this).attr('value'), true);
                                });
                            }
                        }
                    },

                    /**
                    * Removes all tagsinput behaviour and unregsiter all event handlers
                    */
                    destroy: function() {
                        var self = this;

                        // Unbind events
                        self.$container.off('keypress', 'input');
                        self.$container.off('click', '[role=remove]');

                        self.$container.remove();
                        self.$element.removeData('tagsinput');
                        self.$element.show();
                    },

                    /**
                    * Sets focus on the tagsinput
                    */
                    focus: function() {
                        this.$input.focus();
                    },

                    /**
                    * Returns the internal input element
                    */
                    input: function() {
                        return this.$input;
                    },

                    /**
                    * Returns the element which is wrapped around the internal input. This
                    * is normally the $container, but typeahead.js moves the $input element.
                    */
                    findInputWrapper: function() {
                        var elt = this.$input[0],
                        container = this.$container[0];
                        while(elt && elt.parentNode !== container)
                        elt = elt.parentNode;

                        return $(elt);
                    }
                };

                /**
                * Register JQuery plugin
                */
                $.fn.tagsinput = function(arg1, arg2, arg3) {
                    var results = [];

                    this.each(function() {
                        var tagsinput = $(this).data('tagsinput');
                        // Initialize a new tags input
                        if (!tagsinput) {
                            tagsinput = new TagsInput(this, arg1);
                            $(this).data('tagsinput', tagsinput);
                            results.push(tagsinput);

                            if (this.tagName === 'SELECT') {
                                $('option', $(this)).attr('selected', 'selected');
                            }

                            // Init tags from $(this).val()
                            $(this).val($(this).val());
                        } else if (!arg1 && !arg2) {
                            // tagsinput already exists
                            // no function, trying to init
                            results.push(tagsinput);
                        } else if(tagsinput[arg1] !== undefined) {
                            // Invoke function on existing tags input
                            if(tagsinput[arg1].length === 3 && arg3 !== undefined){
                                var retVal = tagsinput[arg1](arg2, null, arg3);
                            }else{
                                var retVal = tagsinput[arg1](arg2);
                            }
                            if (retVal !== undefined)
                            results.push(retVal);
                        }
                    });

                    if ( typeof arg1 == 'string') {
                        // Return the results from the invoked function calls
                        return results.length > 1 ? results : results[0];
                    } else {
                        return results;
                    }
                };

                $.fn.tagsinput.Constructor = TagsInput;

                /**
                * Most options support both a string or number as well as a function as
                * option value. This function makes sure that the option with the given
                * key in the given options is wrapped in a function
                */
                function makeOptionItemFunction(options, key) {
                    if (typeof options[key] !== 'function') {
                        var propertyName = options[key];
                        options[key] = function(item) { return item[propertyName]; };
                    }
                }
                function makeOptionFunction(options, key) {
                    if (typeof options[key] !== 'function') {
                        var value = options[key];
                        options[key] = function() { return value; };
                    }
                }
                /**
                * HtmlEncodes the given value
                */
                var htmlEncodeContainer = $('<div />');
                function htmlEncode(value) {
                    if (value) {
                        return htmlEncodeContainer.text(value).html();
                    } else {
                        return '';
                    }
                }

                /**
                * Returns the position of the caret in the given input field
                * http://flightschool.acylt.com/devnotes/caret-position-woes/
                */
                function doGetCaretPosition(oField) {
                    var iCaretPos = 0;
                    if (document.selection) {
                        oField.focus ();
                        var oSel = document.selection.createRange();
                        oSel.moveStart ('character', -oField.value.length);
                        iCaretPos = oSel.text.length;
                    } else if (oField.selectionStart || oField.selectionStart == '0') {
                        iCaretPos = oField.selectionStart;
                    }
                    return (iCaretPos);
                }

                /**
                * Returns boolean indicates whether user has pressed an expected key combination.
                * @param object keyPressEvent: JavaScript event object, refer
                *     http://www.w3.org/TR/2003/WD-DOM-Level-3-Events-20030331/ecma-script-binding.html
                * @param object lookupList: expected key combinations, as in:
                *     [13, {which: 188, shiftKey: true}]
                */
                function keyCombinationInList(keyPressEvent, lookupList) {
                    var found = false;
                    $.each(lookupList, function (index, keyCombination) {
                        if (typeof (keyCombination) === 'number' && keyPressEvent.which === keyCombination) {
                            found = true;
                            return false;
                        }

                        if (keyPressEvent.which === keyCombination.which) {
                            var alt = !keyCombination.hasOwnProperty('altKey') || keyPressEvent.altKey === keyCombination.altKey,
                            shift = !keyCombination.hasOwnProperty('shiftKey') || keyPressEvent.shiftKey === keyCombination.shiftKey,
                            ctrl = !keyCombination.hasOwnProperty('ctrlKey') || keyPressEvent.ctrlKey === keyCombination.ctrlKey;
                            if (alt && shift && ctrl) {
                                found = true;
                                return false;
                            }
                        }
                    });

                    return found;
                }

                /**
                * Initialize tagsinput behaviour on inputs and selects which have
                * data-role=tagsinput
                */
                $(function() {
                    $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
                });
            })(window.jQuery);

        </script>
        @endpush
