<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;


class BlogController extends Controller
{
    public function create()
    {
        return view('blog.post');
    }
    public function store(Request $request){
        
        if($request->hasFile('blog_image')){
            $blog_image = $request->file('blog_image');
            $blog_name = uniqid().'-'.$blog_image->getClientOriginalName();
            $request->blog_image->storeAs('blog', $blog_name, 'my_upload');
            } else {
            
                    $blog_name = null;
            }
        // dd($blog_name);
        Blog::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'video'=>$request->video,
            'blog_image'=>$blog_name
           
        ]);
        return redirect('blog');
    }
    public function index()
    {
        $blogs=Blog::all();
        return view('blog.index',compact('blogs',$blogs));
        // return view('blog/index');
    }
    public function show($id)
    {
        //  return view('blog/show');
        $blog=Blog::findOrFail($id);
        return view('blog.show',['blog'=>$blog]);
    }
    public function edit($id){
        $blog=Blog::findOrFail($id);
        return view('blog.edit',['blog'=>$blog]);
    }
    public function update(Request $request)
    {
        if($request->hasFile('blog_image')){
            $blog_image = $request->file('blog_image');
            $blog_name = uniqid().'-'.$blog_image->getClientOriginalName();
            $request->blog_image->storeAs('blog', $blog_name, 'my_upload');
        }else{
            $blog_name = null;
        }
    //    dd($blog_name);
       $blog=Blog::find($request->id);
       $blog->title=$request->title;
       $blog->content=$request->content;
       $blog->video=$request->video;
       $blog->blog_image=$blog_name;
       $blog->save();
       return redirect('blog');
    }
    public function delete($id)
    {
       $blog=Blog::find($id)->delete();
       return redirect('blog');
    }
}
