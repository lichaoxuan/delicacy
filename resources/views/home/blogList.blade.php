@extends("layouts/public")
@section('title')
    文章列表页
@endsection
    <!--Header section end-->
    @section("main")
    <!--Page Banner Area Start-->
    <div class="page-banner-area" style="background-image: url(images/bg/page-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="page-content text-center">
                        <h1>KINGS OF THE <br> WARRIORS</h1>
                        <a class="df-btn" href="#">Buy now</a>
                        <ul class="page-breadcrumb">
                            <li><a href="index.html">Home</a></li>
                            <li>Blog List</li>
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
                <div class="col-lg-8">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="col-12">
                            <!--Single Blog Post Start-->
                            <div class="single-blog-post blog-list mb-30">
                                <div class="blog-img">
                                    <a href="/detail/{{$post->id}}"><img src="images/blog/blog-list1.jpg" alt=""></a>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="/detail/{{$post->id}}">{{$post->title}}</a></h3>
                                    <p>{!!str_limit($post->content,100,"...<a href='/detail/$post->id'>查看更多</a>")!!}</p>
                                    <div class="blog-bottom">
                                        <ul class="meta meta-border-bottom">
                                            <li><a href="#">Smith</a></li> 
                                            <li>{{$post->created_at}}</li>
                                            <li><a href="#">25 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--Single Blog Post End-->
                        </div>
                        @endforeach

                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="blog-pagination text-center">
                                {{$posts->links()}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-sm-55 mt-xs-50">
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget mb-45">
                            <h3>featured games</h3>
                            <div class="single-featured-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="images/banner/sidebar-banner1.jpg" alt=""></a>
                                    <a class="game-title" href="#">the killer</a>
                                </div>
                            </div>
                            <div class="single-featured-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="images/banner/sidebar-banner2.jpg" alt=""></a>
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
                                    <a href="#"><img src="images/banner/sidebar-banner3.jpg" alt=""></a>
                                </div>
                                <div class="game-content">
                                    <h3><a href="#">Splinter cell</a></h3>
                                    <span>pc/xbox/ps4</span>
                                </div>
                            </div>
                            <div class="popular-game mb-20">
                                <div class="game-img">
                                    <a href="#"><img src="images/banner/sidebar-banner4.jpg" alt=""></a>
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
                                            <a href="#"><img src="images/rc-img/rc-img1.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">latest update of the new version</a></h3>
                                            <div class="widget-date">05 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="images/rc-img/rc-img2.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">Crew in the earth get new season</a></h3>
                                            <div class="widget-date">08 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="images/rc-img/rc-img3.jpg" alt=""></a>
                                        </div>
                                        <div class="rc-post-content">
                                            <h3><a href="#">secrect code for the Mortal Kombat 4</a></h3>
                                            <div class="widget-date">05 November, 2018</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rc-post-thumb">
                                            <a href="#"><img src="images/rc-img/rc-img4.jpg" alt=""></a>
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
                                <a href="#"><img src="images/banner/banner2.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--Single Sidebar Widget End-->
                        <!--Single Sidebar Widget Start-->
                        <div class="single-sidebar-widget">
                            <h3>follow us</h3>
                            <div class="sidebar-instagram">
                                <ul>
                                    <li><a href="#"><img src="images/instagram/instagram1.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/instagram2.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/instagram3.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/instagram4.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/instagram5.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="images/instagram/instagram6.jpg" alt=""></a></li>
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
    <div class="newslatter-section newslatter-section-tow section pt-5 pt-lg-0 pt-sm-0 pb-xs-50">
        <div class="container">
           
            <div class="row">
               <div class="col-12">
                   <!--News Latter Area Start-->
                   <div class="news-latter-area newslatter-black" style="margin-bottom: 50px">
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

