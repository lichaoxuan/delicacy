<?php

namespace App\Http\Controllers\home;

use App\Detail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //个人中心
    public function my_center(){

        return view("home\user\my_center");
    }

    //个人中心内容修改
    public function my_center_cont(Request $request){

        $details=\Auth::Detail();
        return view("user/my_center",compact("details"));



    }
    //设置头像
    public function set_icon(){
        $details=\Auth::Detail();
        return view("user/my_center",compact("details"));
    }
    //上传头像
    public function save_icon(Request $request){
        $path=base_path("public\images\author\\");
        $old_icon = $path.\Auth::Detail()->photo;
        $exist = \Auth::Detail()->photo;  // 原头像是否存在

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');  //获取UploadFile实例
            if ( $file->isValid()) { //判断文件是否有效

                //上传图片
                $ext = $file->getClientOriginalExtension(); //扩展名
                $file_name = time() . "." . $ext;    //重命名
                $res=$file->move($path, $file_name); //移动至指定目录

                // 保存新图
                $user=Detail::find(\Auth::id());
                $user->photo= $file_name;
                $user->save();
//
//                // 删除原图
                if($exist){
                    unlink($old_icon);
                }
            }
        }

        return redirect("user/my_center");

    }


}
