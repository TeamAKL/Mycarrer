@extends('layouts.app', ['page' => __('Payment'), 'pageSlug' => 'payment'])
@section('content')
<h1>Welcome from Payment page </h1>
<div class="card">
    <div class="card-body">
        <h3 class="content">Choose payment for the cost. Once we confirm, we will start building the items you purchased.</h3>
        <p class="ptext">*Please note that payment may take longer depending on the payment method you choose.</p>
        <div class="row">
            <div class="col-md-4 mt-5">
                <p>Select Payment Method</p>
            </div>
            <div class="col-md-8 mt-5">
                <ul id="payment-ul">
                    <li><div class="circle"></div> MPU Card</li>
                    <div class="mput">
                        <div class="mpuTransfer">
                            MUP
                        </div>
                    </div>
                    <li class="bt">
                        <div class="circle"></div> Bank Transfer
                    </li>
                    <div class="btcontent">
                        <ul>
                            <li>Account No: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 2010600300000132</li>
                            <li>Account Name: &nbsp  MY CAREERS CO.,LTD</li>
                            <li>Bank Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp CB Bank </li>
                        </ul>
                        <hr>
                        <ul>
                            <li>Account No: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 00250300204193501</li>
                            <li>Account Name: &nbsp MY CAREERS CO.,LTD</li>
                            <li>Bank Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp KBZ Bank </li>
                        </ul>
                        <hr>
                        <ul>
                            <li>Account No: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 0024203013917343</li>
                            <li>Account Name: &nbsp MY CAREERS CO.,LTD</li>
                            <li>Bank Name: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp AYA Bank </li>
                        </ul>
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
    div.mput {
        display: none;
    }
    div.mpuTransfer {
        opacity: 0;
    }
    div.btcontent {
        opacity: 0;
    }
    h3.content, p.ptext {
        font-style: italic;
    }

    hr {
        margin-left: 40px;
        border-color: #fff !important;
    }
</style>
@endpush

@push("js")
<script>
    $("ul#payment-ul li").on('click', function() {
        $(".circle").removeClass('checked');
        $(this).children().addClass('checked');
        if($(this).hasClass('bt')) {
            $("div.btcontent").animate({
                opacity: 1,
                width: "100%",
                height: "auto"
            }, 300, function() {
                $("div.mput").css({
                    display: "none"
                });
            });
        } else {
            $("div.mput").css({
                display: "block"
            });
            $("div.mpuTransfer").animate({
                opacity: 1
            }, 300, function() {
                $("div.btcontent").css("opacity", 0);
            });
        }
    });
</script>
@endpush
