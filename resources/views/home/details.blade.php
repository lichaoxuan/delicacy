@extends("layouts/public")
@section('title')
    文章详情页
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
                            <li>Blog</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
    <!--Blog Area Start-->
    <div class="blog-details-area section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-xs-50">
        <div class="container">
            <div class="row row-25">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-details">
                                <div class="blog-img">
                                    <a href="javascript:;"><img @if($post->title_pic!="") src='{{asset("images/forum/$post->title_pic")}}' @else src="{{asset('images/blog/blog-details-1.jpg')}}" @endif alt=""></a>
                                    <div class="meta-box">
                                        <ul class="meta meta-border-bottom">
                                            <li><a href="#">{{$post->user_id}}</a></li>
                                            <li>{{$post->created_at}}</li>
                                            <li><a href="#">25 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <h3>{{$post->title}}</h3>
                                    <div>{!!$post->content!!}</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="blog-comment-wrap col">
                            <h4>评论</h4>

                            <ul class="comment-list">
                                @if($replies)
                                    @foreach($replies as $reply)
                                        <li>
                                            <div class="single-comment">
                                                <div class="image"><img src="{{asset('images/forum/comment-1.jpg')}}" alt=""></div>
                                                <div class="content">
                                                    <h5>sannai smith</h5>
                                                    <div class="review-date">
                                                        <span>30 Janurary, 2018</span>
                                                        <a href="#" class="reply">Reply</a>
                                                    </div>
                                                    <p>{{$reply->content}}</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                @else
                                    <li>
                                        <div class="single-comment">
                                            <div class="image"><img src="{{asset('images/blog/comment-1.jpg')}}" alt=""></div>
                                            <div class="content">
                                              该文章暂时没有回复
                                            </div>
                                        </div>
                                    </li>
                               @endif
                            </ul>
                            <h4>发表评论</h4>
                            <form action="/reply" class="comment-form" method="post">
                                {{csrf_field()}}
                                <div class="row">

                                    <div class="col-12 mb-30">   
                                        <textarea name="content" placeholder="请输入内容"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <input type="submit" value="提交">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-sm-60 mt-xs-50">
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>featured games</h3>
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
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>popular/recomended</h3>
                            <div class="popular-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="{{asset('images/banner/sidebar-banner3.jpg')}}" alt=""></a>
                                </div>
                                <div class="game-content">
                                    <h3><a href="#">Splinter cell</a></h3>
                                    <span>pc/xbox/ps4</span>
                                </div>
                            </div>
                            <div class="popular-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="{{asset('images/banner/sidebar-banner4.jpg')}}" alt=""></a>
                                </div>
                                <div class="game-content">
                                    <h3><a href="#">battle field 4</a></h3>
                                    <span>pc/xbox/ps4</span>
                                </div>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>recent post</h3>
                            <div class="sidebar-rc-post">
                                <ul>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="{{asset('images/rc-img/rc-img1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">latest update of the new version</a></h3>
                                            <div class="widget-date">05 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="{{asset('images/rc-img/rc-img2.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">Crew in the earth get new season</a></h3>
                                            <div class="widget-date">08 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="{{asset('images/rc-img/rc-img3.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">secrect code for the Mortal Kombat 4</a></h3>
                                            <div class="widget-date">05 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="{{asset('images/rc-img/rc-img4.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">need for speed have new challenge</a></h3>
                                            <div class="widget-date">02 November, 2018</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <div class="sidebar-banner">
                                <a href="#"><img src="{{asset('images/banner/banner2.jpg')}}" alt=""></a>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget">
                            <h3>follow us</h3>
                            <div class="sidebar-instagram">
                                <ul>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram1.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram2.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram3.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram4.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram5.jpg')}}" alt=""></a></li>
                                    <li><a href="#"><img src="{{asset('images/instagram/instagram6.jpg')}}" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Blog Area End-->
    
    <!--Projects section start-->
    <div class="newslatter-section newslatter-section-tow section pt-5 pt-lg-0 pt-sm-0 pt-xs-0 pb-xs-50">
        <div class="container">
           
            <div class="row">
               <div class="col-12">
                   <!--News Latter Area Start-->
                   <div class="news-latter-area newslatter-black">
                       <div class="news-latter-box">
                           <h3>SUBSCRIBE OUR NEWSLETTER, GET ALL <br> LATEST NEWS, UPDATE, VIDEOS AND OFFERS </h3>
                           <form action="#">
                               <input type="text" placeholder="Enter your email here">
                           </form>
                       </div>
                   </div>
                   <!--News Latter Area End-->
               </div> 
            </div>
            
        </div>
        
    </div>
    <!--Projects section end-->
    @endsection
   