require('./bootstrap');

import router from "./routes"
import VueRouter from "vue-router"
import Vue from "vue";
import Vuex from "vuex";
import Home from "./components/HomeComponent.vue"
import Navbar from "./components/Navbar/NavbarComponent.vue";
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
window.Fire =  new Vue();
let TokenData = new Vue({
  data:{
    token: localStorage.getItem('token'),
  }
});

router.beforeEach((to, from ,next)=>{
  if(localStorage.getItem('token')){
    if(to.path == '/login' || to.path == '/register'){
        next('/');
      }
  }else if(to.path == '/admin/*' && !localStorage.getItem('currentUser')){
    window.location.href = '/';
 }
  next()
})

const app = new Vue({
    el: '#app',
    router: router,
    store,
    components:{
        Home: Home,
        Notification: Notification,
        Navbar: Navbar,
    },
});

