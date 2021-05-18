require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue";

import Home from "./components/HomeComponent.vue"
import Notification from "./components/Navbar/NotificationComponent.vue"
import Cart from "./components/Navbar/CartComponent.vue"
import DropDown from "./components/Navbar/DropdownComponent.vue"
import Search from "./components/Navbar/SearchComponent.vue"

import VueProgressBar from 'vue-progressbar'
import Form from 'vform';
window.form = Form;

window.Vue = require('vue').default;
Vue.use(VueRouter);
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '70px'
})
// Vue.component('home-component', require('./components/HomeComponent.vue').default);

const app = new Vue({
    el: '#app',
    router: router,
    components:{
        Home: Home,
        Notification: Notification,
        Cart: Cart,
        DropDown: DropDown,
        Search: Search
    }
});
