import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";
import RegisterComponent from "./components/Auth/RegisterComponent";

import OverviewComponent from "./components/Selling/OverviewComponent";
import CreateProductComponent from "./components/Selling/CreateProductComponent";

import DashboardComponent from "./components/Admin/DashboardComponent"
import UsersComponent from "./components/Admin/UsersComponent"
import SubscriptionsComponent from "./components/Admin/Subscription/SubscriptionsComponent";
import AddSubscriptionsComponent from "./components/Admin/Subscription/ManageSubscription.vue";
import DraftedComponent from "./components/Selling/DraftedComponent";
import ShopComponent from "./components/ShopComponent.vue"
import ShopDetailComponent from "./components/ShopDetail"
import CartFirstStepComponent from "./components/Cart/FirstStepComponent.vue";

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
        path:"/selling/overview",
        component: OverviewComponent,
        name:"SellingOverview",
    },
    {
        path:"/selling/sell_item",
        component: CreateProductComponent,
        name:"ProductCreate",
    },
    {
        path:"/selling/drafted",
        component: DraftedComponent,
        name:"draftedProduct",
    },
    {
        path: "/shop",
        component: ShopComponent,
        name: "ShopComponent",
    },
    {
        path: "/shop/:query?",
        component: ShopDetailComponent,
        name: "ShopDetailComponent",
    },
    {
        path: "/cart/first-step",
        component: CartFirstStepComponent,
        name: "CartFirstStepComponent",
    },

    // ADMIN ROUTES
    {
        path:"/admin",
        component: DashboardComponent,
        name:"admin",
    },
    {
        path:"/admin/users",
        component: UsersComponent,
        name: "users",
    },
    {
        path:"/admin/subscriptions",
        component: SubscriptionsComponent,
        name: "subscriptions",
    },
    {
        path:"/admin/AddSubscription",
        component: AddSubscriptionsComponent,
        name: "ManageSubscriptions",
    },
    
];

const router = new VueRouter({
    routes,
    mode:"history",
});

export default router;