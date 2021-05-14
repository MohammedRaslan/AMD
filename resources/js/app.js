require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue";
import Home from "./components/HomeComponent.vue"

window.Vue = require('vue').default;
Vue.use(VueRouter);
// Vue.component('home-component', require('./components/HomeComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: router,
    components:{
        Home: Home,
    }
});
