import { default as PageLogin } from "@/views/pages/auth/login/Main";
import { default as PageRegister } from "@/views/pages/auth/register/Main";
import { default as PageResetPassword } from "@/views/pages/auth/reset-password/Main";
import { default as PageForgotPassword } from "@/views/pages/auth/forgot-password/Main";
import { default as PageNotFound } from "@/views/pages/shared/404/Main";
import EcommercePosPage from "../pages/Dashboard/EcommercePosPage.vue";
import ChangePasswordPage from "../pages/Settings/ChangePasswordPage.vue";
import EcommercePosAboutUsPage from "../pages/Dashboard/EcommercePosAboutUsPage.vue";
import ContactUs from "@/components/FrontPages/Common/ContactUs.vue";
import EcommerceCategoriesPage from "@/pages/Dashboard/EcommerceCategoriesPage.vue";
import EcommerceSearchPage from "@/pages/Dashboard/EcommerceSearchPage.vue";
import HistoryPage from "../pages/Settings/HistoryPage.vue";
import CartPage from "../pages/Ecommerce/CartPage.vue";
import ProductDetailsPage from "../pages/Ecommerce/ProductDetailsPage.vue";
import AccountSettingsPage from "../pages/Settings/AccountSettingsPage.vue";
import ChatCustomer from "@/pages/Dashboard/ChatCustomer.vue";
import ChatAdmin from "@/pages/Dashboard/ChatAdmin.vue";
import ListRoomChat from "@/pages/Dashboard/ListRoomChat.vue";

import { default as PageDashboard } from "@/views/pages/private/dashboard/Main";
import { default as PageProfile } from "@/views/pages/private/profile/Main";
import RecentOrders from "@/components/Dashboard/Ecommerce/RecentOrders.vue";

import { default as PageUsers } from "@/views/pages/private/users/Index";
import { default as PageUsersCreate } from "@/views/pages/private/users/Create";
import { default as PageUsersEdit } from "@/views/pages/private/users/Edit";

import abilities from "@/stub/abilities";

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
        name: "settingsContent",
        path: "/admin/settings/content",
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
