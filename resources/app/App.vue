<template>
    <div>
        <div>
            <!-- <LeftSidebar v-if="shouldShowSidebar && !isNotFound" />
            <TopHeader v-if="shouldShowHeader && !isNotFound" /> -->

            <div :class="[
                'main-content transition-all flex flex-col overflow-hidden min-h-screen !px-0 !pt-4',
                {
                    // active: stateStoreInstance.open,
                    // 'padding-minus': shouldShowPaddingZero || isNotFound,
                },
            ]">
                <Navbar className="fixed w-full" />
                <router-view />
                <!-- <div class="grow"></div> -->
                <!-- <MainFooter v-if="shouldShowFooter && !isNotFound" /> -->
            </div>
            <!-- <AddNewTaskPopup />
            <AddNewCardPopup /> -->
        </div>
    </div>
</template>

<script setup>
import {
    ref,
    onMounted,
    watchEffect,
    computed,
    watch,
    onBeforeMount,
} from "vue";
import stateStore from "./utils/store";
import { useRoute } from "vue-router";
const direction = ref("ltr");

import LeftSidebar from "./components/Layouts/LeftSidebar.vue";
import TopHeader from "./components/Layouts/TopHeader/index.vue";
import MainFooter from "./components/Layouts/MainFooter.vue";
import AddNewTaskPopup from "./components/Layouts/AddNewTaskPopup.vue";
import AddNewCardPopup from "./components/Layouts/AddNewCardPopup.vue";
import { useAuthStore } from "@/stores/auth";
import { useAlertStore } from "@/stores";
import Navbar from "./components/FrontPages/Common/Navbar.vue";

const authStore = useAuthStore();
const alertStore = useAlertStore();

const stateStoreInstance = stateStore;
// const isLoading = ref(true);
const route = useRoute();

const hiddenRoutes = [
    "/",
    "/features",
    "/team",
    "/faq",
    "/contact",
    "/authentication/sign-in",
    "/authentication/sign-up",
    "/authentication/forgot-password",
    "/authentication/reset-password",
    "/authentication/confirm-email",
    "/authentication/lock-screen",
    "/authentication/logout",
    "/extra-pages/coming-soon",
    "/ecommerce-pos",
    "/shop",
    "/about-us",
    "/faq",
    "/settings",
    "/settings/change-password",
    "/ecommerce/product-details",
    "/cart",
    '/settings/history',
    "/login",
    "/register",
];

const hiddenNavbarRoutes = [
    "/login",
    "/register",
];

const shouldShowNavbar = computed(() => {
    return !hiddenNavbarRoutes.includes(route.path);
});

const shouldShowSidebar = computed(
    () => !hiddenRoutes.includes(route.path)
);
const shouldShowPaddingZero = computed(() =>
    hiddenRoutes.includes(route.path)
);
const shouldShowHeader = computed(() => !hiddenRoutes.includes(route.path));
const shouldShowFooter = computed(() => !hiddenRoutes.includes(route.path));

// Handle wildcard path for 404-like routes
const isNotFound = computed(() =>
    route.matched.some(
        (record) => record.path === "/:pathMatch(.)"
    )
);

onMounted(() => {
    document.documentElement.classList.remove('dark')

    watchEffect(() => {
        if (stateStore.open) {
            document.body.classList.remove("sidebar-show");
            document.body.classList.add("sidebar-hide");
        } else {
            document.body.classList.remove("sidebar-hide");
            document.body.classList.add("sidebar-show");
        }
    });
});

watch(
    direction,
    (newDirection) => {
        document.body.setAttribute("dir", newDirection);
    },
    { immediate: true }
);

onBeforeMount(() => {
    if (route.query.hasOwnProperty('verified') && route.query.verified) {
        alertStore.success(trans('global.phrases.email_verified'));
    }
});
</script>
