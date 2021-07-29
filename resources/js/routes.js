import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";
import RegisterComponent from "./components/Auth/RegisterComponent";

import OverviewComponent from "./components/Selling/OverviewComponent";
import CreateProductComponent from "./components/Selling/CreateProductComponent";
import CreateProductStepTwoComponent from "./components/Selling/CreateProductStepTwo";
import CreateProductShippingComponent from "./components/Selling/CreateProductShipping";
import ActiveProductComponent from "./components/Selling/ActiveProductComponent";
import DashboardComponent from "./components/Admin/DashboardComponent"
import UsersComponent from "./components/Admin/UsersComponent"
import CategoriesComponent from "./components/Admin/CategoriesComponent"
import SubscriptionsComponent from "./components/Admin/Subscription/SubscriptionsComponent";
import AddSubscriptionsComponent from "./components/Admin/Subscription/ManageSubscription.vue";
import DraftedComponent from "./components/Selling/DraftedComponent";
import ShopComponent from "./components/ShopComponent.vue"
import ShopDetailComponent from "./components/ShopDetail"
import CartFirstStepComponent from "./components/Cart/FirstStepComponent.vue";
import CartSecondStepComponent from "./components/Cart/SecondStepComponent.vue";
import FrontSubscriptionsComponent from "./components/SubscriptionComponent.vue";
import WishlistComponent from "./components/Buying/WishlistComponent.vue";
import OfferBidsComponent from "./components/Buying/OffersBidsComponent.vue";
import SellerDetailsComponent from "./components/Selling/SellerDetailsComponent.vue";
import AdminProductComponent from "./components/Admin/ProductsComponent.vue";
import FaqComponent from "./components/Admin/FaqComponent.vue";
import HelpComponent from "./components/Navbar/QuestionsComponent.vue";
import AboutComponent from "./components/AboutCompontent.vue";
import PolicyComponent from "./components/PolicyComponent.vue";
import TermsComponent from "./components/TermsAndConditions.vue";
import AdminAboutComponent from "./components/Admin/AboutComponent.vue"
import CmsComponent from "./components/Admin/CmsComponent.vue";
const routes = [{
        path: "/demo",
        component: HomeComponent,
        name: "home",
    },
    {
        path: "/example",
        component: ExampleComponent,
        name: "example",
    },
    {
        path: "/login",
        component: LoginComponent,
        name: "login",
    },
    {
        path: "/register",
        component: RegisterComponent,
        name: "register",
    },
    {
        path: "/help",
        component: HelpComponent,
        name: "Help",
    },
    {
        path: "/selling/overview",
        component: OverviewComponent,
        name: "SellingOverview",
    },
    {
        path: "/selling/sell_item",
        component: CreateProductComponent,
        name: "ProductCreate",
    },
    {
        path: "/selling/active_product",
        component: ActiveProductComponent,
        name: "ActiveProduct",
    },
    {
        path: "/buying/offers",
        component: OfferBidsComponent,
        name: 'OfferBids',
    },
    {
        path: "/buying/wishlist",
        component: WishlistComponent,
        name: 'Wishlist',
    },
    // {
    //     path: "/step_two/:id?",
    //     component: CreateProductStepTwoComponent,
    //     name: "ProductCreateStepTwo",
    // },
    {
        path: "/product_shipping/:id?",
        component: CreateProductShippingComponent,
        name: "ProductCreateShipping",
    },
    {
        path: "/selling/drafted",
        component: DraftedComponent,
        name: "draftedProduct",
    },
    {
        path: "/selling/seller_details",
        component: SellerDetailsComponent,
        name: "SellerDetails",
    },
    {
        path: "/shopCategory/:query?",
        component: ShopComponent,
        name: "ShopCategoryComponent",
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
    {
        path: "/cart/second-step",
        component: CartSecondStepComponent,
        name: "CartSecondStepComponent",
    },
    {
        path: "/subscriptions",
        component: FrontSubscriptionsComponent,
        name: "FrontSubscriptionsComponent",
    },

    // ADMIN ROUTES
    {
        path: "/admin",
        component: DashboardComponent,
        name: "admin",
    },
    {
        path: "/admin/users",
        component: UsersComponent,
        name: "users",
    },
    {
        path: "/admin/categories",
        component: CategoriesComponent,
        name: "categories",
    },
    {
        path: "/admin/products",
        component: AdminProductComponent,
        name: "products",
    },
    {
        path: "/admin/subscriptions",
        component: SubscriptionsComponent,
        name: "subscriptions",
    },
    {
        path: "/admin/AddSubscription",
        component: AddSubscriptionsComponent,
        name: "ManageSubscriptions",
    },
    {
        path: "/admin/faq",
        component: FaqComponent,
        name: "faqs",
    },
    {
        path: "/admin/about",
        component: AdminAboutComponent,
        name: "admin-about",
    },
    {
        path: "/admin/Cms",
        component: CmsComponent,
        name: "admin-cms",
    },
    // Stitic Pages
    {
        path: "/about-us",
        component: AboutComponent,
        name: "about-us",
    },
    {
        path: "/policy",
        component: PolicyComponent,
        name: "policy",
    },
    {
        path: "/terms-conditions",
        component: TermsComponent,
        name: "terms",
    },
    
];

const router = new VueRouter({
    routes,
    mode: "history",
});

export default router;