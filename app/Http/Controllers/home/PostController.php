<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Reply;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    //文章列表页
    public function index(){
        $posts = Post::orderBy("created_at",'desc')->paginate(5);
//        dd($posts->toArray());
        return view('home/blogList',compact("posts"));
    }
    //文章详情
    public function todetail($id){
        $post = Post::find($id);
        $replies = $post->replies;
//        dd($posts);
//        dd($replies->toArray());
        return view('home/details',compact("post","replies"));
    }
//发布日志
    public function create_blog(){

        return view('home/blog_create');
    }
//存储日志
    public function store(Request $request){

//        dd($request->toArray());
        $request->except("_token","files");
        $data = $request->all();
        $data["user_id"] = 1;

        Post::create($data);

        return redirect("/blogList");
//        dd($request->toArray());

    }
    //回复
    public function reply(Request $request){

//        dd($request->all());

        $request->except("_token");
        $data = $request->all();
        $data["user_id"] = 1;
        $data["post_id"] = 83;

        Reply::create($data);

        return back();
    }
    //我的文章
    public function my_blog(){
        $id=Auth::id();
        $posts = Post::where("user_id",$id)->orderBy("created_at",'desc')->paginate(5);

        return view("home/my_blog",compact("posts"));
    }


}
