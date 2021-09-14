import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";
import RegisterComponent from "./components/Auth/RegisterComponent";
import verifyComponent from "./components/Auth/VerifyMailComponent";
import OverviewComponent from "./components/Selling/OverviewComponent";
import CreateProductComponent from "./components/Selling/CreateProductComponent";
// import CreateProductStepTwoComponent from "./components/Selling/CreateProductStepTwo";
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
import ContactComponent from "./components/ContactCompontent.vue";
import FreeSubscriptionComponent from "./components/subscriptions/FreeSubscriptionComponent.vue";
import SilverSubscriptionComponent from "./components/subscriptions/SilverSubscriptionComponent.vue";
import GoldSubscriptionComponent from "./components/subscriptions/GoldSubscriptionComponent.vue";
import PlatinumSubscriptionComponent from "./components/subscriptions/PlatinumSubscriptionComponent.vue";
// import TestComponent from "./components/TestComponent.vue";
import ChatNotificationComponent from "./components/ChatCenter/ChatNotificationComponent";
import ChatDetails from "./components/ChatCenter/ChatDetails.vue";
import InformationComponent from "./components/SettingsCenter/InformationComponent";
import ShippingInformationComponent from "./components/SettingsCenter/ShippingInfoComponent.vue";
import PreferencesComponent from "./components/SettingsCenter/PreferencesComponent.vue";
import NotificationMessageComponent from "./components/ChatCenter/NotificationComponent.vue";
import EditProductComponent from "./components/Selling/EditProductComponent.vue";
import RequestItemComponent from "./components/Buying/RequestItemComponent.vue";
import SoldProductsComponent from "./components/Selling/SoldProductsComponent.vue";
import SavedProductComponent from "./components/Buying/SavedProductComponent.vue";
import PurchasedProductComponent from "./components/Buying/PurchaseHistoryComponent.vue";
var routes = [{
        path: "/",
        component: HomeComponent,
        name: "home",
    },
    {
        path: "/messages",
        component: ChatNotificationComponent,
        name: "ChatNotificationComponent",
    },
    {
        path: "/chat/:id?",
        component: ChatDetails,
        name: "ChatDetails",
    },
    {
        path: "/notifications",
        component: NotificationMessageComponent,
        name: "NotificationMessageComponent",
    },
    {
        path: "/settings",
        component: InformationComponent,
        name: "InformationComponent",
    },
    {
        path: "/settings/shipping_info",
        component: ShippingInformationComponent,
        name: "ShippingInformationComponent",
    },
    {
        path: "/settings/preferences",
        component: PreferencesComponent,
        name: "PreferencesComponent",
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
        path: "/verify",
        component: verifyComponent,
        name: 'verify'
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
        path: "/productEdit/:id?",
        component: EditProductComponent,
        name: "EditProductComponent",
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
        path: "/selling/sold",
        component: SoldProductsComponent,
        name: "SoldProductsComponent",
    },
    {
        path: "/buying/requestItem",
        component: RequestItemComponent,
        name: "RequestItemComponent",
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
    {
        path: "/buying/saved",
        component: SavedProductComponent,
        name: 'SavedProductComponent',
    },
    {
        path: "/buying/purchased",
        component: PurchasedProductComponent,
        name: 'PurchasedProductComponent',
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
    {
        path: "/subscriptions/free",
        component: FreeSubscriptionComponent,
        name: "FreeSubscriptionComponent",
    },
    {
        path: "/subscriptions/silver",
        component: SilverSubscriptionComponent,
        name: "SilverSubscriptionComponent",
    },
    {
        path: "/subscriptions/gold",
        component: GoldSubscriptionComponent,
        name: "GoldSubscriptionComponent",
    },
    {
        path: "/subscriptions/platinum",
        component: PlatinumSubscriptionComponent,
        name: "PlatinumSubscriptionComponent",
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
    {
        path: "/contact-us",
        component: ContactComponent,
        name: "contact",
    },

];

var router = new VueRouter({
    routes,
    mode: "history",
});

export default router;
