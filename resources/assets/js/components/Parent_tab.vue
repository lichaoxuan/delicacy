<template>
    <ul class="tab" >

        <c_tab title="首页" mark="index_m" @my_click="get_mark" :sel="sel_mark"><i class="glyphicon glyphicon-home" slot="icon"></i></c_tab>
        <c_tab title="帖子" mark="post" @my_click="get_mark" :sel="sel_mark"><i class="glyphicon glyphicon-list-alt" slot="icon"></i></c_tab>
        <c_tab title="发现" mark="find" @my_click="get_mark" :sel="sel_mark"><i class="glyphicon glyphicon-eye-open" slot="icon"></i></c_tab>
        <c_tab title="活动" mark="game" @my_click="get_mark" :sel="sel_mark"><i class="glyphicon glyphicon-th-list" slot="icon"></i></c_tab>
        <c_tab title="我的" mark="about" @my_click="get_mark" :sel="sel_mark"><i class="glyphicon glyphicon-user" slot="icon"></i></c_tab>
        <!--<router-link to="/venue" tag="li">场馆 &nbsp;<i class="glyphicon glyphicon-home"></i></router-link>-->
        <!--<router-link to="/game" tag="li" >活动 &nbsp;<i class="glyphicon glyphicon-th-list"></i></router-link>-->
        <!--<router-link to="/find" tag="li" >发现 &nbsp;<i class="glyphicon glyphicon-map-marker"></i></router-link>-->
        <!--<router-link to="/about" tag="li" >我的 &nbsp;<i class="glyphicon glyphicon-user"></i></router-link>-->
    </ul>
</template>

<script>
    export default {
        name: "Parent_tab",
        data(){
          return{
              sel_mark:"index_m"
          }
        },
        methods:{
            get_mark:function (sel_mark) {
                //
                this.sel_mark = sel_mark;
            }
        }
    }
</script>

<style scoped>
    .tab{
        width: 100%;
        height: 1.13rem;
        background-color: #fff;
        position: fixed;
        left: 0;
        bottom: 0;
        display: flex;
    }

</style>