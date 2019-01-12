import  VueRouter from "vue-router";

let routes=[
    {
        path:"/index_m",
        component:require("./components/Index_m")
    },
    {
        path:"/post",
        component:require("./components/Post")
    },
    {
        path:"/game",
        component:require("./components/Game")
    },
    {
        path:"/find",
        component:require("./components/Find")
    },
    {
        path:"/about",
        component:require("./components/About")
    }

]

export default new VueRouter({
    //  "mode":"history",
    routes
})