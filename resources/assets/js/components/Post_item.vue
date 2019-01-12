<template>
    <div>
        <div class="item" @click="go(post.id)">
            <!--<div class="pic"><img src="images/venue_m_icon.jpg" alt=""></div>-->
            <!--<div class="txt">-->
                <!--<h3>{{venue.name}}</h3>-->
                <!--<p class="type">{{venue.type_id}}</p>-->
                <!--<p class="area"><span>朝阳区</span><span>32.6km</span></p>-->
                <!--<p class="order"><span>线上预定</span><span class="price">10元/小时起</span></p>-->
            <!--</div>-->
        </div>


    </div>
</template>

<script>
    export default {
        name: "post_item",
        props:["post"],
        methods:{
            go(id){
                // this.$router.push("/detail/"+id);
                this.$router.push({name:'detail',params:{id:id,name:"tom"}})
            },
        }

    }
</script>

<style scoped>
    .item{
        padding: .3rem 0 0.05rem;
        border-bottom: 1px #e7e7e7 solid;
        display: flex;
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
    .txt h3{
        font-weight: normal;
        font-size: .3rem;
        line-height: .5rem;
        color: #222;
    }
    .txt p{
        line-height: .45rem;
    }
    .txt .type{
        font-size: .25rem;
    }
    .txt .area{
        padding-bottom: .15rem;
        border-bottom: 1px #e3e3e3 solid;
    }
    .area,.order{
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .txt .order{
        /*line-height: 0.7rem;*/
        height: 0.7rem;
    }

    .order .price{
        color: #ff6700;
    }
</style>