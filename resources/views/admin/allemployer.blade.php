@extends('layouts.app', ['page' => __('All Employer'), 'pageSlug' => 'all-employer'])
@section('content')
<div class="card-body">
    <table class="table tablesorter " id="allcompany">
        <thead class="text-primary">
            <tr>
                <th scope="col" class="first_sort"></th>
                <th scope="col">Company Name</th>
                <th scope="col">Company Email</th>
                <th scope="col">Address</th>
                <th scope="col">Size</th>
                <th scope="col">Industry</th>
                <th scope="col">Created Date</th>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/mustache.js/2.3.0/mustache.min.js"></script>
<script>
    $(function () {
        Mustache.tags = ["<%", "%>"];
        var template = $('#details-template').html();
        var table = $('#allcompany').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getcompanies') }}",
            columns: [
            {
                class:          "details-control",
                orderable:      false,
                data:           null,
                defaultContent: "",
                width: "2%"
            },
            {
                data: "company_name",
                name: 'company_name',
                width: "15%"
            },
            {
                data: "company_email",
                name: "company_email",
                width: "20%"
            },
            {
                data: "address",
                name: "address",
                width: "15%"
            },
            {
                data: "companySize",
                name: "companySize",
                width: "10%"
            },
            {
                data: "industry",
                name: "industry",
                width: "20%"
            },
            {
                data: "created_at",
                name: "created_at",
                width: "18%"
            }
            ]
        });

        // Add event listener for opening and closing details
        $('#allcompany tbody').on('click', 'td.details-control', function () {
            var tr = $(this).closest('tr');
            var row = table.row( tr );

            if ( row.child.isShown() ) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            }
            else {
                // Open this row
                // row.child( template(row.data()) ).show();
                row.child( Mustache.render(template, row.data()) ).show();
                tr.addClass('shown');
            }
        });

    });
</script>

<script id="details-template" type="mustache/x-tmpl">
    <table class="table tablesorter">
        <tr>
            <th style="width: 15%;">Owner Name:</th>
            <td style="width: 20%;"><% owner %></td>
            <th style="width: 15%;">Owner Email: </th>
            <td style="width: 20%;"><% ownerEmail %></td>
            <th style="width: 20%;"> Phone Number: </th>
            <td style="width: 10%;"> <% ownerphone %> </td>
        </tr>
        <tr>
            <th>All Jobs:</th>
            <td><% totalposts %></td>
            <th>Active Jobs:</th>
            <td><% active %></td>
            <th>Success Jobs:</th>
            <td><% success %></td>
        </tr>
        <tr>
            <th>Close Jobs:</th>
            <td><% closed %></td>
            <th>Expire Jobs:</th>
            <td><% expired %></td>
            <th><th>
            <td></td>
        </tr>
        </table>
    </script>
    @endpush
