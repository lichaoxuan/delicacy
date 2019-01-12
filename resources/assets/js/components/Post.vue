<template>
    <div class="list_wrap" id="wrap">
        <search_input></search_input>
        <div class="list_body">

            <template class="item" v-for="item in list">
                <venue_item :post="item"></venue_item>
            </template>

            <div v-show="is_loading">数据正在加载中...</div>
            <div @click="get_more" class="get_more">加载更多</div>

        </div>
    </div>


</template>

<script>

    export default {
        name: "Post",
        data(){
          return {
              list:null,
              base_url:"http://www.delicacy.test",
              page:1,
              url:"",
              is_finish:false,
              is_loading:false
          }
        },
        created(){
            axios.get(this.base_url+"/delicacy/m_list").then((res)=>{

                // console.log(res);
                this.list = res.data;
                console.log(this.list);
            })
        },
        mounted(){
            this.start();
        },
        methods:{

            get_more(){
                this.page++;
                this.url=this.base_url+"/venue/m_list?page="+this.page;//paginate()底层封装了方法只要按..?page=?则个格式传就行
                // console.log(this.url);
                this.is_loading=true;
                //可以模拟延迟加载
                // setTimeout(()=>{
                //
                // },2000)
                axios.get(this.url).then((res)=>{
                    this.is_loading=false;
                    if(res.data.length==0){
                        this.is_finish=true;
                    }
                    this.list = this.list.concat(res.data);
                    console.log(this.list);
                })
            },
            start(){
                var rootE=document.documentElement;
                var wrap = document.getElementById("wrap");
                var that=this;
                window.onscroll=function () {
                    //容器的高度
                    var wrapH=wrap.scrollHeight;

                    // console.log(document.body.scrollTop);
                    // console.log(rootE.scrollTop);
                    // console.log(rootE.clientHeight);
                    //浏览器的高度+滚动的距离
                    var t=rootE.clientHeight+(rootE.scrollTop||document.body.scrollTop);

                    if(t>=wrapH){
                        //触发跟多方法

                        //加载完成后不会触发更多
                        if(that.is_finish || that.is_loading){
                           return false;
                        }

                        that.get_more();
                        // console.log("more")
                    }
                }
            }

        }
    }
</script>

<style scoped>

    .list_wrap{
        height: 100vh;
    }

    .list_body{
        padding: 0 .3rem;
        padding-top: 1rem;
        padding-bottom: 2rem;
    }

    .get_more{
        height: .8rem;
        background-color: #fafafa;
        line-height: .8rem;
        text-align: center;
        font-size: .32rem;
    }
</style>