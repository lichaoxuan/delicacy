
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

//引入vue-router
import VueRouter from "vue-router";
Vue.use(VueRouter);
import router from "./routes.js";


import Vant from 'vant';
import 'vant/lib/index.css';

Vue.use(Vant);


//注册父组件
Vue.component('p_tab', require('./components/Parent_tab'));
// 注册子组件
Vue.component('c_tab', require('./components/Child_tab'));
//搜索注册
Vue.component('search_input', require('./components/Search_input'));
//venue_item子项
Vue.component('post_item', require('./components/Post_item'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    router //调用路由配置
});
