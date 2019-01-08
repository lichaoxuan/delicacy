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
                                <img src="images/video/video-front1.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-front3.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-front2.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-front4.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-front1.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
                                </div>
                            </div>
                        </div>
                        <div class="single-video">
                            <div class="video-img video-img-2">
                                <img src="images/video/video-front4.jpg" alt="">
                                <div class="video-content content-center">
                                    <h3>The Magician 3</h3>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=BjiaMBk6rHk"><i class="icofont-play-alt-2"></i> view demo</a>
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
                        <h2><span class="color-blue">Games</span> review</h2>
                    </div>
                    <!--Section Title End-->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!--Single Games Review Start-->
                    <div class="single-games-review mb-50">
                        <div class="review-img">
                            <a href="games-details.html"><img src="images/review/review1.jpg" alt=""></a>
                        </div>
                        <div class="review-content">
                            <h4><a href="games-details.html">the elder scroll</a></h4>
                            <span>rating: 9.9</span>
                            <p>The Elder Scroll is the most popular are ames that your can Latest Mega 2019 games offer you ioous league and also alow you to make youe and smile</p>
                        </div>
                    </div>
                    <!--Single Games Review End-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Single Games Review Start-->
                    <div class="single-games-review mb-50">
                        <div class="review-img">
                            <a href="games-details.html"><img src="images/review/review2.jpg" alt=""></a>
                        </div>
                        <div class="review-content">
                            <h4><a href="games-details.html">the elder scroll</a></h4>
                            <span>rating: 9.9</span>
                            <p>The Elder Scroll is the most popular are ames that your can Latest Mega 2019 games offer you ioous league and also alow you to make youe and smile</p>
                        </div>
                    </div>
                    <!--Single Revent Games End-->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!--Single Games Review Start-->
                    <div class="single-games-review mb-50">
                        <div class="review-img">
                            <a href="games-details.html"><img src="images/review/review3.jpg" alt=""></a>
                        </div>
                        <div class="review-content">
                            <h4><a href="games-details.html">the elder scroll</a></h4>
                            <span>rating: 9.9</span>
                            <p>The Elder Scroll is the most popular are ames that your can Latest Mega 2019 games offer you ioous league and also alow you to make youe and smile</p>
                        </div>
                    </div>
                    <!--Single Games Review End-->
                </div>
            </div>
        </div>
    </div>
    <!--Games Review Section Start-->

    <!--Projects section start-->
    <div class="newslatter-section section pb-125 pb-lg-105 pb-md-70 pb-sm-85 pb-xs-50">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <!--News Latter Area Start-->
                    <div class="news-latter-area">
                        <div class="news-latter-box">
                            <h3>SUBSCRIBE OUR <span class="color-blue">NEWSLETTER</span> <br> GET ALL <span class="color-red">LATEST</span> NEWS, UPDATE, <br> <span class="color-blue">VIDEOS</span> AND OFFERS </h3>
                            <form action="#">
                                <input type="text" placeholder="Enter your email here">
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
@endsection