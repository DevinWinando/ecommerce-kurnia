<template>
  <div
    :class="[
      'ecommerce-navbar top-0 right-0 left-0 transition-all h-auto z-[5] py-[20px] md:py-[30px] lg:py-[40px]',
      className,
      { 'is-sticky': isSticky },
    ]"
    id="navbar"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="flex items-center relative flex-wrap lg:flex-nowrap justify-between lg:justify-start"
      >
        <RouterLink
          to="/"
          class="inline-block w-[150px] ltr:mr-[15px] rtl:ml-[15px]"
        >
          <img
            src="@/assets/images/ecommerce/logo.svg"
            alt="logo"
            class="inline-block"
          />
        </RouterLink>
        <button
          type="button"
          class="inline-block relative leading-none lg:hidden"
          id="navbar-burger-menu"
          @click="toggleMenu"
          :class="{ active: isMenuOpen }"
        >
          <span class="h-[3px] w-[30px] my-[5px] block bg-white"></span>
          <span class="h-[3px] w-[30px] my-[5px] block bg-white"></span>
          <span class="h-[3px] w-[30px] my-[5px] block bg-white"></span>
        </button>
        <div class="hidden lg:flex items-center grow basis-full basis-auto">
          <!-- For Big Devices -->
          <ul class="flex mx-auto flex-row gap-[30px] xl:gap-[50px]">
            <li v-for="(item, index) in navItems" :key="index">
              <RouterLink
                :to="item.path"
                class="font-medium transition-all hover:text-secondary-200"
                :class="{
                  'text-secondary-200': isActive(item.path),
                  'text-gray-50': !isActive(item.path),
                }"
              >
                {{ item.name }}
              </RouterLink>
            </li>
          </ul>
          <RouterLink
            to="/pricing"
            class="inline-block py-[9px] px-[25px] md:py-[10.5px] md:px-[30px] font-medium text-primary-500 bg-white rounded-[100px] border border-white transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white"
          >
            Get Started
          </RouterLink>
        </div>
        <div
          class="bg-black border border-gray-500 rounded-[15px] mt-[15px] p-[20px] md:p-[30px] w-full hidden lg:!hidden"
          id="navbar-collapse"
          :class="{ active: isMenuOpen }"
        >
          <!-- For Responsive -->
          <ul>
            <li
              v-for="(item, index) in navItems"
              :key="index"
              class="my-[14px] md:my-[16px] first:mt-0 last:mb-0"
            >
              <RouterLink
                :to="item.path"
                class="font-medium transition-all hover:text-secondary-200"
                :class="{
                  'text-secondary-200': isActive(item.path),
                  'text-gray-50': !isActive(item.path),
                }"
              >
                {{ item.name }}
              </RouterLink>
            </li>
          </ul>
          <RouterLink
            to="/pricing"
            class="inline-block py-[9px] px-[25px] md:py-[10.5px] md:px-[30px] font-medium text-primary-500 bg-white rounded-[100px] border border-white transition-all hover:bg-primary-500 hover:border-primary-500 hover:text-white mt-[15px]"
          >
            Get Started
          </RouterLink>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import { useRoute } from "vue-router";

export default defineComponent({
  name: "Navbar",
  props: ["className"],
  setup() {
    const route = useRoute();
    const isSticky = ref(false);
    const isMenuOpen = ref(false);
    const navItems = [
      { name: "Home", path: "/" },
      { name: "Features", path: "/features" },
      { name: "Use Cases", path: "/use-cases" },
      { name: "Testimonials", path: "/testimonials" },
      { name: "Pricing", path: "/pricing" },
      { name: "Blog", path: "/blog" },
    ];

    const isActive = (path: string) => {
      return route.path === path;
    };

    const toggleMenu = () => {
      isMenuOpen.value = !isMenuOpen.value;
    };

    onMounted(() => {
      window.addEventListener("scroll", () => {
        let scrollPos = window.scrollY;
        isSticky.value = scrollPos >= 100;
      });
    });

    return {
      isSticky,
      navItems,
      isActive,
      isMenuOpen,
      toggleMenu,
    };
  },
});
</script>
