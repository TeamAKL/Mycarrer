@extends('layouts.master')
@section('content')
  <div class="container">
    <form action="{{url('blog/update')}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
        <input type="hidden" name="id" id="id" value="{{$blog->id}}">
        <div class="form-group">
            <label for="title">Blog Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$blog->title}}">
        </div>
        <div class="form-group">
            <label for="content">Blog Content</label>
            <textarea class="form-control" id="content" name="content" rows="10"> {{$blog->content}}</textarea> 
        </div>
        <div class="form-group">
            <label for="video">Embed Video</label>
            <input type="text" class="form-control" id="video" name="video" value="{{$blog->video}}">
        </div>
        <div class="form-group">
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="blog_image" name="blog_image" value="{{$blog->blog_image}}">
                <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Edit Blog</button>
    </form>
  </div>
@endsection
@push('css')
<style>
    .btn-primary{
        margin-bottom:10px;
        padding:7px 15px;
    }
</style>
@endpush