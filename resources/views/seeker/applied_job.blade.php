@extends('layouts.master')
@section('content')
<div class="container">
    <div class="table-responsive">
        <!--Table-->
        <table class="table table-bordered table-hover">

            <!--Table head-->
            <thead class="thead-light">
                <tr>
                    <th>Job Status</th>
                    <th>Applied date</th>
                    <th>Job Title</th>
                    <th>Resume on file</th>
                    <th>Other applicants</th>
                    <th>Action</th>
                </tr>
            </thead>
            <!--Table head-->

            <!--Table body-->
            <tbody>
                <tr>
                    <td>
                        Active
                    </td>
                    <td>
                        Applied <br>
                        <span>18-7-2020</span>
                    </td>
                    <td>
                        Area Sales Manager <br>
                        <span class="glyphicon glyphicon-home"></span>AKL Company
                        <span class="glyphicon glyphicon-map-maker"></span>Yangon

                    </td>
                    <td>
                        Download profile
                    </td>
                    <td>
                        2
                    </td>
                    <td>
                        <a href="#">
                            <i class="glyphicon glyphicon-eye-open"></i>
                        </a>
                        <a href="#">
                            <i class="glyphicon glyphicon-search"></i>
                        </a>
                    </td>
                </tr>

            </tbody>
            <!--Table body-->
        </table>
        <!--Table-->
    </div>
</div>
@endsection
