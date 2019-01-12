<template>
    <div class="about_wrap">
        <div class="about_header">
            <h3>我的</h3>
            <div class="heade_main">
                <img src="" alt="">
                <p class="name"></p>
                <p class="name"></p>
            </div>
            <div class="heade_detail">
                

            </div>
        </div>
        <div class="about_body">
            <dl>
                <dt><i class="glyphicon glyphicon-user"></i></dt>
                <dd><span>头像设置</span><i class="glyphicon glyphicon-chevron-right"></i></dd>
            </dl>
            <dl>
                <dt><i class="glyphicon glyphicon-flag"></i></dt>
                <dd><span>我的活动</span><i class="glyphicon glyphicon-chevron-right"></i></dd>
            </dl>
            <dl>
                <dt><i class="glyphicon glyphicon-star"></i></dt>
                <dd><span>我的订单</span><i class="glyphicon glyphicon-chevron-right"></i></dd>
            </dl>
            <dl>
                <dt><i class="glyphicon glyphicon-star"></i></dt>
                <dd @click="go"><span>我的收藏</span><i class="glyphicon glyphicon-chevron-right"></i></dd>
            </dl>
        </div>
    </div>
</template>

<script>
    export default {
        name: "About",
        methods:{
            go(){
                this.$router.push("/my_follows");
            }
        }
    }
</script>

<style scoped>
    .about_header{
        height:4.25rem;
        padding:0 .4rem;
        margin-bottom: .2rem;
    }
    about_header h3{
        height:1rem;
    }
    .about_body{
        padding: 0 .4rem;
    }
    .about_body dl{
        height:1rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        font-size: .3rem;
        border-bottom: 1px solid #e3e3e3;
    }
    .about_body>dl>dt{

    }
    .about_body dd{
        width: 6.2rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>