@extends('layouts.public')
@section('title')
    个人中心
@endsection

<!--Header section start-->

<!--Header section end-->
@section("main")
    <div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
        <div class="container">
            <div class="row">
                <!-- Login -->
                <div class="col-md-6 col-12 d-flex">
                    <div class="gilbard-login">
                        <h3>个人中心</h3>
                        <!-- Login Form -->
                        <form method="POST" action="/user/my_center_cont">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-12 mb-30 ">
                                    昵称：<input  type="text" name="name" >
                                    <input type="hidden" name="user_id" value="{{Auth::id()}}">
                                </div>

                                <div class="col-12 mb-30 ">
                                    年龄：<input  type="text" name="age" required >
                                </div>
                                <div class="col-12 mb-30">
                                    电话：<input  type="text" name="phone" required >
                                </div>
                                <div class="col-12 mb-30">
                                    性别：<input style="width: 30px" type="radio" checked name="sex" value="m"  >男
                                    <input style="width: 30px" type="radio" name="sex" value="w" >女
                                </div>
                                <div class="col-12"><input type="submit" value="提交"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-1 col-12 d-flex">
                    <div class="login-reg-vertical-boder"></div>
                </div>
                <!-- Login With Social -->
                <div class="col-md-5 col-12 d-flex">

                    <h3>头像修改</h3>
                    <div style="margin-top: 100px">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div>
                                    <img class="img-responsive img-circle" style="width: 50px;height: 50px;" @if($details!="") src="/images/author/{{$details->photo}}" @else src="/images/author/forum-author1.png" @endif alt="">
                                </div>
                                <form method="POST" action="#" enctype="multipart/form-data" >
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="exampleInputFile">上传头像</label></br>
                                        <input type="file" id="exampleInputFile" name="photo">
                                        <p class="help-block">请选择jpg格式的文件</p>
                                    </div>
                                    <button type="submit" class="btn btn-default btn-info">上传</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection