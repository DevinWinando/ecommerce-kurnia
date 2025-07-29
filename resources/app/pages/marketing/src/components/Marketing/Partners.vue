<template>
  <div
    class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
  >
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-[25px]">
      <div class="lg:col-span-1">
        <div
          class="relative z-[1] text-center rounded-[15px] bg-white dark:bg-[#0a0e19] px-[20px] xl:px-[25px] py-[35px] md:py-[55px] lg:py-[85px]"
        >
          <div class="flex items-center justify-center">
            <img
              v-for="(user, index) in users"
              :key="'user-' + index"
              :src="user.image"
              class="rounded-full w-[46px] border-[3px] border-white dark:border-gray-800 -mx-[7px]"
              :alt="'user-' + index"
            />
          </div>
          <span
            class="block mt-[12px] md:mt-[15px] font-medium text-gray-700 dark:text-gray-100"
          >
            {{ customerCount }}+ Trusted Customers
          </span>
          <div
            class="absolute top-0 left-0 right-0 bottom-0 -z-[1] rounded-[15px] dark:hidden"
            style="background: linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)"
          ></div>
        </div>
      </div>

      <div class="lg:col-span-3">
        <div
          class="relative z-[1] text-center rounded-[15px] bg-white dark:bg-[#0a0e19] px-[20px] md:px-[30px] lg:px-[40px] xl:px-[50px] py-[35px] md:py-[55px] lg:py-[85.5px]"
        >
          <span
            class="block font-medium text-gray-700 dark:text-gray-100 md:text-[15px] lg:text-md mb-[20px] md:mb-[25px] lg:mb-[30px]"
          >
            {{ headline }}
          </span>
          <div
            class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-[20px] md:gap-[25px]"
          >
            <div
              class="text-center"
              v-for="(partner, index) in partners"
              :key="'partner-' + index"
            >
              <img
                :src="partner.logo"
                class="inline-block"
                :alt="partner.name || 'partner-' + index"
              />
            </div>
          </div>
          <div
            class="absolute top-0 left-0 right-0 bottom-0 -z-[1] rounded-[15px] dark:hidden"
            style="background: linear-gradient(0deg, #fff8f1 0%, #f7f9ff 100%)"
          ></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

import userimage1 from "@/assets/images/marketing/users/user1.jpg";
import userimage2 from "@/assets/images/marketing/users/user2.jpg";
import userimage3 from "@/assets/images/marketing/users/user3.jpg";
import userimage4 from "@/assets/images/marketing/users/user4.jpg";

import partnerLogo1 from "@/assets/images/marketing/partners/partner1.svg";
import partnerLogo2 from "@/assets/images/marketing/partners/partner2.svg";
import partnerLogo3 from "@/assets/images/marketing/partners/partner3.svg";
import partnerLogo4 from "@/assets/images/marketing/partners/partner4.svg";
import partnerLogo5 from "@/assets/images/marketing/partners/partner5.svg";

export default defineComponent({
  name: "Partners",
  setup() {
    const customerCount = 50_000;
    const headline =
      "From Startups to Industry Leaders — Everyone's Growing with Trezo";

    const users = [
      { image: userimage1 },
      { image: userimage2 },
      { image: userimage3 },
      { image: userimage4 },
    ];

    const partners = [
      { logo: partnerLogo1, name: "Partner 1" },
      { logo: partnerLogo2, name: "Partner 2" },
      { logo: partnerLogo3, name: "Partner 3" },
      { logo: partnerLogo4, name: "Partner 4" },
      { logo: partnerLogo5, name: "Partner 5" },
    ];

    return {
      customerCount,
      headline,
      users,
      partners,
    };
  },
});
</script>
