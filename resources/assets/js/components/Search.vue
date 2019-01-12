<template>
    <div class="search_wrap">
        <search_input @get_val="get_sonval"></search_input>
        <div class="search_list">
            <!--template不会渲染在页面中-->
            <template class="item" v-for="item in list">
                <venue_item :venue="item"></venue_item>
            </template>

        </div>
    </div>
</template>

<script>
    export default {
        name: "Search",
        data(){
            return{
                list:[],
            }
        },
        update(){

        },
        updated(){

        },
        mounted(){

        },
        methods:{
            get_sonval(son_val){
                this.list=son_val;
                // console.log(this.word);
                console.log(this.list);
            },
        }
    }
</script>

<style scoped>
    .search_list{
        padding: 0 .3rem;
        padding-top: 1rem;
        padding-bottom: 2rem;
    }
</style>