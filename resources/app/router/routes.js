import { default as PageLogin } from "@/views/pages/auth/login/Main";
import { default as PageRegister } from "@/views/pages/auth/register/Main";
import { default as PageResetPassword } from "@/views/pages/auth/reset-password/Main";
import { default as PageForgotPassword } from "@/views/pages/auth/forgot-password/Main";
import { default as PageNotFound } from "@/views/pages/shared/404/Main";
import EcommercePosPage from "../pages/Dashboard/EcommercePosPage.vue";
import ChangePasswordPage from "../pages/Settings/ChangePasswordPage.vue";
import HistoryPage from "../pages/Settings/HistoryPage.vue";
import CartPage from "../pages/Ecommerce/CartPage.vue";
import ProductDetailsPage from "../pages/Ecommerce/ProductDetailsPage.vue";
import AccountSettingsPage from "../pages/Settings/AccountSettingsPage.vue";

import { default as PageDashboard } from "@/views/pages/private/dashboard/Main";
import { default as PageProfile } from "@/views/pages/private/profile/Main";

import { default as PageUsers } from "@/views/pages/private/users/Index";
import { default as PageUsersCreate } from "@/views/pages/private/users/Create";
import { default as PageUsersEdit } from "@/views/pages/private/users/Edit";

import abilities from "@/stub/abilities";

const routes = [
    {
        name: "home",
        path: "/",
        meta: { requiresAuth: false },
        component: EcommercePosPage,
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
        name: "panel",
        path: "/panel",
        children: [
            {
                name: "dashboard",
                path: "dashboard",
                meta: { requiresAuth: true },
                component: PageDashboard,
            },
            {
                name: "profile",
                path: "profile",
                meta: { requiresAuth: true, isOwner: true },
                component: PageProfile,
            },
            {
                path: "users",
                children: [
                    {
                        name: "users.list",
                        path: "list",
                        meta: {
                            requiresAuth: true,
                            requiresAbility: abilities.LIST_USER,
                        },
                        component: PageUsers,
                    },
                    {
                        name: "users.create",
                        path: "create",
                        meta: {
                            requiresAuth: true,
                            requiresAbility: abilities.CREATE_USER,
                        },
                        component: PageUsersCreate,
                    },
                    {
                        name: "users.edit",
                        path: ":id/edit",
                        meta: {
                            requiresAuth: true,
                            requiresAbility: abilities.EDIT_USER,
                        },
                        component: PageUsersEdit,
                    },
                ],
            },
        ],
    },
    {
        path: "/login",
        name: "login",
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
