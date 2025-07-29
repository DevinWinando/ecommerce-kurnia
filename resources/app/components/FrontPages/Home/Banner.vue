<template>
  <div
    class="pt-[145px] md:pt-[145px] lg:pt-[170px] xl:pt-[140px] pb-[70px] md:pb-[90px] lg:pb-[110px] xl:pb-[140px] relative z-[1] overflow-hidden"
  >
    <div
      class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]"
    >
      <div class="grid grid-cols-2 gap-[25px] items-center">
        <div class="ltr:lg:-mr-[75px] rtl:lg:-ml-[75px]">
          <h2
            class="-tracking-[1px] lg:-tracking-[1.5px] !text-[30px] md:!text-[45px] lg:!text-[48px] xl:!text-[48px] !font-medium !leading-[1.2] !mb-[14px] md:!mb-[17px] lg:!mb-[20px] xl:!mb-[25px]"
          >
            Your <span class="text-orange-600 italic">One-Stop Shop</span> for Plastic & Baking Supplies in Purbalingga
          </h2>
          <p class="md:text-[15px] lg:text-md">
            Discover hundreds of high-quality products trusted by home bakers, culinary businesses, and event organizers since 1999.
          </p>
          <div class="-mt-[5px] md:mt-[25px] lg:mt-[20px] xl:mt-[30px] ">
            <RouterLink
              to="/shop"
              class="inline-block text-white py-[10.5px] px-[30px] rounded-[100px] transition-all font-medium border border-orange-500 bg-orange-500 hover:text-white hover:bg-orange-700 hover:border-orange-700 mt-[12px] md:mt-0"
            >
              Shop Now
            </RouterLink>
          </div>
        </div>
      </div>
    </div>
    <div
      class="absolute top-0 left-0 right-0 bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden"
      style="background: linear-gradient(180deg, #ffefe1 0%, #fff 100%)"
    ></div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";


export default defineComponent({
  name: "Banner",
  components: {
  },
  setup() {

    return {
    };
  },
});
</script>
