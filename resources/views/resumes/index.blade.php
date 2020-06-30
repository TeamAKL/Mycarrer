@extends('layouts.app', ['page' => __('Dashboard'), 'pageSlug' => 'dashboard'])
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
            <tr>
              <th scope="row">1</th>
              <td>
                  <b>Name</b><br><br>
                  Position:Manager <br>
                  Address:Yangon
              </td>
              <td>
                  <br><br>
                  Job Status:Full-time <br>
                  Experience: 2yrs
              </td>
              <td>
                  <br><br>
                  Degree:Computer University Meiktila <br>
                  Certificate:CCNA
              </td>
              <td>
                  <br><br>
                  Current Salary:500000 MMK <br>
                  Gender:Male
              </td>
              <td class="view-resume">
                <button type="button" class="btn btn-success" style="letter-spacing: 0.8px;">Buy Resume</button><br><br>     
                <button type="button" class="btn btn-info">View Resume</button>
              </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <b>Name</b><br><br>
                    Position:Manager <br>
                    Address:Yangon
                </td>
                <td>
                    <br><br>
                    Job Status:Full-time <br>
                    Experience: 2yrs
                </td>
                <td>
                    <br><br>
                    Degree:Computer University Meiktila <br>
                    Certificate:CCNA
                </td>
                <td>
                    <br><br>
                    Current Salary:500000 MMK <br>
                    Gender:Male
                </td>
                <td class="view-resume">
                  <button type="button" class="btn btn-success" style="letter-spacing: 0.8px;">Buy Resume</button><br><br>     
                  <button type="button" class="btn btn-info">View Resume</button>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <b>Name</b><br><br>
                    Position:Manager <br>
                    Address:Yangon
                </td>
                <td>
                    <br><br>
                    Job Status:Full-time <br>
                    Experience: 2yrs
                </td>
                <td>
                    <br><br>
                    Degree:Computer University Meiktila <br>
                    Certificate:CCNA
                </td>
                <td>
                    <br><br>
                    Current Salary:500000 MMK <br>
                    Gender:Male
                </td>
                <td class="view-resume">
                  <button type="button" class="btn btn-success" style="letter-spacing: 0.8px;">Buy Resume</button><br><br>     
                  <button type="button" class="btn btn-info">View Resume</button>
                </td>
             
            </tr>
          </tbody>
          <!--Table body-->
        </table>
        <!--Table-->
      </div>
@endsection