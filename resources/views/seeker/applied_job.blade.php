@extends('layouts.master')
@section('content')
@include('seeker.searchContainer')
<div class="dashboard-area">
    <div class="container">
        <div class="table-responsive pt-3">
            <!--Table-->
            <table class="table table-bordered table-hover">
                
                <!--Table head-->
                <thead class="thead-light">
                    <tr>
                        <th>Job Status</th>
                        <th>Applied date</th>
                        <th>Job Title</th>
                        <th>Other applicants</th>
                    </tr>
                </thead>
                <!--Table head-->
                
                <!--Table body-->
                <tbody>
                    <tr>
                        <td>
                            <span style="color: #3490dc;" class="text-capitalize">{{$post->job_status}}</span>
                        </td>
                        <td>
                            Applied <br>
                            <span style="color: #3490dc;">{{$date}}</span>
                        </td>
                        <td>
                            <span style="color: #3490dc; font-weight: bold;">{{$post->position}}</span><br>
                            <span style="color: #3490dc"><i class="fa fa-building-o" aria-hidden="true"></i>{{$post->company->company_name}}</span>
                            <span style="color: #3490dc;"><i class="fa fa-map-marker" aria-hidden="true"></i>{{$post->address}}</span>
                            
                        </td>
                        <td>
                            <span style="color: #3490dc;">{{$post->users->count() - 1}}</span>
                        </td>
                    </tr>
                    
                </tbody>
                <!--Table body-->
            </table>
            <!--Table-->
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('css/banner.css')}}">
<link rel="stylesheet" href="{{asset('css/seeker_index.css')}}">
@endpush
