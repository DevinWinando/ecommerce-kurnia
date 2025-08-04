<template>
    <div :class="[
        'marketing-navbar top-0 right-0 left-0 transition-all h-auto z-50 bg-white py-[10px] fixed',
        { 'is-sticky': isSticky },
    ]" id="navbar">
        <div class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]">
            <div
                class="navbar relative bg-white py-[10px] md:py-[12px] lg:py-[8px] px-[15px] md:px-[20px] lg:px-[15px] transition-all">
                <div class="flex items-center flex-wrap lg:flex-nowrap justify-between lg:justify-start">
                    <!-- Logo -->
                    <RouterLink to="/" class="inline-block h-[40px] ltr:mr-[15px] rtl:ml-[15px]">
                        <img src="@/assets/images/logo-fixed.png" alt="logo" class="inline-block h-[40px]" />
                    </RouterLink>

                    <!-- Burger Menu -->
                    <button type="button" class="inline-block relative leading-none lg:hidden" id="navbar-burger-menu"
                        @click="toggleMenu" :class="{ active: isMenuOpen }">
                        <span class="h-[3px] w-[30px] my-[5px] block bg-black"></span>
                        <span class="h-[3px] w-[30px] my-[5px] block bg-black"></span>
                        <span class="h-[3px] w-[30px] my-[5px] block bg-black"></span>
                    </button>

                    <!-- Desktop Menu -->
                    <div class="hidden lg:flex items-center justify-content-between grow basis-full">
                        <div class="ml-4 flex items-center gap-[25px] xl:gap-[30px]">
                            <RouterLink to="/">About</RouterLink>
                            <RouterLink to="/shop">Shop</RouterLink>
                            <RouterLink to="/contact">Contact</RouterLink>
                        </div>
                        <div class="flex items-center justify-end grow basis-full">
                            <div class="relative w-[100%] flex mx-4 flex-row">
                                <input type="text" placeholder="Search here....." v-model="query"
                                    @keydown.enter="goToSearch"
                                    class="bg-gray-50 border border-gray-50 h-[44px] rounded-md w-full block text-black pt-[11px] pb-[12px] px-[13px] md:px-[16px] placeholder:text-gray-500 outline-0">
                                <button type="button"
                                    class="absolute text-slate-500 mt-[2px] ltr:right-[13px] ltr:md:right-[15px] rtl:left-[13px] rtl:md:left-[15px] top-1/2 -translate-y-1/2">
                                    <i class="material-symbols-outlined !text-[20px]">
                                        search
                                    </i>
                                </button>
                            </div>
                            <div class="mr-6 flex items-center ml-3">
                                <RouterLink to="/cart" class="text-gray-600 hover:text-gray-800 transition-all">
                                    <i class="material-symbols-outlined">shopping_cart</i>
                                </RouterLink>
                            </div>
                            <AdminProfile v-if="authStore.user && authStore.user.hasOwnProperty('id')" />
                            <div class="flex items-center gap-[25px] xl:gap-[30px]" v-if="!authStore.user">
                                <a href="/login"
                                    class="inline-block text-orange-600 transition-all hover:text-orange-700">
                                    Login
                                </a>
                                <a href="/register"
                                    class="inline-block text-[#7d0909] py-[10.5px] px-[28px] rounded-[100px] transition-all font-medium border border-[#7d0909] hover:text-white hover:bg-[#7d0909] hover:border-[#7d0909]">
                                    Register
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Mobile Menu -->
                    <div class="bg-white rounded-[15px] p-[20px] md:p-[30px] w-full hidden lg:!hidden absolute top-[100%] left-0 right-0"
                        id="navbar-collapse" :class="{ active: isMenuOpen }">
                        <div class="ml-4 flex flex-col items-center gap-[25px] xl:gap-[30px]">
                            <RouterLink to="/">About</RouterLink>
                            <RouterLink to="/shop">Shop</RouterLink>
                            <RouterLink to="/contact">Contact</RouterLink>
                        </div>
                        <AdminProfile v-if="authStore.user && authStore.user.hasOwnProperty('id')" />
                        <div class="flex items-center mt-4 justify-between gap-[25px] xl:gap-[30px]" v-if="!authStore.user">
                            <a href="/login" class="inline-block text-[#7d0909] py-[10.5px] px-[28px] rounded-[100px] transition-all font-medium border border-[#7d0909] hover:text-white hover:bg-[#7d0909] hover:border-[#7d0909]">
                                Login
                            </a>
                            <a href="/register"
                                class="inline-block text-[#7d0909] py-[10.5px] px-[28px] rounded-[100px] transition-all font-medium border border-[#7d0909] hover:text-white hover:bg-[#7d0909] hover:border-[#7d0909]">
                                Register
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import AdminProfile from "@/components/Layouts/TopHeader/AdminProfile.vue";
import { defineProps, ref, onMounted, watch } from "vue";
import { RouterLink, useRouter } from "vue-router";
import { useAuthStore } from "@/stores/auth";

const authStore = useAuthStore();

const isSticky = ref(false);
const isMenuOpen = ref(false);
const query = ref("");
const router = useRouter();

const toggleMenu = () => {
    isMenuOpen.value = !isMenuOpen.value;
};

onMounted(() => {
    let scrollPos = window.scrollY;
    isSticky.value = scrollPos >= 0;
});

function goToSearch() {
    if (!query.value || query.value.trim() === "") {
        return;
    }
    const searchQuery = query.value.trim();
    if (searchQuery) {
        router.push({ path: '/shop/search', query: { q: searchQuery } })
    }
}
</script>
