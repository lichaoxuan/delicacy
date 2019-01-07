@extends('layouts.public')

@section('title')
    正在登录..
@endsection

@section('main')
<!--Login Section Start-->
<div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
    <div class="container">
        <div class="row">
            <!-- 登录 -->
            <div class="col-md-6 col-12 d-flex">
                <div class="gilbard-login">
                    <h3>登录您的账号</h3>
                    <!-- Login Form -->
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 mb-30"><input type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="请输入邮箱账号"></div>
                            <div class="col-12 mb-20"><input  type="password" class="form-control" name="password" required placeholder="请输入密码"></div>
                            <div class="col-12 mb-15">

                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="remember_me">
                                <label for="remember_me">记住密码</label>

                                <a href="{{ route('password.request') }}">忘记密码?</a>

                            </div>
                            <div class="col-12"><input type="submit" value="登录"></div>
                        </div>
                    </form>


                </div>
            </div>

            <div class="col-md-1 col-12 d-flex">

                <div class="login-reg-vertical-boder"></div>

            </div>

            <!-- Login With Social -->
            <div class="col-md-5 col-12 d-flex">

                <div class="gilbard-social-login">
                    <h3>您还可以使用其他方式登录</h3>
                    <a href="javascript:;" class="twitter-login">微信登录 <i class="fa fa-twitter"></i></a>
                    <a href="javascript:;" class="google-plus-login">QQ登录<i class="fa fa-google-plus"></i></a>

                    <h3>还没有账号？去注册</h3>
                    <a href="/register" class="facebook-login">注册账号 <i class="fa fa-facebook"></i></a>
                </div>

            </div>

        </div>
    </div>
</div>
<!--Login Section End-->
@endsection
