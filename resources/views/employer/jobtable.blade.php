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
        @elseif($post->job_status == 'expired')
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
<tr>
    <td colspan="5">{{ $posts->links() }}</td>
</tr>
