<template>
    <div class="index_wrap">
        <div class="index_header">
            <div class="title">
                <div>
                    <img src="images/logo.png" alt="">
                </div>
                <h3>精品美食推荐</h3>
            </div>
            <van-swipe :autoplay="3000" indicator-color="white">
                <van-swipe-item><img class="slide_img" src="/images/backgrounds/0.jpg" alt=""></van-swipe-item>
                <van-swipe-item><img class="slide_img" src="/images/backgrounds/1.jpg" alt=""></van-swipe-item>
                <van-swipe-item><img class="slide_img" src="/images/backgrounds/2.jpg" alt=""></van-swipe-item>

            </van-swipe>

        </div>
        <div class="featured-title">
            <h2>中国※名菜</h2>
            <a href="#">查看所有菜系</a>
        </div>
        <div class="aui-slide-list">
            <ul class="aui-slide-item-list">
                <li class="aui-slide-item-item">
                    <a href="javascript:;" class="aui-link">
                        <img src="images/feature/slide-01.jpg" alt="">
                    </a>
                    <h3>闵</h3>
                </li>
                <li class="aui-slide-item-item">
                    <a href="javascript:;" class="aui-link">
                        <img src="images/feature/slide-01.jpg" alt="">
                    </a>
                    <h3>闵</h3>
                </li>
                <li class="aui-slide-item-item">
                    <a href="javascript:;" class="aui-link">
                        <img src="images/feature/slide-01.jpg" alt="">
                    </a>
                    <h3>闵</h3>
                </li>
                <li class="aui-slide-item-item">
                    <a href="javascript:;" class="aui-link">
                        <img src="images/feature/slide-01.jpg" alt="">
                    </a>
                    <h3>闵</h3>
                </li>

            </ul>
        </div>
        <div class="index_body">
            <div class="aui-find-header">
                <h1>精选推荐</h1>
            </div>
            <div class="aui-coll-list">
                <div class="aui-city-list">
                    <div class="aui-city-item">
                        <img src="images/game/1546865948.jpg" alt="">
                        <span class="aui-city-tag"><img src="images/icon-hot-find.png" alt=""></span>
                    </div>
                    <div class="aui-city-text">
                        <h2>这些是本土的品牌家具店一个比一个美丽</h2>
                        <p class="aui-grt">本土也有好的设计</p>
                        <p>##上海</p>
                    </div>
                </div>
            </div>


        </div>
    </div>

</template>

<script>
    export default {
        name: "Index_m"
    }
</script>

<style scoped>
    .index_wrap{
        padding-bottom: .6rem;
    }
    .title{
        padding: .3rem;
        display: flex;
        background:#f43f3f;
        justify-content: space-between;
        align-items: center;
    }
    .title div>img{
        width: 3rem;
    }
    .slide_img{
        width: 100%;
    }
    .featured-title{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .featured-title h2{
        padding: .3rem;
        color:#fff;
        background:black;
    }
    .featured-title a{
        font-size: .34rem;
        padding-right:.2rem;
    }

    .aui-slide-list {
        padding-left: 0px;
        /*overflow: hidden;*/
        /*height:13rem;*/
        background: #fff;
        padding-top: 12px;
    }


    .aui-slide-item-list {
        width: auto;
        white-space: nowrap;
        overflow: auto;
        /*height: 14.3rem;*/
        font-size: 0;
        padding-right: 20px;
        margin-left: 0;
    }

    .aui-slide-item-item {
        display: inline-block;
        margin-left: 12px;
        vertical-align: top;
    }

    .aui-link {
        display: block;
    }

    .aui-slide-item-item a img {
        height: 3.8rem;
        display: block;
        border: none;
        border-radius: 10px;
    }

    .aui-slide-item-item h3{
    font-size:.6rem;
    font-weight:normal;
    color:#333333;
    padding-top:10px;
    padding-left:4px;
    }

    .aui-find-header{
        font-size:.6rem;
        color:#333333;
        padding-top:20px;
        padding-left:15px;
        padding-bottom:15px;
    }

    .aui-city-list {
        padding: 0 15px;
        margin-bottom: 30px;
    }

    .aui-city-item {
        position: relative;
    }

    .aui-city-item img {
        width: 100%;
        height: auto;
        display: block;
        border: none;
        border-radius: 5px;
    }

    .aui-city-tag {
        position: absolute;
        top: 0;
        right: 20px;
        width: 40px;
    }

    aui-city-tag img {
        width: 40px;
        height: auto;
        display: block;
        border: none;
        border-radius: 0;
    }

    .aui-city-text {
        padding-top: 15px;
    }

    .aui-city-text h2 {
        font-weight: bold;
        font-size: .32px;
        width: auto;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        word-wrap: normal;
        word-wrap: break-word;
        word-break: break-all;
        color: #333;
        margin-bottom: 5px;
    }

    .aui-city-text p{
        color:#333333;
        font-size:0.24rem;
    }

    .aui-city-text .aui-grt{
        color:#999;
    }

</style>