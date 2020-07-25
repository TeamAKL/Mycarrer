@extends('layouts.app', ['page' => __('All Employer'), 'pageSlug' => 'all-employer'])
@section('content')
<div class="card-body">
    <table class="table tablesorter " id="allcompany">
        <thead class="text-primary">
            <tr>
                <th scope="col">Company Name</th>
                <th scope="col">Company Email</th>
                <th scope="col">Address</th>
                <th scope="col">Company Size</th>
                <th scope="col">Industry</th>
                <th scope="col">Posts</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection
@push('stylesheet')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
<style>
    select[name="allseeker_length"] option {
        background: #2b3553;
    }
    select {
        -webkit-appearance: none !important;
    }
</style>
@endpush

@push('js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(function () {
        var table = $('#allcompany').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getcompanies') }}",
            columns: [
            {
                data: "name",
                name: 'name',
                width: "15%"
            },
            {
                data: 'role',
                name: 'role',
                width: "20%"
            },
            {
                data: 'location',
                name: 'location',
                width: "20%"
            },
            {
                data: "email",
                name: "email",
                width: "20%"
            },
            {
                data: "phone",
                name: "phone",
                width: "15%"
            },
            {
                data: "address",
                name: "address",
                width: "15%"
            }

            ]
        });

    });
</script>
@endpush
