@extends('layouts.master')
@section('content')
<div class="fh5co-blog">
        <div class="row">
            @foreach($blogs as $blog)
            <div class="col-lg-4 col-md-4">
                <div class="fh5co-blog animate-box">
                    @if(isset($blog->blog_image))
                    <a href="{{'blog/'.$blog->id}}" class="blog-img-holder" style="background-image: url(images/blog/{{$blog->blog_image}});"></a>
                    @else
                    {!!$blog->video!!}
                    @endif
                    <div class="blog-text">
                        <h3 ><a href="{{'blog/'.$blog->id}}">{{$blog->title}}</a></h3>
                        <span class="posted_on">{{$blog->created_at->format('d-M-Y')}}</span>
                        <p>{{Str::limit($blog->content,350)}}...</p>
                        <a href="{{'blog/'.$blog->id}}" class="btn btn-second btn-full">Detail</a>
                    </div> 
                </div>
            </div>
            @endforeach

            <div class="new-blog col-lg-12 col-md-12">
                <a href="{{'/blog/create'}}" type="button" class="btn btn-lg btn-success" id="newblog-btn">CREATE NEW BLOG</a>
            </div>
        </div>
    </div>
@endsection
@push('css')
  <style>
    .fh5co-blog {
        margin-bottom: 30px;
        width: 100%;
        float: left;
        padding:15px;
        }
        @media screen and (max-width: 768px) {
        .fh5co-blog {
            width: 100%;
        }
        }
        .fh5co-blog .blog-img-holder {
        display: block;
        background-size: cover;
        background-position: top center;
        background-repeat: no-repeat;
        position: relative;
        height: 270px;
        }
        .fh5co-blog iframe {
        display: block !important;
        background-size: cover !important;
        background-position: top center !important;
        background-repeat: no-repeat !important;
        position: relative !important;
        height: 270px !important;
        width:100%;
        }
        .fh5co-blog .blog-text {
        position: relative;
        background: rgba(0, 0, 0, 0.03);
        width: 100%;
        padding: 30px;
        float: left;
        }
        .fh5co-blog .blog-text span {
        font-size: 12px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        display: inline-block;
        margin-bottom: 20px;
        }
        .fh5co-blog .blog-text h3 {
        font-size: 20px;
        margin-bottom: 20px;
        line-height: 1.5;
        }
        .fh5co-blog .blog-text h3 a {
        color: black;
        }
        .fh5co-blog .blog-text .btn-blog {
        background: transparent;
        border: 2px solid rgba(0, 0, 0, 0.8);
        color: rgba(0, 0, 0, 0.8);
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        -ms-border-radius: 0;
        border-radius: 0;
        }
        .fh5co-blog .blog-text .btn-blog:hover {
        color: #fff !important;
        }
        .btn {
            display: inline-block;
            padding: 6px 20px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            touch-action: manipulation;
            cursor: pointer;
            user-select: none;
        }

        
        .btn-second {
            background: #159ed9;
            border-radius: 15px;
            color: #fff;
            text-transform: uppercase;
        }
        .btn-second:hover{
            opacity: 0.7;
        }
        .new-blog{
            background-color: gainsboro;
            height: 70px;
            border-bottom: 1px solid black;

        }
        #newblog-btn{
            margin-top: 15px;
            padding: 10px 20px;
        }
    </style>
@endpush