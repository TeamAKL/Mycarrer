@extends('layouts.app', ['page' => __('Add amount to employer'), 'pageSlug' => 'add-amount'])
@section('content')
@if(session('success'))
<div class="alert alert-success alert-with-icon" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
    </button>
    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
    <span data-notify="message">{{session('success')}}</span>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4>Add amount to specific company</h4>
    </div>
    <div class="card-body">
        <form action="{{url('save-amount')}}" method="post">
            @csrf
            <input type="hidden" name="company_id" id="company_id">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" class="form-control {{ $errors->has('amount') ? ' is-invalid' : '' }}" id="amount" name="amount" placeholder="Type Amount">
                        @if ($errors->has('amount'))
                        <span class="invalid-feedback" role="alert">{{ $errors->first('amount') }}</span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control mb-0 {{ $errors->has('company') ? ' is-invalid' : '' }}" name="company" id="company" placeholder="Type Company Name">
                        @if ($errors->has('company'))
                        <span class="invalid-feedback" role="alert">{{ $errors->first('company') }}</span>
                        @endif
                        <div class="name-holder" style="@if($errors->has('company')) display: none; @endif">
                            <ul id="name-section" style="list-style-type: none !important; padding-left: 0px;">
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Save" class="btn btn-primary">
        </form>
    </div>
</div>
@endsection

@push('stylesheet')
<style>
    ul#name-section li{
        padding: 10px 0 10px 18px;
        cursor: pointer;
        color: rgba(255, 255, 255, 0.6);
    }

    ul#name-section li:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.1);
    }

    .name-holder {
        position: relative;
        border: 1px solid #2b3553;
        border-top: none;
        max-height: 100px;
        overflow-y: auto;
    }
</style>
@endpush

@push('js')
<script>
    $(window).on('load', function() {

        function fetchAll(companies) {
            $.ajax({
                type: "get",
                url: '{{URL::to("get-company-name")}}',
                success: function(result) {
                    getResult(result.companies)
                }
            });

        }

        function getResult(result) {
            $(result).each(function(index, value) {
                $("#name-section").append("<li id='"+value.id+"'>"+value.company_name+"</li>");
            });
        }

        fetchAll();

        $("#company").on('click', function() {
            $(".name-holder").css("display", "block");
        });

        $("#company").on('keyup', function() {
            var query = $(this).val();
            if(query.length >= 1) {
                $.ajax({
                    type: "get",
                    url: 'get-company-search?name='+query,
                    success: function(result) {
                        $("#name-section").html("");
                        getResult(result.companies)
                    }
                });
            } else {
                $("#name-section").html("");
                fetchAll();
            }
        });

        $(document).on('click', "ul#name-section li", function() {
            var id = $(this).attr('id');
            var name = $(this).text();
            $("#company_id").val(id);
            $("#company").val(name);
            $(".name-holder").css("display", "none");
        });

    });
</script>
@endpush
