@extends('layouts.public')

@section('title')
    正在注册..
@endsection

@section('main')
<!--Login Section Start-->
<div class="login-section section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45">
    <div class="container">
        <div class="row">

            <!-- Login -->
            <div class="col-md-6 col-12 d-flex">
                <div class="gilbard-login">
                    <h3>注册账号</h3>
                    <!-- Login Form -->
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12 mb-30 {{ $errors->has('name') ? ' has-error' : '' }}">
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus placeholder="请输入昵称">
                            </div>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                            <div class="col-12 mb-30 {{ $errors->has('email') ? ' has-error' : '' }}">
                                <input id="email" type="email" name="email" value="{{ old('email') }}" required placeholder="请输入邮箱">
                            </div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <div class="col-12 mb-30 {{ $errors->has('password') ? ' has-error' : '' }}">
                                <input id="password" type="password" name="password" required placeholder="请输入密码">
                            </div>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="col-12 mb-30"><input id="password-confirm" type="password" name="password_confirmation" required placeholder="请确认密码"></div>

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
                <div class="gilbard-social-login">
                    <h3>已有账号？去登陆</h3>
                    <a href="/login" class="facebook-login">邮箱登录 <i class="fa fa-facebook"></i></a>
                    <a href="javascript:;" class="twitter-login">微信登录 <i class="fa fa-twitter"></i></a>
                    <a href="javascript:;" class="google-plus-login">QQ登录<i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Login Section End-->

@endsection
