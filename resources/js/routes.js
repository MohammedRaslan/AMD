import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";

const routes = [
    {
        path:"/",
        component: HomeComponent,
        name:"home",
    }
];

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;