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

