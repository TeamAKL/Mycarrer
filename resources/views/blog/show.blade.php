@extends('layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="animate-box col-lg-8 col-md-8 col-sm-12">
            @if(isset($blog->blog_image))
            <img src="/images/blog/{{$blog->blog_image}}" alt="" class="blog-img">
            @else
            {!!$blog->video!!}
            @endif
            <!-- <iframe class="blog-img" src="https://www.youtube.com/" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>

        <div class="careerfy-author-detail col-lg-4 col-md-4 col-sm-12">
            <div class="detail-title"><h3>About the Author</h3></div>
            <figure class="blog-profile">
                <a href=""><img src="{{asset('images/MCM-01.jpg')}}" alt=""></a>
            </figure>
            <div class="detail-content">
                <div class="post-by">By <a href="">MyCareers</a>
                </div>
                <time datetime="">{{$blog->created_at->format('d-M-Y')}}</time>
            </div>
        </div>
        <div class="blog-text col-lg-12 col-md-12 col-sm-12">
            <h3><a href="#">{{$blog->title}}</a></h3>
            <div class="all-blog"><a href="{{'/blog'}}">ALL BLOGS</a></div>
            <span class="posted_on">{{$blog->created_at->format('d-M-Y')}}</span>
            <p>{{$blog->content}}</p>
        </div>
        @guest
        @else
        @if( Auth::user()->role_id == 47)
        <div class="new-blog col-lg-12 col-md-12">
            <a href="{{'/blog/edit/'.$blog->id}}" type="button" class="btn btn-md btn-primary" id="edit-btn">Edit Blog</a>
            <a href="{{'/blog/del/'.$blog->id}}" type="button" class="btn btn-md btn-danger" id="del-btn">Delete Blog</a>
        </div>
        @endif
        @endguest

    </div>
</div>
@endsection
@push('css')
<style>
    *{
        box-sizing: border-box;
    }
    .container-fluid {
        margin-right: auto;
        margin-left: auto;
    }

    .container-fluid .blog-img {
        display: block;
        float: left;
        width: 100%;
        height: 400px;
        margin: 0;
        margin: 15px auto;
    }
    .container-fluid iframe{
        display: block !important;
        float: left !important;
        width: 100% !important;
        height: 400px !important;
        margin: 0 !important;
        margin: 15px auto !important;
    }

    .container-fluid .blog-text {
        position: relative;
        background: rgba(0, 0, 0, 0.03);
        width: 100%;
        padding: 20px;
        float: left;
    }
    .container-fluid .blog-text span {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        display: inline-block;
        margin-bottom: 20px;
    }
    .container-fluid .blog-text h3 {
        font-size: 20px;
        margin-bottom: 10px;
        line-height: 1.5;
    }
    .container-fluid .blog-text h3 a {
        color: black;
    }
    .container-fluid .blog-text .btn-blog {
        background: transparent;
        border: 2px solid rgba(0, 0, 0, 0.8);
        color: rgba(0, 0, 0, 0.8);
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        border-radius: 0;
    }
    .container-fluid .blog-text .btn-blog:hover {
        color: #fff !important;
    }
    .careerfy-author-detail {
        float: left;
        background-color: #f4f4f4;
        text-align: center;
        padding: 12px 0;
        margin:15px auto;
        height: 400px;
    }
    .blog-profile a img{
        width: 250px;
        height: 150px;
        padding: 2px;
        border-radius: 50%;
        border: 1px solid gainsboro;

    }
    @media only screen and (max-width: 768px) {
        .container-fluid .blog-text{
            margin-left:15px;
            margin-right:15px;
            margin-bottom:10px;
        }
        .container-fluid .blog-img{
            height: 300px;
        }
        .container-fluid iframe{
            display: block !important;
            float: left !important;
            width: 100% !important;
            height: 300px !important;
            margin: 0 !important;
            margin: 15px auto !important;
        }
        .careerfy-author-detail{
            height: 250px;
            margin-top:0;
            margin-bottom:10px;
            margin-left:15px;
            margin-right:15px;
        }
    }
    .new-blog{
        background-color: gainsboro;
        height: 70px;
        border-bottom: 1px solid black;

    }
    #edit-btn,#del-btn{
        margin-top: 10px;
        padding: 10px 20px;
        margin-left:5px;
        color:white;
    }
    .all-blog{
        margin-bottom:5px;
    }
</style>
@endpush
