<template>
  <div
    :class="[
      'lms-navbar top-0 right-0 left-0 transition-all h-auto z-[5] py-[20px] md:py-[30px]',
      className,
      { 'is-sticky': isSticky },
    ]"
    id="navbar"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1400px] 2xl:max-w-[1705px] mx-auto px-[12px]"
    >
      <div
        class="flex items-center relative flex-wrap lg:flex-nowrap justify-between lg:justify-start"
      >
        <RouterLink
          to="/"
          class="inline-block w-[150px] ltr:mr-[15px] rtl:ml-[15px]"
        >
          <img
            src="@/assets/images/lms-courses/logo.svg"
            alt="logo"
            class="inline-block dark:hidden"
          />
          <img
            src="@/assets/images/lms-courses/white-logo.svg"
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
          <ul class="flex mx-auto flex-row gap-[30px] xl:gap-[50px]">
            <li v-for="(item, index) in navItems" :key="index">
              <RouterLink
                :to="item.path"
                class="font-medium transition-all hover:text-primary-600 text-[15px] xl:text-md"
                :class="{
                  'text-primary-600 dark:text-primary-600': isActive(item.path),
                  '': !isActive(item.path),
                }"
              >
                {{ item.name }}
              </RouterLink>
            </li>
          </ul>
          <div class="flex items-center gap-[25px] xl:gap-[30px]">
            <RouterLink
              to="/checkout"
              class="inline-block relative text-gray-700 dark:text-gray-100 transition-all hover:text-primary-500 ltr:pr-[6px] rtl:pl-[6px]"
            >
              <i class="material-symbols-outlined"> shopping_cart </i>
              <span
                class="flex items-center justify-center absolute top-0 ltr:right-0 rtl:left-0 font-semibold bg-danger-500 rounded-full text-[8px] text-white w-[14px] h-[14px]"
              >
                01
              </span>
            </RouterLink>
            <a
              href="https://trezo-twcss.envytheme.com/"
              target="_blank"
              class="inline-block text-purple-600 lg:text-[15px] xl:text-[16px] py-[11px] px-[17px] rounded-md transition-all font-medium border border-purple-600 hover:text-white hover:bg-purple-500 hover:border-purple-500"
            >
              <span
                class="inline-block relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[29px] rtl:md:pr-[29px]"
              >
                <i
                  class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] md:!text-[24px]"
                >
                  person
                </i>
                Get Started
              </span>
            </a>
          </div>
        </div>
        <div
          class="bg-white dark:bg-[#0a0e19] rounded-[15px] border border-gray-200 dark:border-[#202c4b] mt-[20px] p-[20px] md:p-[30px] w-full hidden lg:!hidden"
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
                class="font-medium transition-all hover:text-primary-600"
                :class="{
                  'text-primary-600 dark:text-primary-600': isActive(item.path),
                  '': !isActive(item.path),
                }"
              >
                {{ item.name }}
              </RouterLink>
            </li>
          </ul>
          <div class="flex items-center gap-[20px] mt-[15px]">
            <RouterLink
              to="/checkout"
              class="inline-block relative text-gray-700 dark:text-gray-100 transition-all hover:text-primary-500 ltr:pr-[6px] rtl:pl-[6px]"
            >
              <i class="material-symbols-outlined !text-[22px]">
                shopping_cart
              </i>
              <span
                class="flex items-center justify-center absolute top-0 ltr:right-0 rtl:left-0 font-semibold bg-danger-500 rounded-full text-[8px] text-white w-[14px] h-[14px]"
              >
                01
              </span>
            </RouterLink>
            <a
              href="https://trezo-twcss.envytheme.com/"
              target="_blank"
              class="inline-block text-purple-600 lg:text-[15px] xl:text-[16px] py-[9px] md:py-[11px] px-[17px] rounded-md transition-all font-medium border border-purple-600 hover:text-white hover:bg-purple-500 hover:border-purple-500"
            >
              <span
                class="inline-block relative ltr:pl-[25px] rtl:pr-[25px] ltr:md:pl-[29px] rtl:md:pr-[29px]"
              >
                <i
                  class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] md:!text-[24px]"
                >
                  person
                </i>
                Get Started
              </span>
            </a>
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
      { name: "Why Choose Us", path: "/why-choose-us" },
      { name: "Courses", path: "/courses" },
      { name: "How It Works", path: "/how-it-works" },
      { name: "Pricing", path: "/pricing" },
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
