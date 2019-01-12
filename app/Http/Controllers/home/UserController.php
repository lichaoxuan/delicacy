<?php

namespace App\Http\Controllers\home;

use App\Detail;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //个人中心
    public function my_center(){
        $details=Detail::find(Auth::id());

        return view("home\user\my_center",compact("details"));
    }
    //个人中心内容修改
    public function my_center_cont(Request $request){
        $details=Detail::find(Auth::id());
        $details->phone=$request->phone;
        $details->user_id=$request->user_id;
        $details->sex=$request->sex;
        $details->age=$request->age;
        $details->save();
        $users=\Auth::user();
        $users->name=$request->name;
        $users->save();
        return view("home/user/my_center",compact("details"));
    }
    //上传头像
    public function save_icon(Request $request){
        $path=base_path("public\images\author\\");
        $details=Detail::find(\Auth::id());
        $old_icon = $path.$details->photo;
        $exist = $details->photo;  // 原头像是否存在

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');  //获取UploadFile实例
            if ( $file->isValid()) { //判断文件是否有效

                //上传图片
                $ext = $file->getClientOriginalExtension(); //扩展名
                $file_name = time() . "." . $ext;    //重命名
                $res=$file->move($path, $file_name); //移动至指定目录

                // 保存新图

                $details->photo= $file_name;
                $details->save();
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
