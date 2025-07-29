<template>
  <footer
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[160px]"
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
          <p>
            A modern sales enablement platform that helps teams track leads,
            manage pipelines, and close deals faster — all from one clean
            dashboard.
          </p>
        </div>
        <div
          class="ltr:lg:pl-[60px] rtl:lg:pr-[60px] ltr:xl:pl-[195px] rtl:xl:pr-[195px]"
        >
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold"
          >
            Quick Links
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Home
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/features"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Features
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/pricing"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Pricing
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/testimonials"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Testimonials
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Documentation
              </a>
            </li>
          </ul>
        </div>

        <div
          class="ltr:lg:pl-[20px] rtl:lg:pr-[20px] ltr:xl:pl-[135px] rtl:xl:pr-[135px]"
        >
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold"
          >
            Resources
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Help Center
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Getting Started
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Integration Docs
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                API Reference
              </a>
            </li>
            <li class="mb-[10px] last:mb-0">
              <a
                href="https://trezo-docs.envytheme.com/"
                target="_blank"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-500"
              >
                Community Forum
              </a>
            </li>
          </ul>
        </div>

        <div class="ltr:xl:pl-[80px] rtl:xl:pr-[80px]">
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold"
          >
            Social Media
          </h3>
          <ul>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all hover:text-primary-500"
                target="_blank"
              >
                <img
                  src="@/assets/images/store-analysis/icons/facebook.svg"
                  alt="facebook"
                />
                Facebook
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all hover:text-primary-500"
                target="_blank"
              >
                <img src="@/assets/images/store-analysis/icons/x.svg" alt="x" />
                Twitter/X
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all hover:text-primary-500"
                target="_blank"
              >
                <img
                  src="@/assets/images/store-analysis/icons/linkedin.svg"
                  alt="linkedin"
                />
                LinkedIn
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[12px] last:mb-0">
              <a
                href="#"
                class="flex items-center gap-[10px] transition-all hover:text-primary-500"
                target="_blank"
              >
                <img
                  src="@/assets/images/store-analysis/icons/instagram.svg"
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
      class="py-[25px] md:py-[30px] border-t border-gray-100 dark:border-gray-900"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:gap-[25px]">
        <div class="text-center ltr:lg:text-left rtl:lg:text-right">
          <p>
            © <span class="text-purple-500">Trezo</span> is Proudly Owned by
            <a
              href="https://envytheme.com/"
              target="_blank"
              class="text-primary-600 transition-all hover:underline"
            >
              EnvyTheme
            </a>
          </p>
        </div>

        <div class="text-center lg:flex items-center justify-end gap-[15px]">
          <a
            href="#"
            class="transition-all hover:text-primary-500 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Terms of Service
          </a>
          <div
            class="w-[1px] h-[15px] bg-gray-300 dark:bg-gray-800 hidden lg:block"
          ></div>
          <a
            href="#"
            class="transition-all hover:text-primary-500 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Privacy Policy
          </a>
          <div
            class="w-[1px] h-[15px] bg-gray-300 dark:bg-gray-800 hidden lg:block"
          ></div>
          <a
            href="#"
            class="transition-all hover:text-primary-500 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
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
