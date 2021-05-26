import VueRouter from "vue-router";
import DashboardComponent from "./components/Admin/DashboardComponent";



const admin_routes = [
    {
        path:"/admin",
        component: DashboardComponent,
        name:"home",
    },

];

const router_admin = new VueRouter({
    admin_routes,
    mode:"history",
});

export default router_admin;