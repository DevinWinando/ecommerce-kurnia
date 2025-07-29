<template>
  <div
    class="py-[70px] md:py-[90px] lg:py-[110px] xl:py-[130px] 2xl:py-[150px]"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div
        class="mb-[30px] md:mb-[40px] lg:mb-[50px] xl:mb-[60px] text-center mx-auto md:max-w-[630px]"
      >
        <h2
          class="md:-tracking-[1px] !font-medium !text-xl md:!text-3xl lg:!text-4xl xl:!text-5xl !leading-[1.2] !mb-[10px] lg:!mb-[12px]"
        >
          Contact Us
        </h2>
        <p class="md:text-[15px] lg:text-md">
          Have questions, need help, or just want to say hi? Our team is ready
          to assist you — fast and friendly.
        </p>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[25px]">
        <div
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[55px] xl:py-[70px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <img
            src="@/assets/images/helpdesk/icons/settings.svg"
            alt="settings"
          />
          <h3
            class="!font-medium !text-lg md:!text-[20px] mt-[20px] md:mt-[25px] !mb-[12px]"
          >
            Customer Support
          </h3>
          <p>Already a customer and need assistance with your account?</p>
          <a
            href="mailto:sales@trezoapp.com"
            class="inline-block relative text-purple-600 transition-all hover:text-purple-400 md:mt-[15px] ltr:pl-[27px]"
          >
            <i
              class="ri-mail-line absolute md:mt-px top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-lg"
            ></i>
            sales@trezoapp.com
          </a>
          <span class="block my-[7px]"> or </span>
          <a
            href="mailto:support@trezoapp.com"
            class="inline-block relative text-purple-600 transition-all hover:text-purple-400 ltr:pl-[27px]"
          >
            <i
              class="ri-mail-line absolute md:mt-px top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-lg"
            ></i>
            support@trezoapp.com
          </a>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            style="
              background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%);
            "
          ></div>
        </div>

        <div
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[55px] xl:py-[70px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <img src="@/assets/images/helpdesk/icons/call.svg" alt="call" />
          <h3
            class="!font-medium !text-lg md:!text-[20px] mt-[20px] md:mt-[25px] !mb-[12px]"
          >
            Call Us
          </h3>
          <p>Prefer to speak with someone directly?</p>
          <a
            href="tel:+1(800)123-4567"
            class="inline-block relative text-purple-600 transition-all hover:text-purple-400 md:mt-[15px] ltr:pl-[27px]"
          >
            <i
              class="ri-phone-line absolute md:mt-px top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-lg"
            ></i>
            +1 (800) 123-4567
          </a>
          <span
            class="block my-[12px] bg-gray-200 dark:bg-gray-900 h-[1px] w-full"
          ></span>
          <span
            class="text-gray-700 dark:text-white inline-block relative transition-all hover:text-purple-400 ltr:pl-[27px]"
          >
            <i
              class="ri-time-line absolute md:mt-px top-1/2 -translate-y-1/2 ltr:left-0 rtl:right-0 text-lg text-purple-600"
            ></i>
            Mon–Fri, 9:00am – 6:00pm
          </span>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            style="
              background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%);
            "
          ></div>
        </div>
        <div
          class="px-[20px] py-[30px] md:px-[30px] md:py-[40px] lg:px-[40px] lg:py-[50px] xl:px-[55px] xl:py-[70px] bg-white dark:bg-[#0a0e19] rounded-[15px] relative z-[1]"
        >
          <img
            src="@/assets/images/helpdesk/icons/location.svg"
            alt="location"
          />
          <h3
            class="!font-medium !text-lg md:!text-[20px] mt-[20px] md:mt-[25px] !mb-[12px]"
          >
            Our Office
          </h3>
          <span
            class="block text-gray-700 dark:text-white font-semibold mb-[5px]"
          >
            Trezo HQ
          </span>
          <p>123 Service Lane, Suite 500 San Francisco, CA 94104</p>
          <span
            class="block my-[12px] bg-gray-200 dark:bg-gray-900 h-[1px] w-full"
          ></span>
          <span
            class="block text-gray-700 dark:text-white font-semibold mb-[5px]"
          >
            Trezo East Branch
          </span>
          <p>88 Skyline Tower, Floor 10 Brooklyn, NY 11201</p>
          <div
            class="rounded-[15px] absolute top-0 left-0 right-0 bottom-0 -z-[1] dark:hidden"
            style="
              background: linear-gradient(180deg, #f6f8ff 0%, #f5ebff 100%);
            "
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
  name: "ContactInfo",
});
</script>
