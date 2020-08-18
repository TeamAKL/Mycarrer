@extends('layouts.app', ['page' => __('Add Blog Post'), 'pageSlug' => 'blog-create'])
@section('content')
@if(session('success'))
<div class="alert alert-success alert-with-icon" data-notify="container">
    <button type="button" aria-hidden="true" class="close" data-dismiss="alert" aria-label="Close">
        <i class="tim-icons icon-simple-remove"></i>
    </button>
    <span data-notify="icon" class="tim-icons icon-bell-55"></span>
    <span data-notify="message">{{session('success')}}</span>
</div>
@endif
<div class="card">
    <div class="card-header">
        <h4>Create Blog Post</h4>
    </div>
    <div class="card-body">
        <form action="{{url('blog')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Blog Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Blog Content</label>
                <textarea class="form-control" id="content" name="content" rows="10" placeholder="Enter content"></textarea>
            </div>
            <div class="form-group">
                <label for="video">Embed Video</label>
                <input type="text" class="form-control" id="video" name="video" placeholder="Enter Embed Link">
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="blog_image" name="blog_image">
                    <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Add Blog</button>
        </form>
    </div>
</div>
@endsection
@push('stylesheet')
    <style>
        textarea#content {
            border: 1px solid #2b3553 !important;
            border-radius: 0.4285rem;
        }
    </style>
@endpush
