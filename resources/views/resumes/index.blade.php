@extends('layouts.app', ['page' => __('All Resume'), 'pageSlug' => 'allresume'])
@section('content')
<div class="table-responsive">

        <!--Table-->
        <table class="table table-hover table-dark">

          <!--Table head-->
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
          @foreach($resumes as $key=>$resume)
            <tr>
              <th scope="row">{{$key}}</th>
              <td>
                  <b>{{$resume->name}}</b><br><br>
                  Position:{{isset($resume->job_preferences->role) ? $resume->job_preferences->role : ""}} <br>
                  Address:{{isset($resume->profile_details->permanent_address) ? $resume->profile_details->permanent_address : ''}}
              </td>
              <td>
                  <br><br>
                  Employer Type:{{isset($resume->job_preferences->employer_type) ? $resume->job_preferences->employer_type : ""}} <br>
                  Experience: 2yrs
              </td>
              <td>
                  <br><br>
                  Degree:{{isset($resume->education[0]->qualification) ? $resume->education[0]->qualification : ""}} <br>
                  Certificate:{{isset($resume->certificates[0]->certificate) ? $resume->certificates[0]->certificate : ""}}
              </td>
              <td>
                  <br><br>
                  Current Salary:500000 MMK <br>
                  Gender:{{isset($resume->profile_details->gender) ? $resume->profile_details->gender : ""}}
              </td>
              <td class="view-resume">
                <button type="button" class="btn btn-success" style="letter-spacing: 0.8px;">Buy Resume</button><br><br>
                <button type="button" class="btn btn-info">View Resume</button>
              </td>
            </tr>
            @endforeach
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>
@endsection
