<template>
  <div
    :class="[
      'store-analysis-navbar fixed top-0 right-0 left-0 transition-all h-auto z-[5] py-[20px] md:py-[30px] lg:py-[40px]',
      className,
      { 'is-sticky': isSticky },
    ]"
    id="navbar"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="navbar relative bg-white/76 dark:bg-dark rounded-[100px] py-[10px] md:py-[12px] lg:py-[8px] px-[15px] md:px-[20px] lg:px-[15px] transition-all"
      >
        <div
          class="flex items-center flex-wrap lg:flex-nowrap justify-between lg:justify-start"
        >
          <RouterLink
            to="/"
            class="inline-block w-[125px] ltr:mr-[15px] rtl:ml-[15px]"
          >
            <img
              src="@/assets/images/store-analysis/logo.svg"
              alt="logo"
              class="inline-block dark:hidden"
            />
            <img
              src="@/assets/images/store-analysis/white-logo.svg"
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
              class="group inline-block font-medium md:text-base rounded-[30px] bg-primary-500 text-white py-[11.5px] md:py-[12.5px] lg:py-[13.5px] px-[22px] md:px-[25px] relative z-[1]"
              target="_blank"
            >
              Get Started - <span class="font-normal">It’s Free</span>
              <span
                class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
                style="
                  background: linear-gradient(180deg, #9caaff 0%, #4936f5 100%);
                "
              ></span>
            </a>
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
                      'text-primary-600': isActive(item.path),
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
              class="group inline-block font-medium md:text-base rounded-[30px] bg-primary-500 text-white py-[11.5px] md:py-[12.5px] lg:py-[13.5px] px-[22px] md:px-[25px] relative z-[1] mt-[15px]"
              target="_blank"
            >
              Get Started - <span class="font-normal">It’s Free</span>
              <span
                class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[30px] transition-all group-hover:opacity-0"
                style="
                  background: linear-gradient(180deg, #9caaff 0%, #4936f5 100%);
                "
              ></span>
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
      { name: "Features", path: "/features", isExternal: false },
      { name: "Testimonials", path: "/testimonials", isExternal: false },
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
