@extends("layouts/public")
@section('title')
    文章发布页
@endsection
<!--Header section end-->
@section('main')
    
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
                            <li>Forum Create</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Page Banner Area End-->
    
    <!--Forum Create Area Start-->
    <div class="Forum-create-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-xs-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="forum-form">
                        <form action="/create/store" method="post">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>topic Title</label>
                                       <input name="title" type="text" placeholder="Enter topic title here">
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>topic content</label>
                                     <textarea id="summernote" name="content"></textarea>
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12" style="margin-bottom: 20px">
                                    <!--Single Forum Start-->
                                    <div class="group-input">
                                          <div class="row">
                                           <div class="col-md-6">
                                                <!--Single Forum Start-->
                                                <div class="single-input mb-50">
                                                   <label>category</label>
                                                   <select class="wide" name="type_id">
                                                       <option value="0">菜系种类</option>
                                                       <option value="1">川菜</option>
                                                       <option value="2">鲁菜</option>
                                                       <option value="3">粤菜</option>
                                                       <option value="4">徽菜</option>
                                                       <option value="5">苏菜</option>
                                                       <option value="6">浙菜</option>
                                                       <option value="7">闽菜</option>
                                                       <option value="8">湘菜</option>
                                                   </select>
                                                </div>
                                                <!--Single Forum End--> 
                                           </div>

                                       </div>
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12 mb-50">
                                    <div class="forum-post">

                                        <button class="df-btn">Create Post</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Forum Create Area End-->
    
    <!--Projects section start-->

    <!--Projects section end-->
    @endsection
    <!--Footer section start-->
