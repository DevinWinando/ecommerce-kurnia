<template>
  <div
    :class="[
      'school-navbar fixed top-0 right-0 left-0 transition-all h-auto z-[5] py-[20px] md:py-[30px] lg:py-[35px]',
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
            src="@/assets/images/school/logo.svg"
            alt="logo"
            class="inline-block dark:hidden"
          />
          <img
            src="@/assets/images/school/white-logo.svg"
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
            class="h-[3px] w-[30px] my-[5px] block bg-dark dark:bg-white"
          ></span>
          <span
            class="h-[3px] w-[30px] my-[5px] block bg-dark dark:bg-white"
          ></span>
          <span
            class="h-[3px] w-[30px] my-[5px] block bg-dark dark:bg-white"
          ></span>
        </button>

        <div class="hidden lg:flex items-center grow basis-full basis-auto">
          <ul class="flex mx-auto flex-row gap-[30px] xl:gap-[40px]">
            <li v-for="(item, index) in navItems" :key="index">
              <template v-if="item.isExternal">
                <a
                  :href="item.path"
                  class="font-medium transition-all hover:text-primary-500"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {{ item.name }}
                </a>
              </template>
              <template v-else>
                <RouterLink
                  :to="item.path"
                  class="font-medium transition-all hover:text-primary-500"
                  :class="{
                    'text-primary-500': isActive(item.path),
                    '': !isActive(item.path),
                  }"
                >
                  {{ item.name }}
                </RouterLink>
              </template>
            </li>
          </ul>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600"
            target="_blank"
          >
            Start Your Free Trial
          </a>
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
              <template v-if="item.isExternal">
                <a
                  :href="item.path"
                  class="font-medium transition-all hover:text-primary-500"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  {{ item.name }}
                </a>
              </template>
              <template v-else>
                <RouterLink
                  :to="item.path"
                  class="font-medium transition-all hover:text-primary-500"
                  :class="{
                    'text-primary-500': isActive(item.path),
                    '': !isActive(item.path),
                  }"
                >
                  {{ item.name }}
                </RouterLink>
              </template>
            </li>
          </ul>
          <a
            href="https://trezo-twcss.envytheme.com/"
            class="inline-block font-medium md:text-base rounded-[7px] bg-primary-500 text-white py-[10.5px] md:py-[11.5px] px-[22px] md:px-[25px] transition-all hover:bg-primary-600 mt-[15px]"
            target="_blank"
          >
            Start Your Free Trial
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from "vue";
import { useRoute } from "vue-router";

interface NavItem {
  name: string;
  path: string;
  isExternal: boolean;
}

export default defineComponent({
  name: "Navbar",
  props: {
    className: {
      type: String,
      default: "",
    },
  },
  setup(props) {
    const route = useRoute();
    const isSticky = ref(false);
    const isMenuOpen = ref(false);
    const navItems = ref<NavItem[]>([
      { name: "Home", path: "/", isExternal: false },
      { name: "About Trezo", path: "/about", isExternal: false },
      { name: "Features", path: "/features", isExternal: false },
      {
        name: "Dashboard",
        path: "https://trezo-twcss.envytheme.com/",
        isExternal: true,
      },
      { name: "Pricing", path: "/pricing", isExternal: false },
    ]);

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
      route,
    };
  },
});
</script>
