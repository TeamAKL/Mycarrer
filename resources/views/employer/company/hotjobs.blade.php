@extends('layouts.master')
@section('content')
@include('employer.company.banner')
<div class="container">
    <div class="table-responsive">
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
                @foreach($posts as $post)
                <tr>
                    <td>{{$post->position}}</td>
                    <td>{{$post->type}}</td>
                    <td>{{$post->address}}</td>
                    <td>@if($post->salary_unit == 'USD') USD @endif {{number_format($post->min_salary)}} - {{number_format($post->max_salary)}} @if($post->salary_unit == 'MMK') MMK @endif </td>
                    <td>
                        @auth()
                        <button class="btn btn-sm btn-primary apply_btn" post="{{$post->id}}">@if(Auth::user()->posts()->where('post_id', $post->id)->exists()) Applied @else Apply @endif</button>
                        @endauth
                        @guest
                        <a href="#" class="btn btn-sm btn-primary apply_btn unauthapply">Apply</a>
                        @endguest
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    {{$posts->links()}}
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/employer/banner.css')}}">
@endpush