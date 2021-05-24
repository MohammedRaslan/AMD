require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue";
import Vuex from "vuex";
import Home from "./components/HomeComponent.vue"
import Notification from "./components/Navbar/NotificationComponent.vue"
import Cart from "./components/Navbar/CartComponent.vue"
import DropDown from "./components/Navbar/DropdownComponent.vue"
import Search from "./components/Navbar/SearchComponent.vue"
import storeDefinition from './store';
import VueProgressBar from 'vue-progressbar'
import Form from 'vform';
import { mapState } from "vuex";
window.form = Form;


window.Vue = require('vue').default;
Vue.use(VueRouter);
Vue.use(Vuex);
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '70px'
})
// Vue.component('home-component', require('./components/HomeComponent.vue').default);

const store = new Vuex.Store(storeDefinition);




const app = new Vue({
    el: '#app',
    router: router,
    store,
    components:{
        Home: Home,
        Notification: Notification,
        Cart: Cart,
        DropDown: DropDown,
        Search: Search
    },
});
