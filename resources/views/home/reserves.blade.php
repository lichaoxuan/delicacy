@extends("layouts/public")
@section('title')
    美食预定
@endsection
<!--Header section end-->
@section('main')

    
    <!--Forum Create Area Start-->
    <div class="Forum-create-area section pt-95 pt-lg-75 pt-md-65 pt-sm-55 pt-xs-45 pb-xs-45">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="forum-form">
                        <form action="/foods/get_reserve" method="POST" >
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                        <label>预定地址：</label>
                                        <input name="address" type="text" placeholder="请输入用餐地址" required>
                                        <input name="user_id" type="hidden" value="{{\Auth::user()->id}}" >
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                        <label>用餐人数：</label>
                                        <input name="num" type="text" placeholder="请输入用餐人数">
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                        <label>预定日期：</label>
                                        <input name="date" type="date" >
                                    </div>
                                    <!--Single Forum End-->
                                </div>
                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class=" mb-50 mb-sm-30 mb-xs-20">
                                        <label style="font-size: 24px">预定包间：</label>
                                        <input name="is_private" type="radio" checked value="1" >是
                                        <input name="is_private" type="radio" value="0" >否
                                    </div>
                                    <!--Single Forum End-->
                                </div>

                                <div class="col-12">
                                    <!--Single Forum Start-->
                                    <div class="single-input mb-50 mb-sm-30 mb-xs-20">
                                        <label>其他要求：</label>
                                        <textarea name="cont" id="" cols="33" rows="5"></textarea>
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
