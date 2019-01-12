@extends('layouts.public')
@section('title')
    首页
@endsection

<!--Header section start-->

<!--Header section end-->
@section("main")
    <!--slider section start-->
    <div class="hero-section section position-relative">
        <div class="hero-slider">
            <!--Hero Item start-->
            <div class="hero-item hero-item-2" style="background-image: url(images/backgrounds/0.jpg)">
                <div class="container container-1520">
                    <div class="row">
                        <div class="col-12">

                            {{--<!--Hero Content start-->--}}
                            {{--<div class="hero-content">--}}
                                {{--<h1>劲爆美食</h1>--}}
                                {{--<h2>与你一起分享！</h2>--}}
                                {{--<a class="df-btn" href="#">Buy now</a>--}}
                            {{--</div>--}}
                            {{--<!--Hero Content end-->--}}

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
            <!--Hero Item start-->
            <div class="hero-item hero-item-2" style="background-image: url(images/backgrounds/1.jpg)">
                <div class="container container-1520">
                    <div class="row">
                        <div class="col-12">

                            <!--Hero Content start-->
                            <div class="hero-content">
                                <h1>吃货的部落</h1>
                                <h2>欢迎你的加入</h2>
                                <a class="df-btn" href="#">加入我们</a>
                            </div>
                            <!--Hero Content end-->

                        </div>
                    </div>
                </div>
            </div>
            <!--Hero Item end-->
        </div>
    </div>
    <!--slider section end-->

    <!--Featured section start-->
    <div class="featured-section section pb-95 pb-lg-75 pb-md-65 pb-sm-55 pb-xs-45">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-12">
                    <!--Featured Title Start-->
                    <div class="featured-title">
                        <h2>中国※名菜</h2>
                        <a href="#">查看所有菜系</a>
                    </div>
                    <!--Featured Title End-->
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-12">
                    <div class="featured-slide">
                        @foreach(\App\Type::all() as $type)
                        <div class="single-featured img-full">
                            <a href="#"><img src="images/feature/{{$type->logo}}" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Featured section end-->

    <!--New Game Area Start-->
    <div class="new-game-area section pb-50 pb-lg-30 pb-md-20 pb-sm-10 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Section Title Start-->
                    <div class="section-title">
                        <h2><span class="color-blue">美食</span> 推荐</h2>
                    </div>
                    <!--Section Title End-->
                </div>
            </div>
            <div class="row game-slide">
                @foreach(\App\Findfood::all() as $finds)
                <div class="col-4">
                    <!--Single Game Start-->
                    <div class="single-game mb-50">
                        <div class="game-img">
                            <a href="javascript:;"><img src="images/game/{{$finds->photo}}" alt=""></a>
                        </div>
                        <div class="game-content">
                            <h4><a href="javascript:;">{{$finds->name}}</a></h4>
                            <span>{{$finds->type->name}}</span>
                        </div>
                    </div>
                    <!--Single Game End--><!--Single Game Start-->
                    <div class="single-game mb-50">
                        <div class="game-img">
                            <a href="javascript:;"><img src="images/game/{{$finds->photo}}" alt=""></a>
                        </div>
                        <div class="game-content">
                            <h4><a href="javascript:;">{{$finds->name}}</a></h4>
                            <span>{{$finds->type->name}}</span>
                        </div>
                    </div>
                    <!--Single Game End-->
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--New Game Area End-->

    <!--Video section start-->
    <div class="video-section section pb-135 pb-lg-115 pb-md-105 pb-sm-95 pb-xs-85">
        <div class="container-fluid p-0">
            <div class="row no-gutters align-items-end">
                <div class="col-12">
                    <div class="video-slider-active">
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-01.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i>查看视频教程</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-02.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i>查看视频教程</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-03.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i>查看视频教程</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-04.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i> 查看视频教程</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-01.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i> 查看视频教程</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-02.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>大厨教你做美食</h3>
                                    <a class="video-popup" href="/video/meishi.mp4"><i class="icofont-play-alt-2"></i> 查看视频教程</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Video section start-->

    <!--Games Review Section Start-->
    <div class="games-review-section section pb-105 pb-lg-85 pb-md-20 pb-sm-65 pb-xs-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!--Section Title Start-->
                    <div class="section-title">
                        <h2><span class="color-blue">美食</span> 预定</h2>
                    </div>
                    <!--Section Title End-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!--News Latter Area Start-->
                    <div class="news-latter-area">
                        <div class="news-latter-box">
                            <h3>这里<span class="color-blue">可以</span> <br> 预定 <span class="color-red">所有的</span> 美食 <br> 快来预定吧~~~</h3>
                            <form action="#">
                                <input type="email" placeholder="请输入邮箱">
                            </form>
                        </div>
                        <div class="news-latter-banner-image">
                            <img src="images/news-latter/news-banner.png" alt="">
                        </div>
                    </div>
                    <!--News Latter Area End-->
                </div>
            </div>
        </div>
    </div>
    <!--Games Review Section Start-->


@endsection