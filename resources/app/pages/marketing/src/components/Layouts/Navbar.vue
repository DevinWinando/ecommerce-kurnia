<template>
  <div
    :class="[
      'marketing-navbar top-0 right-0 left-0 transition-all h-auto z-[5] py-[20px] md:py-[30px]',
      className,
      { 'is-sticky': isSticky },
    ]"
    id="navbar"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="navbar relative bg-white dark:bg-[#0a0e19] rounded-[100px] py-[10px] md:py-[12px] lg:py-[8px] px-[15px] md:px-[20px] lg:px-[15px] transition-all"
      >
        <div
          class="flex items-center flex-wrap lg:flex-nowrap justify-between lg:justify-start"
        >
          <RouterLink
            to="/"
            class="inline-block w-[125px] ltr:mr-[15px] rtl:ml-[15px]"
          >
            <img
              src="@/assets/images/marketing/logo.svg"
              alt="logo"
              class="inline-block dark:hidden"
            />
            <img
              src="@/assets/images/marketing/white-logo.svg"
              alt="logo"
              class="hidden dark:inline-block"
            />
          </RouterLink>
          <button
            type="button"
            class="inline-block relative leading-none lg:hidden"
            id="navbar-burger-menu"
            @click="toggleMenu"
            :class="{ active: isMenuOpen }"
          >
            <span
              class="h-[3px] w-[30px] my-[5px] block bg-black dark:bg-white"
            ></span>
            <span
              class="h-[3px] w-[30px] my-[5px] block bg-black dark:bg-white"
            ></span>
            <span
              class="h-[3px] w-[30px] my-[5px] block bg-black dark:bg-white"
            ></span>
          </button>

          <div class="hidden lg:flex items-center grow basis-full basis-auto">
            <ul class="flex mx-auto flex-row gap-[30px] xl:gap-[45px]">
              <li v-for="(item, index) in navItems" :key="index">
                <RouterLink
                  :to="item.path"
                  class="font-medium transition-all hover:text-orange-600"
                  :class="{
                    'text-orange-600 dark:text-orange-600': isActive(item.path),
                    '': !isActive(item.path),
                  }"
                >
                  {{ item.name }}
                </RouterLink>
              </li>
            </ul>
            <div class="flex items-center gap-[25px] xl:gap-[30px]">
              <a
                href="https://trezo-bs.envytheme.com/authentication"
                target="_blank"
                class="inline-block text-orange-600 transition-all hover:text-orange-700"
              >
                Login
              </a>
              <a
                href="https://trezo-twcss.envytheme.com/"
                target="_blank"
                class="inline-block text-orange-600 py-[10.5px] px-[28px] rounded-[100px] transition-all font-medium border border-orange-600 hover:text-white hover:bg-orange-500 hover:border-orange-500"
              >
                Get Started
              </a>
            </div>
          </div>

          <div
            class="bg-white dark:bg-[#0a0e19] rounded-[15px] p-[20px] md:p-[30px] w-full hidden lg:!hidden absolute top-[100%] left-0 right-0"
            id="navbar-collapse"
            :class="{ active: isMenuOpen }"
          >
            <ul>
              <li
                v-for="(item, index) in navItems"
                :key="index"
                class="my-[14px] md:my-[16px] first:mt-0 last:mb-0"
              >
                <RouterLink
                  :to="item.path"
                  class="font-medium transition-all hover:text-orange-600"
                  :class="{
                    'text-orange-600 dark:text-orange-600': isActive(item.path),
                    '': !isActive(item.path),
                  }"
                >
                  {{ item.name }}
                </RouterLink>
              </li>
            </ul>
            <div class="flex items-center gap-[20px] mt-[15px]">
              <a
                href="https://trezo-twcss.envytheme.com/"
                target="_blank"
                class="inline-block text-orange-600 py-[10.5px] px-[28px] rounded-[100px] transition-all font-medium border border-orange-600 hover:text-white hover:bg-orange-500 hover:border-orange-500"
              >
                Get Started
              </a>
              <a
                href="https://trezo-bs.envytheme.com/authentication"
                target="_blank"
                class="inline-block text-orange-600 transition-all hover:text-orange-700"
              >
                Login
              </a>
            </div>
          </div>
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
