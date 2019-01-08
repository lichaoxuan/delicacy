@extends("layouts/public")
@section('title')
    发现美食
@endsection
<!--Header section end-->
@section('main')

    
    <!--Forum Create Area Start-->
    <div class="Forum-create-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-xs-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="forum-form">
                        <form action="/foods/get_find_foods" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                       <label>菜品名称</label>
                                       <input name="name" type="text" placeholder="请输入菜品名称">
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12" style="margin-bottom: 20px">
                                    <!--Single Forum Start-->
                                    <div class="group-input single-input">
                                          <div class="row">
                                           <div class="col-md-6">
                                                <!--Single Forum Start-->
                                                <div class="mb-50">
                                                   <label>菜系名称</label>
                                                   <select class="wide" name="type_id">

                                                       <option value="0">菜系种类</option>
                                                       @foreach(\App\Type::all() as $type)
                                                       <option value="{{$type->id}}">{{$type->name}}</option>
                                                       @endforeach
                                                   </select>
                                                </div>
                                                <!--Single Forum End--> 
                                           </div>

                                       </div>
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="mb-50 mb-sm-30 mb-xs-20">
                                        <label style="font-size:24px ;font-weight:500 ">菜品图片</label></br>
                                        <input name="photo" type="file" >
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12 mb-50">
                                    <div class="forum-post">

                                        <button class="df-btn">提交</button>
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
