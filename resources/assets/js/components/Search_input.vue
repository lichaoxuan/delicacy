<template>
    <div class="search_wrap">
        <div class="list_header">
            <select name="" id="">
                <option value="">北京</option>
                <option value="">上海</option>
                <option value="">广州</option>
            </select>
            <input type="text" placeholder="请输入搜索内容" @click="search" v-model="word" id="start_input">
            <span @click="start_search" >搜索</span>
        </div>
        <div class="search_list">
            <!--template不会初心在页面中-->
            <template class="item" v-for="item in list">
                <venue_item :venue="item"></venue_item>
            </template>


        </div>

    </div>
<!--模板中只能有一个div-->

</template>

<script>
    export default {
        name: "Search_input",
        data(){
          return{
              word:"",
              base_url:"http://www.yutang.test",

          }
        },
        mounted(){
          let input = document.getElementById("start_input");
          input.focus();
        },
        methods:{
            search(){

                this.$router.push("/search");
            },
            start_search(){
                // console.log(this.word);
                axios.post(this.base_url+"/venue/m_search",{word:this.word}).then((res)=>{
                    // console.log(res);
                    // this.list = res.data;

                    this.$emit("get_val",res.data)
                })
            },
        }
    }
</script>

<style scoped>
    .list_header{
        width: 100%;
        height: 0.95rem;
        border-bottom: 1px #e3e3e3 solid;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: fixed;
        top: 0;
        left: 0;
        background-color: #fff;

    }

    .list_header select{
        width: 1.2rem;

        display: flex;
        justify-content: center;
        margin-left: .3rem;
        outline: none;
        border: none;
    }
    .list_header input{
        width: 4.5rem;
        height: .58rem;
        /*outline: none;*/
        background-color: #eeeeee;
        border:none;
        padding-left: 0.2rem;
        border-radius: 5px;
    }
    .list_header input:focus{
        outline: none;
    }
    .list_header span{
        display: block;
        margin-right: .2rem;
        width: 0.9rem;
        display: flex;
        justify-content: center;
    }

    .search_list{
        padding: 0 .3rem;

    }


</style>