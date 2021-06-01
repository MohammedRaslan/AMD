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
import Swal from 'sweetalert2';
import 'vueditor/dist/style/vueditor.min.css'
Vue.use(Vuex);


window.Vue = require('vue').default;

Vue.use(VueRouter);
Vue.use(VueProgressBar, {
  color: 'rgb(143, 255, 199)',
  failedColor: 'red',
  height: '70px'
})
// Vue.component('home-component', require('./components/HomeComponent.vue').default);

window.Fire =  new Vue();
window.Swal = Swal;
window.form = Form;


const store = new Vuex.Store(storeDefinition);
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
window.Toast = Toast;
let token = localStorage.getItem('token');
if(token){
  window.axios.defaults.headers.common = {
    'Accept' : 'application/json',
    'Content-Type' :'application/json',
    'Authorization': `Bearer ${token}` 
  };
}

router.beforeEach((to, from ,next)=>{
  // console.log(to.name);
  if(localStorage.getItem('token')){

    if(to.path == '/login' || to.path == '/register'){
        next('/');
      }
  }
  if((!localStorage.getItem('token') || JSON.parse(localStorage.getItem('currentUser')).role != 0 ) && to.path == '/admin'){
    localStorage.setItem('auth',false);
    window.location.href ="/"
  }
  if((!localStorage.getItem('token') && !( to.name == 'login' || to.path == '/register' || to.name == 'home') )){
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

