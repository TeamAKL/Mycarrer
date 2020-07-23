@extends('layouts.app', ['page' => __('Job Category'), 'pageSlug' => 'job-category'])
@section('content')
<div class="card-body">
    {{-- <div class="d-flex justify-content-end p-relative">
        <form action="" method="post">
            @csrf
            <input type="text" name="" id="livesearch" class="custom-search form-control" placeholder="Search">
            <button type="submit" class="btn btn-linkn cbutton"><i
                class="tim-icons icon-zoom-split custom-align-right"></i></button>
            </form>
        </div> --}}
        <table class="table tablesorter " id="">
            <thead class=" text-primary">
                <tr><th scope="col">Category Name</th>
                    <th scope="col">Creation Date</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($jobCat as $job)
                <tr>
                    <td>{{$job->category_name}}</td>
                    <td>{{$job->created_at->format('d-m-Y')}}</td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                <a class="dropdown-item" href="{{url('job-category/'. $job->id .'/edit')}}"><span class="tim-icons icon-pencil"></span>Edit</a>

                                {{-- <a class="dropdown-item" href="{{ route('job-category.destroy',['job_category'=>$job->id]) }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <span class="tim-icons icon-trash-simple"></span>Delete {{$job->id}} </a>
                                    <form id="logout-form" action="{{ route('job-category.destroy',['job_category' => $job->id]) }}" method="POST" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form> --}}

                                    <a href="{{ route('job-category.destroy', ['job_category' => $job->id]) }}" onclick="ddd()" class="dropdown-item"><span class="tim-icons icon-trash-simple"></span>Delete</a>
                                    <form id="customdd" action="" method="post" style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if(session()->has('success'))
        @push('js')
        <script>
            demo.successAlert('top','center', 2)
        </script>
        @endpush
        @endif
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
