<template>
  <footer
    class="bg-[#f0eedf] dark:bg-[#0a0e19] rounded-[25px] py-[70px] md:py-[90px] lg:py-[110px] xl:py-[135px] mx-auto xl:max-w-[1400px] 2xl:max-w-[1680px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-[25px]">
        <div class="ltr:xl:-mr-[35px] rtl:xl:-ml-[35px]">
          <RouterLink
            to="/"
            class="inline-block max-w-[132px] mb-[20px] md:mb-[23px]"
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
          <p>
            Empowering learners worldwide with expert-led online courses,
            flexible learning paths, and career-boosting certifications —
            anytime, anywhere.
          </p>
          <div class="mt-[20px] md:mt-[35px]">
            <a
              href="#"
              target="_blank"
              class="inline-block leading-none text-[20px] text-primary-600 transition-all hover:text-primary-500 ltr:mr-[5px] rtl:ml-[5px] ltr:last:mr-0 rtl:last:ml-0"
            >
              <i class="ri-facebook-fill"></i>
            </a>
            <a
              href="#"
              target="_blank"
              class="inline-block leading-none text-[20px] text-primary-600 transition-all hover:text-primary-500 ltr:mr-[5px] rtl:ml-[5px] ltr:last:mr-0 rtl:last:ml-0"
            >
              <i class="ri-twitter-x-fill"></i>
            </a>
            <a
              href="#"
              target="_blank"
              class="inline-block leading-none text-[20px] text-primary-600 transition-all hover:text-primary-500 ltr:mr-[5px] rtl:ml-[5px] ltr:last:mr-0 rtl:last:ml-0"
            >
              <i class="ri-linkedin-fill"></i>
            </a>
            <a
              href="#"
              target="_blank"
              class="inline-block leading-none text-[20px] text-primary-600 transition-all hover:text-primary-500 ltr:mr-[5px] rtl:ml-[5px] ltr:last:mr-0 rtl:last:ml-0"
            >
              <i class="ri-dribbble-fill"></i>
            </a>
          </div>
        </div>

        <div class="ltr:xl:pl-[130px] rtl:xl:pr-[130px]">
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-gray-700 dark:!text-gray-100"
          >
            Popular Categories
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/course-details"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Web Development
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/course-details"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Data Science
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/course-details"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Analysis & Reporting
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/course-details"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Business & Marketing
              </RouterLink>
            </li>
          </ul>
        </div>

        <div class="ltr:xl:pl-[130px] rtl:xl:pr-[130px]">
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-gray-700 dark:!text-gray-100"
          >
            Quick Links
          </h3>
          <ul>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Home
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/why-choose-us"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                About Us
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/pricing"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                Pricing Plans
              </RouterLink>
            </li>
            <li class="mb-[10px] last:mb-0">
              <RouterLink
                to="/how-it-works"
                class="lg:text-[15px] xl:text-[16px] inline-block transition-all hover:text-primary-600"
              >
                How It Works
              </RouterLink>
            </li>
          </ul>
        </div>

        <div class="ltr:xl:pl-[80px] rtl:xl:pr-[80px]">
          <h3
            class="!leading-[1.2] !text-[16px] md:!text-lg !mb-[18px] !font-semibold !text-gray-700 dark:!text-gray-100"
          >
            Get in Touch
          </h3>
          <ul>
            <li class="lg:text-[15px] xl:text-[16px] mb-[10px] last:mb-0">
              Email:
              <a
                href="mailto:support@trezo.com"
                class="text-primary-500 hover:text-primary-800 transition-all"
              >
                support@trezo.com
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[10px] last:mb-0">
              Phone:
              <a
                href="tell:+1(555)123-4567"
                class="text-primary-500 hover:text-primary-800 transition-all"
              >
                +1 (555) 123-4567
              </a>
            </li>
            <li class="lg:text-[15px] xl:text-[16px] mb-[10px] last:mb-0">
              Location:
              <span class="font-semibold">
                123 Learning Ave, Knowledge City, USA
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <div class="py-[25px] md:py-[30px]">
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 lg:grid-cols-2 xl:gap-[25px]">
        <div class="text-center ltr:lg:text-left rtl:lg:text-right">
          <p>
            © <span class="text-purple-500">Trezo</span> is Proudly Owned by
            <a
              href="https://envytheme.com/"
              target="_blank"
              class="text-primary-500 transition-all hover:underline"
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
            class="w-[1px] h-[15px] bg-gray-200 dark:bg-gray-800 hidden lg:block"
          ></div>
          <a
            href="#"
            class="transition-all hover:text-primary-500 inline-block mt-[10px] lg:mt-0 mx-[7px] lg:mx-0"
          >
            Privacy Policy
          </a>
          <div
            class="w-[1px] h-[15px] bg-gray-200 dark:bg-gray-800 hidden lg:block"
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
