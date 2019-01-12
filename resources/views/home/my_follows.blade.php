@extends("layouts/public")
@section('title')
    我的收藏
@endsection
<!--Header section end-->
@section('main')

    
    <!--Page Banner Area Start-->
    <div class="page-banner-area" style="background-image: url({{asset('images/bg/page-bg.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                        <h1>KINGS OF THE <br> WARRIORS</h1>
                        <a class="df-btn" href="#">Buy now</a>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog List Left Sidebar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
    <!--Blog Area Start-->
    <div class="blog-list-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-xs-50">
        <div class="container">
            <div class="row row-25">
                <div class="col-lg-8 order-lg-2 order-1">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-12">
                            <!--Single Blog Post Start-->
                            <div class="single-blog-post blog-list mb-30">

                                <div class="blog-img">
                                    <a href="/detail/{{$post->id}}"><img src="{{asset('images/blog/blog-list1.jpg')}}" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="/detail/{{$post->id}}">latest version of angry birds released in 2019</a></h3>
                                    <p>{!!str_limit($post->content,10,"...<a href='/detail/$post->id' style='color:blue;'>查看更多</a>")!!}</p>
                                    <div class="blog-bottom">
                                        <ul class="meta meta-border-bottom">
                                            <li><a href="#">{{$post->user->name}}</a></li>
                                            <li>{{$post->created_at->toFormattedDateString()}}</li>
                                            <li><a href="#">{{$post->replies->count()}} Comments</a></li>
                                        </ul>
                                    </div>
                                    <p><a href="/unfollow/{{$post->id}}" style="color: red">取消收藏</a></p>
                                </div>
                            </div>
                        <!--Single Blog Post End-->
                        </div>
                        @endforeach


                    </div>
                    <div class="row" style="margin-bottom: 50px">
                        <div class="col-12">
                            <div class="blog-pagination text-center">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1 order-2">
                    <div class="sidebar-area mt-sm-55 mt-xs-50">
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>我的收藏</h3>
                            <div class="single-featured-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="{{asset('images/banner/sidebar-banner1.jpg')}}" alt=""></a>
                                    <a class="game-title" href="#">the killer</a>
                                </div>
                            </div>
                            <div class="single-featured-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="{{asset('images/banner/sidebar-banner2.jpg')}}" alt=""></a>
                                    <a class="game-title" href="#">muscle cars</a>
                                </div>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>follow us</h3>
                            <div class="sidebar-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="icofont-youtube-play"></i></a></li>
                                    <li><a class="instagram" href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="icofont-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection