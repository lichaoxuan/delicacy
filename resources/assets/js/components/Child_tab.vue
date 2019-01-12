<template>
    <li @click="go" :class="{active:bool}">
        <!--<i class="glyphicon glyphicon-home"></i>-->
        <slot name="icon"></slot>
        <span>{{title}}</span>
    </li>

</template>

<script>
    export default {
        name: "Child_tab",
        data(){
            return {

            }
        },
        props:['title','mark',"sel"],
        methods:{
            go(mark){
                // console.log(this.mark);
                this.$router.push("/"+this.mark);
                //1 把mark传递给父组件
                this.$emit("my_click",this.mark)

            }
        },
        computed:{
            bool:function () {
                return this.mark==this.sel;
            }
        }
    }
</script>

<style scoped>
    li{
        display: flex;
        flex-direction: column;
        font-size: .3rem;
        height: 1.13rem;
        flex-grow: 1;
        border-top:1px #ccc solid;
        justify-content: center;
        align-items: center;
    }
    .active{
        color: #f43f3f;
    }
</style>