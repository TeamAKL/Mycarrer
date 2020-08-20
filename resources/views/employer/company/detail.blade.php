@extends('layouts.master')
@section('content')
@include('employer.company.banner')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3 class="mb20 underline">About</h3>
            {!! $company->about !!}
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md-6 col-sm-12 images">
            <img src="{{$company->vission_image != null ? asset('images/company/'.$company->vission_image) : asset('images/vision.jpg')}}" alt="">
        </div>
        <div class="col-md-6 col-sm-12 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Vision</h3>
                {!! isset($company) ? $company->vission : '' !!}
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="col-md-6 col-sm-12 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Mission</h3>
                {!! isset($company) ? $company->mission : '' !!}
            </div>
        </div>
        <div class="col-md-6 col-sm-12 images">
            <img src="{{$company->mission_image != null ? asset('images/company/'.$company->mission_image) : asset('images/mission.jpg') }}" alt="">
        </div>
    </div>
</div>
@endsection

@push('css')
<style>
    .parent {
        flex-direction: row;
        width: 100%;
    }
    .item1 {
        width: 30%;
    }
    .item2 {
        width: 70%;
    }
    div.job-ch a {
        cursor: pointer;
    }
    .vision ul, .vission ol, .about ol, .about ul {
        display: flex;
        flex-direction: column;
    }
    @media(max-width: 768px) {
        .parent {
            flex-direction: column;
        }
        .item1, .item2 {
            width: 100%;
        }

        .item1 {
            margin-top: 5px;
            order: 2;
        }

        .item2 {
            order: 1;
            font-size: .8rem;
        }
    }
</style>
<link rel="stylesheet" href="{{asset('css/employer/banner.css')}}">
@endpush

@push('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $('.apply_btn').on('click',function (e) {
        e.preventDefault();
        var $post_id = $(this).attr('post');
        $.ajax({
            type: 'post',
            url: '{{URL::to("checkApplyPost")}}',
            data: {'post_id':$post_id},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            },
            success: function(data) {

                if(data.status == true){
                    window.location.replace('../../seeker/applied-job/'+$post_id);
                }else{
                    window.location.replace("../../seeker/job-detail/"+$post_id);
                }

            }
        });
    });

    $(".unauthapply").on("click", function(e) {
        e.preventDefault();
        swal({
            title: "Sorry!",
            text: "Please Login First",
            icon: "warning",
            dangerMode: true,
            button: "Ok!",
        }).then(result => {
            if(result) {
                window.location.href = '/seeker/login';
            }
        });
    });
</script>
@endpush
