<template>
  <footer
    class="py-[70px] md:py-[90px] lg:py-[100px] xl:py-[120px] 2xl:py-[140px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px]">
        <div
          class="ltr:lg:-mr-[50px] rtl:lg:-ml-[50px] ltr:xl:-mr-[100px] rtl:xl:-ml-[100px]"
        >
          <RouterLink
            to="/"
            class="inline-block max-w-[132px] mb-[20px] md:mb-[25px]"
          >
            <img
              src="@/assets/images/sales/logo.svg"
              alt="logo"
              class="inline-block dark:hidden"
            />
            <img
              src="@/assets/images/sales/white-logo.svg"
              alt="logo"
              class="hidden dark:inline-block"
            />
          </RouterLink>
          <p class="text-[#7a857d]">
            A modern sales enablement platform that helps teams track leads,
            manage pipelines, and close deals faster — all from one clean
            dashboard.
          </p>
        </div>
        <div
          class="ltr:lg:pl-[60px] rtl:lg:pr-[60px] ltr:xl:pl-[200px] rtl:xl:pr-[200px]"
        >
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-[#06201B] dark:!text-white"
          >
            Quick Links
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Home
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/features"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Features
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/pricing"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Pricing Plans
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/use-cases"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Use Cases
              </RouterLink>
            </li>
          </ul>
        </div>
        <div
          class="ltr:lg:pl-[20px] rtl:lg:pr-[20px] ltr:xl:pl-[135px] rtl:xl:pr-[135px]"
        >
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-[#06201B] dark:!text-white"
          >
            Resources
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Help Center
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Documentation
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-twcss.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Get Started
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-twcss.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all text-[#7a857d] hover:text-lime-600"
              >
                Dashboard
              </a>
            </li>
          </ul>
        </div>

        <div class="ltr:xl:pl-[80px] rtl:xl:pr-[80px]">
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-[#06201B] dark:!text-white"
          >
            Social Media
          </h3>
          <ul>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all text-[#7a857d] hover:text-lime-600"
                target="_blank"
              >
                <img
                  src="@/assets/images/sales/icons/facebook.svg"
                  alt="facebook"
                />
                Facebook
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all text-[#7a857d] hover:text-lime-600"
                target="_blank"
              >
                <img src="@/assets/images/sales/icons/x.svg" alt="x" />
                Twitter/X
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all text-[#7a857d] hover:text-lime-600"
                target="_blank"
              >
                <img
                  src="@/assets/images/sales/icons/linkedin.svg"
                  alt="linkedin"
                />
                LinkedIn
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all text-[#7a857d] hover:text-lime-600"
                target="_blank"
              >
                <img
                  src="@/assets/images/sales/icons/instagram.svg"
                  alt="instagram"
                />
                Instagram
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div
      class="py-[25px] md:py-[30px] border-t border-[#ebebe0] dark:border-gray-900"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:gap-[25px]">
        <div class="text-center ltr:lg:text-left rtl:lg:text-right">
          <p class="text-[#7a857d]">
            © <span class="text-primary-500">Trezo</span> is Proudly Owned by
            <a
              href="https://envytheme.com/"
              target="_blank"
              class="text-lime-900 dark:text-lime-700 transition-all hover:underline"
            >
              EnvyTheme
            </a>
          </p>
        </div>
        <div class="text-center lg:flex items-center justify-end gap-[15px]">
          <a
            href="#"
            class="transition-all text-[#7a857d] hover:text-lime-600 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Terms of Service
          </a>
          <div
            class="w-[1px] h-[15px] bg-[#ebebe0] dark:bg-gray-800 hidden lg:block"
          ></div>
          <a
            href="#"
            class="transition-all text-[#7a857d] hover:text-lime-600 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Privacy Policy
          </a>
          <div
            class="w-[1px] h-[15px] bg-[#ebebe0] dark:bg-gray-800 hidden lg:block"
          ></div>
          <a
            href="#"
            class="transition-all text-[#7a857d] hover:text-lime-600 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Cookie Policy
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "Footer",
});
</script>
