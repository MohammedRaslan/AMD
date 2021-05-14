import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";


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
    }
];

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;