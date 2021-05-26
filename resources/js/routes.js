import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";
import RegisterComponent from "./components/Auth/RegisterComponent";
import DashboardComponent from "./components/Admin/DashboardComponent"
import UsersComponent from "./components/Admin/UsersComponent"

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
    },
    {
        path:"/register",
        component: RegisterComponent,
        name:"register",
    },
    {
        path:"/admin",
        component: DashboardComponent,
        name:"admin",
    },
    {
        path:"/admin/users",
        component: UsersComponent,
        name: "users",
    }

   
    
];

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;