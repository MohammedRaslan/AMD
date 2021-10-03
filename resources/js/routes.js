import VueRouter from "vue-router";
import HomeComponent from "./components/HomeComponent";
import ExampleComponent from "./components/ExampleComponent";
import LoginComponent from "./components/Auth/LoginComponent";
import RegisterComponent from "./components/Auth/RegisterComponent";
import verifyComponent from "./components/Auth/VerifyMailComponent";
import OverviewComponent from "./components/Selling/OverviewComponent";
import CreateProductComponent from "./components/Selling/CreateProductComponent";
import OfferProductComponent from "./components/Selling/OfferProductComponent";
import CreateOfferShippingComponent from "./components/Selling/CreateOfferShippingComponent";
// import CreateProductStepTwoComponent from "./components/Selling/CreateProductStepTwo";
import CreateProductShippingComponent from "./components/Selling/CreateProductShipping";
import OfferProductShippingComponent from "./components/Selling/OfferProductShippingComponent";
import ActiveProductComponent from "./components/Selling/ActiveProductComponent";
import DashboardComponent from "./components/Admin/DashboardComponent"
import UsersComponent from "./components/Admin/UsersComponent"
import CategoriesComponent from "./components/Admin/CategoriesComponent"
import SubscriptionsComponent from "./components/Admin/Subscription/SubscriptionsComponent";
import AddSubscriptionsComponent from "./components/Admin/Subscription/ManageSubscription.vue";
import DraftedComponent from "./components/Selling/DraftedComponent";
import ShopComponent from "./components/ShopComponent.vue"
import VendorComponent from "./components/VendorComponent"
import RequestedComponent from "./components/RequestedComponent"
import ShopDetailComponent from "./components/ShopDetail"
import CartFirstStepComponent from "./components/Cart/FirstStepComponent.vue";
import CartSecondStepComponent from "./components/Cart/SecondStepComponent.vue";
import DoneShoppingComponent from "./components/Cart/DoneShoppingComponent.vue";
import FrontSubscriptionsComponent from "./components/SubscriptionComponent.vue";
import WishlistComponent from "./components/Buying/Myfavorites/WishlistComponent.vue";
// import myfavoritesComponent from "./components/Buying/MyfavoritesComponent.vue";
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
import FreeSettingSubscrComponent from "./components/SettingsCenter/subscrition/FreeSubscriptionComponent.vue";
import SilverSettingSubscrComponent from "./components/SettingsCenter/subscrition/SilverSubscriptionComponent.vue";
import GoldSettingSubscrComponent from "./components/SettingsCenter/subscrition/GoldSubscriptionComponent.vue";
import PlatinumSettingSubscrComponent from "./components/SettingsCenter/subscrition/PlatinumSubscriptionComponent.vue";
import NotificationMessageComponent from "./components/ChatCenter/NotificationComponent.vue";
import archiveMessageComponent from "./components/ChatCenter/ArchiveComponent.vue";
import EditProductComponent from "./components/Selling/EditProductComponent.vue";
import RequestItemComponent from "./components/Buying/RequestItem/RequestItemComponent.vue";
import MyRequestesItemComponent from "./components/Buying/RequestItem/MyRequestesItemComponent.vue";
import MyequestsComponent from "./components/Buying/RequestItem/MyRequestsComponent.vue";
import SoldProductsComponent from "./components/Selling/SoldProductsComponent.vue";
import UnSoldProductsComponent from "./components/Selling/UnSoldProductsComponent.vue";
import SavedProductComponent from "./components/Buying/Myfavorites/SavedProductComponent.vue";
import SavedSellerComponent from "./components/Buying/Myfavorites/SavedSellerComponent.vue";
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
        path: "/messages/:id?",
        component: ChatDetails,
        name: "ChatDetails",
    },
    {
        path: "/notifications",
        component: NotificationMessageComponent,
        name: "NotificationMessageComponent",
    },
    {
        path: "/archive",
        component: archiveMessageComponent,
        name: "archiveMessageComponent",
    },
    {
        path: "/settings/personal",
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
        path: "/settings/free",
        component: FreeSettingSubscrComponent,
        name: "FreeSettingSubscrComponent",
    },
    {
        path: "/settings/silver",
        component: SilverSettingSubscrComponent,
        name: "SilverSettingSubscrComponent",
    },
    {
        path: "/settings/gold",
        component: GoldSettingSubscrComponent,
        name: "GoldSettingSubscrComponent",
    },
    {
        path: "/settings/platinum",
        component: PlatinumSettingSubscrComponent,
        name: "PlatinumSettingSubscrComponent",
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
        path: "/offer_item/:id?",
        component: OfferProductComponent,
        name: "OfferCreate",
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
        path: "/selling/unsold",
        component: UnSoldProductsComponent,
        name: "UnSoldProductsComponent",
    },
    {
        path: "/buying/requestItem",
        component: RequestItemComponent,
        name: "RequestItemComponent",
    },
    {
        path: "/buying/requestedItem",
        component: MyRequestesItemComponent,
        name: "RequestEDItemComponent",
    },
    {
        path: "/buying/myrequests",
        component: MyequestsComponent,
        name: "MyequestsComponent",
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
    //     path: "/buying/myfavorites",
    //     component: myfavoritesComponent,
    //     name: 'myfavorites',
    // },
    {
        path: "/buying/saved",
        component: SavedProductComponent,
        name: 'SavedProductComponent',
    },
    {
        path: "/buying/saved-seller",
        component: SavedSellerComponent,
        name: 'SavedSellerComponent',
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
        path: "/selling/sell_item/:id?",
        component: CreateProductShippingComponent,
        name: "ProductCreateShipping",
    },
    {
        path: "/selling/offer_item/:id?",
        component: OfferProductShippingComponent,
        name: "OfferCreateShipping",
    },
    {
        path: "/offer_shipping/:id?",
        component: CreateOfferShippingComponent,
        name: "OfferCreateShipping",
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
        path: "/cart/done-shopping",
        component: DoneShoppingComponent,
        name: "DoneShoppingComponent",
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


    {
        path: "/vendorCategory/:query?",
        component: VendorComponent,
        name: "VendorComponent",
    },
    {
        path: "/requestedItems",
        component: RequestedComponent,
        name: "RequestedComponent",
    },

];

var router = new VueRouter({
    routes,
    mode: "history",
});

export default router;