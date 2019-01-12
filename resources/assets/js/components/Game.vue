<template>
    <div class="game_wrap">
        <div class="game_header">
            活动列表
        </div>
        <!--<div class="game_body">-->
            <!--<div class="item" v-for="item in list" @click="go(item.id)">-->
                <!--<div class="pic"><img src="/images/venue_m_icon.jpg" alt=""></div>-->
                <!--<div class="txt">-->
                    <!--<h3>{{item.name}}</h3>-->
                    <!--<p>日期:{{item.start_date}} 时间:{{item.start_time}}</p>-->
                    <!--<p>人数:{{item.user_num}}</p>-->
                    <!--<p>组织者:大脸宣 {{item.user_id}}</p>-->
                <!--</div>-->
            <!--</div>-->

        <!--</div>-->
    </div>

</template>

<script>
    export default {
        name: "Game",
        data(){
            return{
                base_url:"http://www.yutang.test",
                list:[]
            }
        },
        created(){
            // axios.get(this.base_url+"/game/m_list").then((res)=>{
            //
            //     this.list = res.data;
            //     console.log(this.list);
            // })
        },
        methods:{
            go(id){
                this.$router.push("/game_detail/"+id);
            }
        }

    }
</script>

<style scoped>
    .game_header{
        height:.9rem;
        border-bottom: 1px #e0e2ee solid;
    }
    .game_body{
        padding: 0 .3rem;
    }
    .item{
        display: flex;
        padding:0.25rem 0;
        border-bottom: 1px #ecedef solid;
    }
    .txt>h3{
        font-size: 0.3rem;
        font-weight: bold;
    }
    .pic{
        width: 2rem;
    }
    .pic>img{
        width: 100%;
    }
    .txt{
        width: 4.6rem;
        margin-left: .3rem;
    }



</style>