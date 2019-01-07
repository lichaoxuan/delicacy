<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Reply;


class PostController extends Controller
{
    //
    public function index(){

        $posts = Post::orderBy("created_at",'desc')->paginate(5);
//        dd($posts->toArray());
        return view('home/blogList',compact("posts"));
    }
    public function todetail($id){


        $post = Post::find($id);
        $replies = $post->replies;
//        dd($posts);
//        dd($replies->toArray());
        return view('home/details',compact("post","replies"));
    }

    public function create_blog(){

        return view('home/blog_create');
    }

    public function store(Request $request){

//        dd($request->toArray());
        $request->except("_token","files");
        $data = $request->all();
        $data["user_id"] = 1;

        Post::create($data);

        return redirect("/blogList");
//        dd($request->toArray());

    }
    public function reply(Request $request){

//        dd($request->all());

        $request->except("_token");
        $data = $request->all();
        $data["user_id"] = 1;
        $data["post_id"] = 83;

        Reply::create($data);

        return back();
    }
}
