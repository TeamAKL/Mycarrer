@extends('layouts.app', ['page' => __('All Seeker'), 'pageSlug' => 'all-seeker'])
@section('content')
    <div class="card-body">
        <div class="d-flex justify-content-end p-relative">
            <form action="" method="post">
                @csrf
                <input type="text" name="" id="livesearch" class="custom-search form-control" placeholder="Search">
                <button type="submit" class="btn btn-linkn cbutton"><i
                        class="tim-icons icon-zoom-split custom-align-right"></i></button>
            </form>
        </div>
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Prefer Role</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Location</th>
            </tr>
            </thead>
            <tbody id="post">
            {{-- @include('employer.jobtable') --}}
            </tbody>
        </table>
        <input type="hidden" name="page" value="1">
    </div>
@endsection
@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush

@push('js')
<script>
    function ddd() {
        event.preventDefault();
        document.getElementById("customdd").action = event.target.href;
        document.getElementById("customdd").submit();
    }
</script>
@endpush
