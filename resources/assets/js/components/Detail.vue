<template>
   <div class="detail">
       <div class="detail_header">
           <div class="title">
               <h3>{{post.name}}</h3>
               <!--@if($venue->isfollowed())-->
               <!--<a href="/venue/unfollow/{{$venue->id}}">取消关注</a>-->
               <!--@else-->
               <!--<a href="/venue/follow/{{$venue->id}}">关注</a>-->
               <!--@endif-->
               <img src="images/blue.png" alt="" @click="follow(post.id)" v-show="!is_follow">
               <img src="images/gray.png" alt="" @click="unfollow(post.id)" v-show="is_follow">
           </div>
          
           <div class="item">
               <div class="pic"><img src="images/venue_m_icon.jpg" alt=""></div>
               <div class="txt">

                   <p>{{post.address}}</p>
                   <p>营业时间:09:00~22:00</p>

               </div>
           </div>
           <div class="tel">
               <span>12345678901</span>
               <span class="glyphicon glyphicon-earphone"></span>
           </div>
       </div>
       <div class="detail_body">
           <p class="des">{{post.des}}</p>
       </div>
   </div>
</template>

<script>
    export default {
        name: "Detail",
        data(){
            return{
                is_follow:false,
                post:{},
                base_url:"http://www.yutang.test",

            }
        },
        created(){
            console.log(this.$route.params);

            let id = this.$route.params.id;
            axios.get("http://www.yutang.test/venue/m_detail/"+id).then((res)=>{
                // console.log(res);
                this.post = res.data;

                this.is_follow = this.venue.is_follow;
            })

        },
        methods:{
            follow(id){
                axios.get(this.base_url+"/venue/m_follow/"+id).then((res)=>{
                    if (res.data.status=="200"){
                        this.is_follow=!this.is_follow;
                        alert(res.data.msg);
                    }
                })

            },
            unfollow(id){
                axios.get(this.base_url+"/venue/m_unfollow/"+id).then((res)=>{
                    if (res.data.status=="200"){
                        this.is_follow=!this.is_follow;
                        alert(res.data.msg);
                    }
                })

            }
        }
    }
</script>

<style scoped>
    .title{
        height: 1rem;

        display: flex;
        justify-content: space-between;
        align-items:center;
        padding-top:.3rem;
        padding-bottom: .2rem;
        border-bottom: 1px #e3e3e3 solid;
    }
    .title>img{
        width:.6rem;
        height: .6rem;
    }
    .detail_header{
        padding:0 .3rem;
        border-bottom: 1px #e9e9e9 solid;
    }
    .item{
        padding: .3rem 0 0.05rem;
        border-bottom: 1px #e7e7e7 solid;
        display:flex;
    }
    .detail_header .tel{
        display: flex;
        justify-content:space-between;
        height: 1.08rem;
        align-items: center;
    }
    .item .pic{
        width: 2rem;
    }
    .item .pic>img{
        width: 100%;
    }
    .item>.txt{
        width:4.63rem;
        margin-left:.3rem;
    }
    .item>.txt h3{
        font-size: .24rem;
    }

    .detail_body .des{
        padding: .3rem;
    }
</style>