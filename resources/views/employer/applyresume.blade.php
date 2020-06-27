@extends('layouts.app', ['page' => __('applied resume'), 'pageSlug' => 'appliedresume'])
@section('content')
<div class="card-body">
    <div class="d-flex justify-content-end p-relative">
        <form action="" method="post">
            <input type="text" name="" id="" class="custom-search form-control" placeholder="Search">
            <button type="submit" class="btn btn-linkn cbutton"><i class="tim-icons icon-zoom-split custom-align-right"></i></button>
        </form>
    </div>
    <table class="table tablesorter " id="">
        <thead class=" text-primary">
            <tr><th scope="col">ID</th>
                <th scope="col">Job Title</th>
                <th scope="col">Job Type</th>
                <th scope="col">Job Category</th>
                <th scope="col">Location</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection

@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush
