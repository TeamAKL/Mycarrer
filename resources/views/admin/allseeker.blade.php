@extends('layouts.app', ['page' => __('All Seeker'), 'pageSlug' => 'all-seeker'])
@section('content')
<div class="card-body">
    <table class="table tablesorter " id="allseeker">
        <thead class="text-primary">
            <tr>
                <th scope="col" class="first_sort"></th>
                <th scope="col">Name</th>
                <th scope="col">Prefer Role</th>
                <th scope="col">Prefer Location</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
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
        // var template = Handlebars.compile($("#details-template").html());
        Mustache.tags = ["<%", "%>"];
        var template = $('#details-template').html();
        var table = $('#allseeker').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('getallseeker') }}",
            columns: [
            {
                class:          "details-control",
                orderable:      false,
                data:           null,
                targets: 0,
                defaultContent: "",
                width: "2%"
            },
            {
                data: "name",
                name: 'name',
                width: "15%"
            },
            {
                data: 'role',
                name: 'role',
                width: "15%"
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
                data: "create",
                name: "create",
                width: "18%",
            }

            ]
        });

        // Add event listener for opening and closing details
        $('#allseeker tbody').on('click', 'td.details-control', function () {
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
            <th>Gender:</th>
            <td><% gender %></td>
            <th>Expected Salary:</th>
            <td><% salary %></td>
            <th>Address:</th>
            <td><% address %></td>
        </tr>
    </table>
</script>
@endpush
