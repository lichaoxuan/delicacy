<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>美食 || @yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="{{asset("images/favicon.ico")}}" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/qanto.css')}}">
    <link rel="stylesheet" href="{{asset('css/bauhaus93.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/icofont.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/helper.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Modernizr JS -->
    <script src="{{asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body>

<div id="main-wrapper">


    <header class="header header-static bg-black header-sticky">
    <div class="default-header menu-right">
        <div class="container container-1520">
            <div class="row">

                <!--Logo start-->
                <div class="col-12 col-md-2 col-lg-1 order-md-1 order-lg-1 mt-20 mb-20">
                    <div class="logo" >
                        <a href="/"><img height="48px" src="{{asset('images/logo.png')}}" alt=""></a>
                    </div>
                </div>
                <!--Logo end-->

                <!--Menu start-->
                <div class="col-lg-7 col-12 order-md-3 order-lg-2 d-flex justify-content-center">
                    <nav class="main-menu menu-style-2">
                        <ul>
                            <li><a href="/">美食首页</a></li>
                            <li><a href="javascript:;">美食种类</a>
                                <ul class="sub-menu">
                                    @foreach(\App\Type::all() as $type)
                                    <li><a href="#">{{$type->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="/find_foods">发现美食</a></li>
                            <li><a href="/foods/reserve">美食预定</a></li>
                            <li><a href="javascript:;">美食日志</a>
                                <ul class="sub-menu">
                                    <li><a href="/create">发布美食文章</a></li>
                                    <li><a href="/blogList">美食文章列表</a></li>
                                </ul>
                            </li>
                            <li><a href="#">关于我们</a></li>
                        </ul>
                    </nav>
                </div>
                <!--Menu end-->

                <!--Header Right Wrap-->
                <div class="col-12 col-md-9 order-md-2 order-lg-3 col-lg-3 d-flex justify-content-center">
                    <div class="main-menu menu-style-2">
                        <ul>
                            @guest
                                <li><a href="{{ route('login') }}">登录</a></li>
                                <li><a href="{{ route('register') }}">加入我们</a></li>
                            @else
                                <li style="margin-right: 10px;padding-top: 20px">
                                    <a href="user/my_center" style="padding: 0"><img class="img-responsive" @if(Auth::User()->details[0]->photo!="") src="/images/author/{{Auth::User()->details[0]->photo}}" @else src="/images/author/forum-author1.png"  @endif style="height: 50px; border-radius: 50%"></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu sub-menu">
                                        <li><a href="/user/my_center">个人中心</a></li>
                                        <li><a href="/post/my_blog">我的文章</a></li>
                                        <li><a href="/my_follows">我的收藏</a></li>

                                        <li style="height: 40px">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                退出登录
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>

                                    </ul>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
                <!--Header Right Wrap-->

            </div>

            <!--Mobile Menu start-->
            <div class="row">
                <div class="col-12 d-flex d-lg-none">
                    <div class="mobile-menu"></div>
                </div>
            </div>
            <!--Mobile Menu end-->

        </div>
    </div>
</header>

    @yield('main')

    <footer class="footer-section style-2 section bg-theme" style="background-image: url(images/bg/footer.jpg)">

        <!--Footer Top start-->
        <div class="footer-top section pt-80 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40 pb-80 pb-lg-70 pb-md-60 pb-sm-15 pb-xs-40">
            <div class="container container-1520">
                <div class="row justify-content-lg-between">

                    <!--Footer Widget start-->
                    <div class="col-xl-3 col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('images/logo.png')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="col-xl-6 col-lg-6 col-md-9">
                        <div class="footer-widget">
                            <div class="footer-nav">
                                <nav>
                                    <ul>
                                        <li><a href="#">forums</a></li>
                                        <li><a href="#">demo</a></li>
                                        <li><a href="#">support</a></li>
                                        <li><a href="#">terms & conditions</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="footer-widget">
                            <div class="footer-social">
                                <span>follow us:</span>
                                <ul>
                                    <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                    <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                    <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                    <li><a href="#"><i class="icofont-youtube-play"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--Footer Widget end-->

                </div>
            </div>
        </div>
        <!--Footer Top end-->

        <!--Footer bottom start-->
        <div class="footer-bottom border-color section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright text-center">
                            <p>Copyright &copy;2018 <a  href="http://www.17sucai.com">Gilbard</a>. All rights reserved.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->

</div>

<!-- Placed js at the end of the document so the pages load faster -->

<!-- All jquery file included here -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
<script>
    // console.log($);

    $(".alert-warning").delay(2000).hide(0);
</script>