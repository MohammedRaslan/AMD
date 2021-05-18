import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";


const routes = [
    {
        path:"/",
        component: HomeComponent,
        name:"home",
    },
    {
        path:"/example",
        component: ExampleComponent,
        name:"example",
    },
    {
        path:"/login",
        component: LoginComponent,
        name:"login",
    }
];

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;