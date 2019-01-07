@extends('layouts.app')

@section('content')
    <div class="container venue_list">
        <div class="row">
            <ul class="type_nav">
                @foreach($types as $type)
                <li><a href="/venue/type/{{$type->id}}">{{$type->name}}</a></li>
               @endforeach
            </ul>
        </div>
        <div class="row">
            <div class="col-md-9 ">
                @foreach($venues as $venue)

                    <div class="venue_item">
                        <div class="pic"><img src="/images/venue_icon.jpg" class="img-responsive img-rounded" ></div>
                        <div class="txt">
                            <h3>{{$venue->name}}</h3>
                            <p>{{$venue->des}}</p>
                            <p>{{$venue->created_at}} <a href="">关注</a></p>
                        </div>
                    </div>
                @endforeach
                {{$venues->links()}}
            </div>
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                       <h4 style="border-bottom:1px #ccc solid;padding-bottom:20px">最新公告</h4>
                    </div>
                    <div class="panel-body" style="padding-top: 0">
                        网球俱乐部全国竞标赛竞赛推广服务招标
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h4>推荐场馆 <span>全部</span></h4>
                    </div>
                    <div class="panel-body" style="padding-top: 0">
                       <div><img src="/images/menu_icon.jpg" class="img-responsive"></div>
                        <p>亮相乒乓球俱乐部</p>
                    </div>
                    <div class="panel-body" style="padding-top: 0">
                       <div><img src="/images/menu_icon.jpg" class="img-responsive"></div>
                        <p>亮相乒乓球俱乐部</p>
                    </div>
                    <div class="panel-body" style="padding-top: 0">
                        <div><img src="/images/menu_icon.jpg" class="img-responsive"></div>
                        <p>亮相乒乓球俱乐部</p>
                    </div>
                </div>
            </div>


        </div>

    </div>
@endsection
