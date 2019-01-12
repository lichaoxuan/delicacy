<?php

namespace App\Http\Controllers\home;

use App\Findfood;
use App\Reserve;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodsController extends Controller
{
    //发现美食
    public function find_foods(){

        return view("/home/find_foods");
    }
    //上传美食内容
    public function get_find_foods(Request $request){
        $file = $request->file('photo');
        $path=base_path("public\images\game\\");
        $data = $request->except("_token");


        if ( $file->isValid()) { //判断文件是否有效

            //上传图片
            $ext = $file->getClientOriginalExtension(); //扩展名
            $file_name = time() . "." . $ext;    //重命名
            $res=$file->move($path, $file_name); //移动至指定目录
            $data["photo"]= $file_name;
        }

        Findfood::create($data);
        return view("/home/find_foods");
    }
    //加载美食预定页面
    public function reserve(){

        return view("/home/reserves");
    }
    //美食预定
    public function get_reserve(Request $request){
        //dd($request->toArray());
        $data = $request->except("_token");

       Reserve::create($data);
        return view("/home/reserves");

    }

}
