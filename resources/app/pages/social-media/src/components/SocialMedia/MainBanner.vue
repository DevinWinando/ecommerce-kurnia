<template>
  <div
    class="bg-[#f7f7f7] dark:bg-[#0a0e19] pt-[135px] md:pt-[145px] relative z-[1]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1785px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-1 xl:grid-cols-2 gap-[25px]">
        <div
          class="xl:max-w-[695px] ltr:xl:ml-[40px] rtl:xl:mr-[40px] md:pt-[15px] lg:pt-[45px]"
        >
          <div class="inline-block mb-[10px]">
            <span
              class="flex items-center gap-[10px] rounded-[30px] bg-white dark:bg-dark text-purple-600 border border-purple-200 dark:border-gray-800 py-[3.5px] px-[13px]"
            >
              <img src="@/assets/images/social-media/icons/ai2.svg" alt="ai" />
              Smart Scheduling. Smarter Results.
            </span>
          </div>
          <h1
            class="!font-medium !text-4xl md:!text-[50px] lg:!text-[55px] xl:!text-[72px] md:-tracking-[1.5px] !leading-[1.2] !mb-[10px] md:!mb-[15px] lg:!mb-[20px]"
          >
            Grow Your Audience Faster with
            <span class="text-purple-600 italic">Trezo Social Media</span> Magic
          </h1>
          <p class="md:text-[15px] lg:text-md">
            Trezo automates posting, engagement, and analytics so you can focus
            on creating killer content. All-in-one social media platform to
            schedule, publish, analyze, and grow — from one intuitive dashboard.
          </p>
          <div class="mt-[25px] md:mt-[35px] xl:mt-[45px]">
            <a
              href="https://trezo-twcss.envytheme.com/"
              class="group inline-block font-medium md:text-base rounded-[7px] bg-purple-500 text-white py-[11.5px] md:py-[13.5px] lg:py-[15.5px] px-[22px] md:px-[25px] relative z-[1]"
              target="_blank"
            >
              Get 7 Days - Free Trial
              <span
                class="absolute top-0 left-0 w-full h-full -z-[1] rounded-[7px] transition-all group-hover:opacity-0"
                style="
                  background: linear-gradient(180deg, #bf85fb 0%, #9135e8 100%);
                "
              ></span>
            </a>
            <RouterLink
              to="/pricing"
              class="group inline-block font-medium md:text-base rounded-[7px] text-purple-500 border border-purple-400 hover:bg-purple-500 hover:text-white hover:border-purple-500 py-[10.5px] md:py-[12.5px] lg:py-[14.5px] px-[22px] md:px-[25px] relative z-[1] ltr:ml-[10px] rtl:mr-[10px]"
            >
              See Pricing
            </RouterLink>
          </div>
          <div
            class="mt-[25px] md:mt-[35px] xl:mt-[100px] flex items-center gap-[15px] border border-gray-200 dark:border-gray-900 justify-center rounded-[100px] py-[13px] px-[20px] max-w-[243px]"
          >
            <div class="text-center relative top-[2px]">
              <div
                class="text-black dark:text-white leading-none mb-[2px] flex items-center -tracking-[0.5px] font-medium text-xl gap-[5px]"
              >
                <i
                  class="ri-star-fill leading-none -mt-[7px] text-orange-400"
                ></i>
                4.9
              </div>
              <span class="block text-sm"> 15k+ reviews </span>
            </div>
            <div class="flex items-center">
              <img
                src="@/assets/images/social-media/users/user1.jpg"
                class="rounded-full border-[1px] border-white dark:border-dark w-[45px] ltr:-mr-[15px] rtl:-ml-[15px] ltr:last:mr-0 rtl:last:ml-0"
                alt="user-image"
              />
              <img
                src="@/assets/images/social-media/users/user2.jpg"
                class="rounded-full border-[1px] border-white dark:border-dark w-[45px] ltr:-mr-[15px] rtl:-ml-[15px] ltr:last:mr-0 rtl:last:ml-0"
                alt="user-image"
              />
              <img
                src="@/assets/images/social-media/users/user3.jpg"
                class="rounded-full border-[1px] border-white dark:border-dark w-[45px] ltr:-mr-[15px] rtl:-ml-[15px] ltr:last:mr-0 rtl:last:ml-0"
                alt="user-image"
              />
            </div>
          </div>
        </div>
        <div class="text-center ltr:xl:-ml-[150px] rtl:xl:-mr-[150px]">
          <img
            src="@/assets/images/social-media/banner.png"
            class="inline-block"
            alt="banner-image"
          />
        </div>
      </div>
    </div>
    <div
      class="absolute ltr:left-[35%] rtl:right-[35%] bottom-[23%] -z-[1] hidden xl:block"
    >
      <img
        src="@/assets/images/social-media/icons/blur-facebook2.png"
        alt="blur-facebook"
      />
    </div>
    <div
      class="absolute ltr:left-[46.4%] rtl:right-[46.4%] top-[24.4%] -z-[1] hidden xl:block"
    >
      <img
        src="@/assets/images/social-media/icons/red-play-button2.png"
        alt="red-play-button"
      />
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "MainBanner",
});
</script>
