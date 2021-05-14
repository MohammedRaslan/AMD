require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue";
import Home from "./components/HomeComponent.vue"
import VueProgressBar from 'vue-progressbar'

window.Vue = require('vue').default;
Vue.use(VueRouter);

Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '2px'
})
// Vue.component('home-component', require('./components/HomeComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: router,
    components:{
        Home: Home,
    }
});
