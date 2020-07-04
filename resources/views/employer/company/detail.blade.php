@extends('layouts.master')
@section('content')
@include('employer.company.banner')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <h3 class="mb20 underline">About</h3>
            <p>
                {{$company->about}}
            </p>
        </div>
        <div class="col-md-8">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Job Title</th>
                        <th scope="col">Job Type</th>
                        <th scope="col">Location</th>
                        <th scope="col">Salary</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
{{--                    <tr>--}}
{{--                        <th scope="row">1</th>--}}
{{--                        <td>Mark</td>--}}
{{--                        <td>Otto</td>--}}
{{--                        <td>@mdo</td>--}}
{{--                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">2</th>--}}
{{--                        <td>Jacob</td>--}}
{{--                        <td>Thornton</td>--}}
{{--                        <td>@fat</td>--}}
{{--                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <th scope="row">3</th>--}}
{{--                        <td>Larry</td>--}}
{{--                        <td>the Bird</td>--}}
{{--                        <td>@twitter</td>--}}
{{--                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>--}}
{{--                    </tr>--}}
                </tbody>
            </table>
        </div>
    </div>
    <div class="row my-5">
        <div class="clo-md-6 images">
            <img src="{{$company->vission_image != null ? asset('images/company/'.$company->vission_image) : asset('images/vision.jpg')}}" alt="">
        </div>
        <div class="clo-md-6 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Vision</h3>
                <p>{{isset($company) ? $company->vission : ''}}</p>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="clo-md-6 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Mission</h3>
                <p>{{ isset($company) ? $company->mission : ''}}</p>
            </div>
        </div>
        <div class="clo-md-6 images">
            <img src="{{$company->mission_image != null ? asset('images/company/'.$company->mission_image) : asset('images/mission.jpg') }}" alt="">
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('css/employer/banner.css')}}">
@endpush
