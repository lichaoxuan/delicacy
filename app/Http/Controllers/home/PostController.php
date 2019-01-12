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
//        dd($replies);
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

       // $request->except("_token","files");
        $file = $request->file('title_pic');
        $path=base_path("public\images\/forum\\");
        $data = $request->except("_token");
        if ( $file->isValid()) { //判断文件是否有效

            //上传图片
            $ext = $file->getClientOriginalExtension(); //扩展名
            $file_name = time() . "." . $ext;    //重命名
            $res=$file->move($path, $file_name); //移动至指定目录
            $data["title_pic"]= $file_name;
        }
        $data["user_id"] = Auth::user()->id;
        Post::create($data);

        return redirect("/blogList");
//        dd($request->toArray());

    }
    //回复
    public function reply(Request $request){

//        dd($request->all());

        $request->except("_token");
        $data = $request->all();
        $data["user_id"] = Auth::id();


        Reply::create($data);

        return back();
    }
    //我的文章
    public function my_blog()
    {
        $id = Auth::id();
        $posts = Post::where("user_id", $id)->orderBy("created_at", 'desc')->paginate(5);

        return view("home/my_blog", compact("posts"));
    }
    //收藏文章
    public function follow($id){
        //1 user_id;
        //2 venue_id
        //向user-post 追加记录
        // 收藏文章
        if(!Auth::id()){
            return back()->with('error','请先登录后收藏');
        }

        Auth::user()->posts()->attach($id);

        return redirect("/blogList");

    }

    public function unfollow($id){
        //取消收藏
        Auth::user()->posts()->detach($id);
//        return redirect("/venue/list");
        return back();

    }
    //条转到我的收藏
    public function my_follows(){
        //1 user_id

        $posts = Auth::user()->posts()->paginate(5);//不加小括号代表数据
        
//        dd($posts);
        return view("home/my_follows",compact("posts"));

    }


}
