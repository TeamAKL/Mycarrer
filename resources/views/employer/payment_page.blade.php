@extends('layouts.app', ['page' => __('Payment'), 'pageSlug' => 'jobs'])
@section('content')
<h1>Welcome from Payment page </h1>
<div class="card">
    <div class="card-body">
        <p>
            Blade also allows you to define comments in your views. However, unlike HTML comments, Blade comments are not included in the HTML returned by your application:
        </p>
        <div class="row">
            <div class="col-md-4 mt-5">
                <p>Select Payment Method</p>
            </div>
            <div class="col-md-8 mt-5">
                <ul id="payment-ul">
                    <li><div class="circle"></div> MPU Card</li>
                    <li>
                        <div class="circle"></div> Bank Transfer
                    </li>
                    <div class="btcontent">
                        မင်းေဖလား
                    </div>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@push('stylesheet')
<style>
    ul li {
        list-style-type: none !important;
        cursor: pointer;
        margin-bottom: 10px;
    }
    
    .circle {
        position: relative;
        display: inline-block;
        width: 16px;
        height: 16px;
        border-radius: 50%;
        border: 1px solid #bdb8b8;
        vertical-align: middle;
    }

    .circle.checked::before {
        content: "";
        position: absolute;
        top: 2px;
        left: 1.8px;
        border-radius: 50%;
        border: 4.9px solid #75758a;
    }
</style>
@endpush

@push("js")
<script>
    $("ul#payment-ul li").on('click', function() {
        $(".circle").removeClass('checked');
        $(this).children().addClass('checked');
    });
</script>
@endpush