<template>
  <div class="grid grid-cols-1 lg:grid-cols-2 2xl:grid-cols-3 gap-[25px] mb-[25px]">
    <div class="2xl:col-span-1">
      <div class="trezo-card">
        <div class="trezo-card-content" id="dishDetailsImageSlides">
          <Swiper :spaceBetween="10" :loop="true" :thumbs="{ swiper: thumbsSwiper }" :modules="modules"
            class="mySwiper2">
            <SwiperSlide v-for="(image, index) in dish.images" :key="index">
              <div class="bg-white dark:bg-[#0c1427] p-[13px]">
                <img class="rounded-md cursor-pointer w-full" :src="image" :alt="`${dish.name}-image-${index}`" />
              </div>
            </SwiperSlide>
          </Swiper>

          <Swiper @swiper="setThumbsSwiper" :spaceBetween="25" :slidesPerView="4" :loop="true" :freeMode="true"
            :watchSlidesProgress="true" :modules="modules" class="mySwiper mt-[15px]">
            <SwiperSlide v-for="(image, index) in dish.images" :key="index" class="cursor-poiner">
              <img class="rounded-md cursor-pointer" :src="image" :alt="`${dish.name}-thumbnail-${index}`" />
            </SwiperSlide>
          </Swiper>
        </div>
      </div>
    </div>

    <!-- Details Section -->
    <div class="2xl:col-span-2">
      <div class="trezo-card bg-white dark:bg-[#0c1427] p-[20px] md:p-[25px] rounded-md lg:h-full">
        <div class="trezo-card-content">
          <div class="flex items-center justify-between">
            <div>
              <span
                class="inline-block text-xs relative rounded-sm text-success-700 mb-[14px] bg-success-50 dark:bg-[#15203c] py-[4px] ltr:pr-[16px] rtl:pl-[16px] ltr:pl-[37px] rtl:pr-[37px]">
                <i
                  class="material-symbols-outlined absolute top-1/2 -translate-y-1/2 ltr:left-[12px] rtl:right-[12px] mt-[.2px] !text-[19px]">
                  check
                </i>
                in stock
              </span>
              <h6 class="!font-medium !text-lg !leading-[1.5] !mb-[16px]">
                {{ dish.name }}
              </h6>
              <div
                class="leading-none border-b border-gray-100 dark:border-[#172036] pb-[20px] md:pb-[25px] mb-[21px] text-md text-warning-500 flex items-center">
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <i class="ri-star-fill"></i>
                <span class="text-xs text-gray-500 dark:text-gray-400 relative top-[2px] ltr:ml-[15px] rtl:mr-[15px]">
                  (76 reviews)
                </span>
              </div>
              <div class="flex items-center">
                <span class="text-black dark:text-white font-bold text-lg">
                  Rp. 15.000
                </span>
                <span class="text-md ltr:ml-[7px] rtl:mr-[7px] line-through">
                  Rp. 20.000
                </span>
              </div>
              <div class="mt-[20px]">
                <div class="flex items-center">
                  <span>
                    Style:
                  </span>
                  <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                    {{ dish.name }}
                  </span>
                </div>
                <div class="mt-[7px]">
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                    2 Kg
                  </button>
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                    Martabak 2 Kg
                  </button>
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                    Mini
                  </button>
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-orange-400 text-black dark:text-white font-semibold">
                    Singles
                  </button>
                </div>
              </div>
              <div class="mt-[15px]">
                <div class="flex items-center">
                  <span>
                    Spiciness:
                  </span>
                  <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                    Medium
                  </span>
                </div>
                <div class="mt-[6px]">
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-gray-100 dark:border-[#172036]">
                    Hot
                  </button>
                  <button type="button"
                    class="inline-block text-xs py-[5px] px-[15px] rounded-[4px] ltr:mr-[6px] rtl:ml-[6px] border border-orange-400 text-black dark:text-white font-semibold">
                    Extra Hot
                  </button>
                </div>
              </div>
              <div class="mt-[15px]">
                <!-- <div class="flex items-center">
                  <span>
                    Color:
                  </span>
                  <span class="font-medium text-black dark:text-white ltr:ml-[3px] rtl:mr-[3px]">
                    Silver
                  </span>
                </div> -->
                <div class="mt-[6px]">
                  <button type="button"
                    class="inline-block ltr:mr-[7px] rtl:ml-[7px] rounded-full w-[29px] h-[29px] bg-gray-100 border border-orange-400"></button>
                  <button type="button"
                    class="inline-block ltr:mr-[7px] rtl:ml-[7px] rounded-full w-[29px] h-[29px] bg-gray-200 border border-gray-200"></button>
                </div>
              </div>
              <div class="mt-[26px] flex items-center gap-[8px]">
                <div class="counter-container relative w-[102px]" id="inputCounter">
                  <button
                    class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[17px] rtl:right-[17px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                    -
                  </button>
                  <input type="text"
                    class="counter text-base h-[34px] rounded-md text-center block w-full bg-primary-50 dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white"
                    value="1" readonly="">
                  <button
                    class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[17px] rtl:left-[17px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500">
                    +
                  </button>
                </div>
                <button type="button"
                  class="rounded-md inline-block font-medium py-[6.5px] px-[21px] text-white bg-[#7d0909] hover:bg-[#996c6c]">
                  <span class="inline-block relative ltr:pl-[24px] rtl:pr-[24px]">
                    <i
                      class="ri-shopping-cart-line absolute ltr:left-0 rtl:right-0 text-[17px] top-1/2 -translate-y-1/2"></i>
                    Add To Cart
                  </span>
                </button>
              </div>
              <button type="button" class="mt-[20px] inline-block font-medium text-black dark:text-white">
                <span class="flex items-center">
                  <i
                    class="ri-heart-line w-[31px] h-[31px] text-lg text-gray-500 dark:text-gray-400 leading-[33px] text-center ltr:mr-[10px] rtl:ml-[10px] rounded-full inline-block bg-gray-100 dark:bg-[#172036]"></i>
                  Add to wishlist
                </span>
              </button>
              <div class="mt-[11px] flex items-center">
                <i
                  class="material-symbols-outlined w-[31px] h-[31px] !text-lg text-gray-500 dark:text-gray-400 !leading-[33px] text-center ltr:mr-[10px] rtl:ml-[10px] rounded-full inline-block bg-gray-100 dark:bg-[#172036]">
                  visibility
                </i>
                565 people are viewing the products
              </div>
              <ul class="my-[19px] border-t border-b border-gray-100 py-[15px] dark:border-[#172036]">
                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                  <i
                    class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                    check
                  </i>
                  Free delivery today
                </li>
                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                  <i
                    class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                    check
                  </i>
                  100% money back Guarantee
                </li>
                <li class="relative ltr:pl-[27px] rtl:pr-[27px] mb-[7px] last:mb-0 text-black dark:text-white">
                  <i
                    class="material-symbols-outlined absolute ltr:left-0 rtl:right-0 top-1/2 -translate-y-1/2 !text-[20px] text-success-700">
                    check
                  </i>
                  7 days product return policy
                </li>
              </ul>
              <ul class="mb-[20px]">
                <li class="mb-[6px] last:mb-0">
                  SKU:
                  <span class="font-medium text-black dark:text-white">
                    SMTGS6T45
                  </span>
                </li>
                <li class="mb-[6px] last:mb-0">
                  Category:
                  <span class="font-medium text-black dark:text-white">
                    Burger
                  </span>
                </li>
                <li class="mb-[6px] last:mb-0">
                  Tags:
                  <span class="font-medium text-black dark:text-white">
                    {{ dish.ingredients }}
                  </span>
                </li>
              </ul>
              <div class="flex items-center gap-[4px]">
                <span class="relative text-md ltr:mr-[5px] rtl:ml-[5px] -top-px">
                  Share:
                </span>
                <a href="#"
                  class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500"
                  target="_blank">
                  <i class="ri-facebook-fill"></i>
                </a>
                <a href="#"
                  class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500"
                  target="_blank">
                  <i class="ri-twitter-x-fill"></i>
                </a>
                <a href="#"
                  class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500"
                  target="_blank">
                  <i class="ri-linkedin-fill"></i>
                </a>
                <a href="#"
                  class="w-[23.844px] h-[23.844px] text-sm leading-[23.844px] text-black dark:text-white bg-gray-100 dark:bg-[#172036] rounded-full text-center transition-all hover:text-white hover:bg-primary-500"
                  target="_blank">
                  <i class="ri-whatsapp-line"></i>
                </a>
              </div>
            </div>
            <div class="flex items-center justify-end leading-none gap-[2px]">
              <i v-for="star in 5" :key="star" :class="[
                'ri-star-fill',
                star <= Math.round(dish.rating)
                  ? 'text-orange-500'
                  : 'text-gray-300',
              ]"></i>
              <span class="block relative top-px text-xs text-gray-500 dark:text-gray-400 ltr:ml-[2px] rtl:mr-[2px]">
                {{ dish.rating.toFixed(1) }}
              </span>
            </div>
          </div>

          <div class="h-[1px] bg-gray-100 dark:bg-[#172036] my-[20px] md:my-[25px]"></div>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import { FreeMode, Thumbs } from "swiper/modules";
import { Swiper as SwiperClass } from "swiper";

import image1 from "@/assets/images/products/detail-1.jpg";
import image2 from "@/assets/images/products/detail-2.jpg";
import image3 from "@/assets/images/products/detail-3.jpg";
import image4 from "@/assets/images/products/detail-4.jpg";

export default defineComponent({
  name: "DishDetails",
  components: {
    Swiper,
    SwiperSlide,
  },
  setup() {
    const thumbsSwiper = ref<SwiperClass | null>(null);
    const internalValue = ref(1);

    const dish = ref({
      id: 1,
      code: "3479",
      name: "Kraft Cheddar Cheese",
      price: 11.5,
      rating: 5.0,
      images: [image1, image2, image3, image4],
      ingredients:
        "Spaghetti, shredded chicken, buffalo sauce, ranch dressing, mozzarella.",
      nutrition: {
        calories: 1200,
        carbs: 120,
        protein: 120,
        fibres: 400,
        fat: 890,
        vitamins: 350,
        sugar: 30,
        minerals: 5,
      },
      ordersInQueue: 17,
    });

    const setThumbsSwiper = (swiper: SwiperClass) => {
      thumbsSwiper.value = swiper;
    };

    const increment = () => {
      internalValue.value++;
    };

    const decrement = () => {
      if (internalValue.value > 0) {
        internalValue.value--;
      }
    };

    return {
      dish,
      internalValue,
      increment,
      decrement,
      thumbsSwiper,
      setThumbsSwiper,
      modules: [FreeMode, Thumbs],
    };
  },
});
</script>
