@extends('layouts.app', ['page' => __('Jobs'), 'pageSlug' => 'jobs'])
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
            <tr><th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Post</th>
                <th scope="col">Location</th>
                <th scope="col">Status</th>
                {{-- <th scope="col"></th> --}}
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $key => $post)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$post->position}}</td>
                <td>{{$post->position}}</td>
                <td>{{$post->address}}</td>
                <td>
                    @if($post->job_status == 'active')
                    <button id="{{$post->id}}" value="successed" type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon" data-toggle="tooltip" data-placement="top" title="Success">
                        <i class="tim-icons icon-check-2"></i>
                    </button>
                    <button id="{{$post->id}}" value="closed" type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" data-toggle="tooltip" data-placement="top" title="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                    @elseif($post->job_status == 'successed')
                    <span class="text-success">Successed</span>
                    @elseif($post->job_status == 'closed')
                    <span class="text-danger">Closed</span>
                    @else
                    <span class="text-danger">Expired</span>
                    @endif
                </td>
                {{-- <td>
                    <button type="button" rel="tooltip" class="btn btn-success btn-sm btn-round btn-icon" data-toggle="tooltip" data-placement="top" title="Success">
                        <i class="tim-icons icon-check-2"></i>
                    </button>
                    <button type="button" rel="tooltip" class="btn btn-danger btn-sm btn-round btn-icon" data-toggle="tooltip" data-placement="top" title="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>

                </td> --}}
            </tr>
            @empty
            @endforelse
        </tbody>
    </table>
    {{ $posts->links() }}

</div>
@endsection

@push('stylesheet')
<link rel="stylesheet" href="{{asset('css/employer/index.css')}}">
@endpush

@push('js')
<script>
    // Tool Tips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });

// For Job Status
    $('.btn-icon').on('click', function() {
        let $value = $(this).attr('value');
        let $id = $(this).attr('id');
        $.ajax({
            type: 'get',
            url: '{{URL::to("changejobstatus")}}',
            data: {'status': $value, 'id': $id},
            success: function(data) {
                if(data) {
                    location.reload();
                }
            }
        });
    });


</script>
@endpush
