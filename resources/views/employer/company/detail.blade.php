@extends('layouts.master')
@section('content')
@include('employer.company.banner')
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4">
            <h3 class="mb20 underline">About</h3>
            <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi ipsam numquam delectus et dolores ullam tempora reprehenderit rerum accusantium assumenda sapiente, natus eaque est, consectetur animi id minima fugit consequuntur.
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td><a href="" class="btn btn-sm btn-primary">Detail</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row my-5">
        <div class="clo-md-6 images">
            <img src="{{asset('images/vision.jpg')}}" alt="">
        </div>
        <div class="clo-md-6 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Vision</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro optio, corrupti quasi veniam saepe sit laudantium assumenda unde, blanditiis sapiente molestias, voluptatum qui consequatur distinctio nobis nam repellendus dolor!</p>
            </div>
        </div>
    </div>

    <div class="row my-5">
        <div class="clo-md-6 float-right">
            <div class="vision">
                <h3 class="mb20 underline">Misiion</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro optio, corrupti quasi veniam saepe sit laudantium assumenda unde, blanditiis sapiente molestias, voluptatum qui consequatur distinctio nobis nam repellendus dolor!</p>
            </div>
        </div>
        <div class="clo-md-6 images">
            <img src="{{asset('images/mission.jpg')}}" alt="">
        </div>
    </div>
</div>
@endsection

@push('css')
<link rel="stylesheet" href="{{asset('css/employer/banner.css')}}">
@endpush
