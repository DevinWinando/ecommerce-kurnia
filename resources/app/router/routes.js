// Auth Pages
import { default as PageLogin } from "@/views/pages/auth/login/Main";
import { default as PageRegister } from "@/views/pages/auth/register/Main";
import { default as PageResetPassword } from "@/views/pages/auth/reset-password/Main";
import { default as PageForgotPassword } from "@/views/pages/auth/forgot-password/Main";
import { default as PageNotFound } from "@/views/pages/shared/404/Main";

// Dashboard Pages
import EcommercePosPage from "../pages/Dashboard/EcommercePosPage.vue";
import EcommercePosAboutUsPage from "../pages/Dashboard/EcommercePosAboutUsPage.vue";
import EcommerceCategoriesPage from "@/pages/Dashboard/EcommerceCategoriesPage.vue";
import EcommerceSearchPage from "@/pages/Dashboard/EcommerceSearchPage.vue";
import { default as PageDashboard } from "@/views/pages/private/dashboard/Main";
import RecentOrders from "@/components/Dashboard/Ecommerce/RecentOrders.vue";

// Ecommerce Pages
import CartPage from "../pages/Ecommerce/CartPage.vue";
import ProductDetailsPage from "../pages/Ecommerce/ProductDetailsPage.vue";
import OrdersPage from "../pages/Ecommerce/OrdersPage.vue";
import OrderDetailsPage from "../pages/Ecommerce/OrderDetailsPage.vue";

// Settings Pages
import ChangePasswordPage from "../pages/Settings/ChangePasswordPage.vue";
import HistoryPage from "../pages/Settings/HistoryPage.vue";
import AccountSettingsPage from "../pages/Settings/AccountSettingsPage.vue";

// Chat Pages
import ChatCustomer from "@/pages/Dashboard/ChatCustomer.vue";
import ChatAdmin from "@/pages/Dashboard/ChatAdmin.vue";

// Common Components
import ContactUs from "@/components/FrontPages/Common/ContactUs.vue";

const routes = [
    {
        name: "home",
        path: "/",
        meta: { requiresAuth: false },
        component: EcommercePosAboutUsPage,
    },
    {
        path: "/shop",
        meta: { requiresAuth: false },
        component: EcommercePosPage,
    },
    {
        path: "/shop/categories/:categoryId",
        meta: { requiresAuth: false },
        component: EcommerceCategoriesPage,
    },
    {
        path: "/shop/search",
        meta: { requiresAuth: false },
        component: EcommerceSearchPage,
    },
    {
        path: "/contact",
        name: "ContactUsPage",
        meta: { requiresAuth: false },
        component: ContactUs,
    },
    {
        path: "/settings/change-password",
        name: "ChangePasswordPage",
        meta: { requiresAuth: true },
        component: ChangePasswordPage,
    },
    {
        path: "/settings/history",
        name: "HistoryPage",
        meta: { requiresAuth: true },
        component: HistoryPage,
    },
    {
        path: "/cart",
        name: "CartPage",
        meta: { requiresAuth: true },
        component: CartPage,
    },
    {
        path: "/orders",
        name: "OrdersPage",
        meta: { requiresAuth: true },
        component: OrdersPage,
    },
    {
        path: "/orders/:id",
        name: "OrderDetailsPage",
        meta: { requiresAuth: true },
        component: OrderDetailsPage,
    },
    {
        path: "/ecommerce/product-details",
        name: "ProductDetailsPage",
        meta: { requiresAuth: false, isPublicAuthPage: true },
        component: ProductDetailsPage,
    },
    {
        path: "/settings",
        name: "AccountSettingsPage",
        meta: { requiresAuth: true },
        component: AccountSettingsPage,
    },
    {
        name: "dashboard",
        path: "/admin",
        meta: { requiresAuth: true, adminRoute: true },
        component: PageDashboard,
    },
    {
        name: "dashboard",
        path: "/admin/dashboard",
        meta: { requiresAuth: true, adminRoute: true },
        component: PageDashboard,
    },
    {
        name: "settingsBanner",
        path: "/admin/settings/banner",
        meta: { requiresAuth: true, adminRoute: true },
        component: RecentOrders,
    },
    {
        name: "ChatCustomer",
        path: "/chat",
        meta: { requiresAuth: true },
        component: ChatCustomer,
    },
    {
        name: "ListRoomChat",
        path: "/admin/chat/rooms",
        meta: { requiresAuth: true, adminRoute: true },
        component: ChatAdmin,
    },
    {
        name: "ChatAdmin",
        path: "/admin/chat/:id",
        meta: { requiresAuth: true, adminRoute: true },
        component: ChatAdmin,
    },
    {
        name: "login",
        path: "/login",
        meta: { requiresAuth: false, isPublicAuthPage: true },
        component: PageLogin,
    },
    {
        path: "/register",
        name: "register",
        meta: { requiresAuth: false, isPublicAuthPage: true },
        component: PageRegister,
    },
    {
        path: "/reset-password",
        name: "resetPassword",
        meta: { requiresAuth: false, isPublicAuthPage: true },
        component: PageResetPassword,
    },
    {
        path: "/forgot-password",
        name: "forgotPassword",
        meta: { requiresAuth: false, isPublicAuthPage: true },
        component: PageForgotPassword,
    },
    {
        path: "/:catchAll(.*)",
        name: "notFound",
        meta: { requiresAuth: false },
        component: PageNotFound,
    },
];

export default routes;
