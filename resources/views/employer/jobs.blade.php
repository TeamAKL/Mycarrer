@extends('layouts.app', ['page' => __('Jobs'), 'pageSlug' => 'jobs'])
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
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Post</th>
                <th scope="col">Location</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody id="post">
            @include('employer.jobtable')
            </tbody>
        </table>
        <input type="hidden" name="page" value="1">
    </div>
@endsection

@push('stylesheet')
    <link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush

@push('js')
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

        // Tool Tips
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        // For Job Status
        $(document).on('click', '.btn-icon', function () {
            let $value = $(this).attr('value');
            let $id = $(this).attr('id');
            $.ajax({
                type: 'get',
                url: '{{URL::to("changejobstatus")}}',
                data: {'status': $value, 'id': $id},
                success: function (data) {
                    if (data) {
                        location.reload();
                    }
                }
            });
        });

        function fetch_data($query, $page) {
            $.ajax({
                type: "get",
                url: "livesearch?query=" + $query + "&page=" + $page,
                success: function (posts) {
                    $('#post').html('');
                    $('#post').html(posts);
                }
            });

        }

        // Live Search For all post
        $(document).ready(function () {
            $("#livesearch").on('keyup', function () {

                let $query = $(this).val();
                let $page = $("input[name='page']").val();
                fetch_data($query, $page);
                $.ajaxSetup({headers: {'csrftoken': '{{ csrf_token() }}'}});
            });

            //Paginagtion
            $(document).on('click', '.pagination a', function (event) {
                event.preventDefault();
                var page = $(this).attr('href').split('page=')[1];
                $("input[name='page']").val(page);

                var query = $('#livesearch').val();

                $('li').removeClass('active');
                $(this).parent().addClass('active');
                fetch_data(query, page);
            });

        });

        // Ajax Tooltip
        $(document).on({
            mouseenter: function () {
                $(this).tooltip("show");
                console.log($(this));
            },
            mouseleave: function () {
                $(this).tooltip("hide");
            }
        }, '.btn-icon');

    </script>
@endpush
