<template>
  <div class="mt-4 bg-white mb-[25px]">
    <swiper :space-between="20" :grid="{ rows: 1, fill: 'row' }" :breakpoints="{
      0: { slidesPerView: 1 },       // HP
      640: { slidesPerView: 3 },     // Tablet
      1024: { slidesPerView: 6 }     // Laptop ke atas
    }" @swiper="onSwiper" @slideChange="onSlideChange">
      <swiper-slide v-for="product in products" class="!h-full" :key="product.id">
        <div class="shadow p-2">
          <div class="relative">
            <span class="block bg-white dark:bg-[#0c1427]">
            </span>
            <RouterLink :to="product.link" class="block rounded-md">
              <img :src="product.image" alt="product-image" class="rounded-md" />
            </RouterLink>
          </div>
          <div class="mt-[19px] mb-auto">
            <h6 class="!text-sm !font-normal h-8">
              <RouterLink :to="product.link" class="transition-all hover:text-primary-500 line-clamp-2 overflow-hidden">
                {{ product.name }}
              </RouterLink>
            </h6>
            <div>
              <div class="flex items-center justify-between">
                <span class="block font-bold text-black dark:text-white text-[14px]">
                  Rp. {{ product.price }}
                </span>
                <span class="block line-through text-[12px] text-gray-400 ltr:ml-[7px] rtl:mr-[7px]">
                  Rp. {{ product.oldPrice }}
                </span>
              </div>
            </div>
            <div class="mt-3">
              <div class="leading-none text-orange-400 flex items-center gap-[2px]">
                <i v-for="star in 5" :key="star" :class="starClass(star, product.ratings)"></i>
              </div>
            </div>

            <div class="flex items-center justify-between mt-2 w-full">
              <button
                class="mt-3 rounded-md transition-all z-[1] inline-block  bg-[#7d0909] text-white hover:bg-[#996c6c] w-full py-1"
                type="button">
                <i class="material-symbols-outlined">shopping_cart</i>
              </button>
            </div>
          </div>
        </div>
      </swiper-slide>
    </swiper>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/grid'
import { RouterLink } from 'vue-router'

import image1 from '@/assets/images/products/product-1.jpg'
import image2 from '@/assets/images/products/product-2.jpg'
import image3 from '@/assets/images/products/product-3.jpg'
import image4 from '@/assets/images/products/product-4.jpg'
import image5 from '@/assets/images/products/product-5.jpg'
import image6 from '@/assets/images/products/product-6.jpg'
import image7 from '@/assets/images/products/product-7.jpg'
import image9 from '@/assets/images/products/product-9.jpg'

const onSwiper = (swiper) => {
  console.log('Swiper instance:', swiper)
}

const onSlideChange = () => {
  console.log('Slide changed!')
}

const products = ref([
  {
    id: 1,
    name: 'Susu Evaporasi POLOCOCOA aa aa  asdsa dasd',
    image: image1,
    price: '9.500',
    oldPrice: '12.500',
    ratings: 5,
    link: '/ecommerce/product-details',
  },
  {
    id: 2,
    name: 'Ragi Instant Baker\' Bonus A',
    image: image2,
    price: '2.000',
    oldPrice: '3.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 3,
    name: 'Keju Mozarella Green Valley',
    image: image3,
    price: '10.000',
    oldPrice: '15.000',
    ratings: 4,
    link: '/ecommerce/product-details',
  },
  {
    id: 4,
    name: "Sakura Konyaku Jelly Powder",
    image: image4,
    price: '9.000',
    oldPrice: '12.000',
    ratings: 3.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 5,
    name: "Susu Cair Indomilk",
    image: image5,
    price: '9.000',
    oldPrice: '18.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 6,
    name: 'Achor Cream Cheese',
    image: image6,
    price: '20.000',
    oldPrice: '30.000',
    ratings: 3,
    link: '/ecommerce/product-details',
  },
  {
    id: 7,
    name: 'Nutella Chocolate Hazelnut Spread',
    image: image7,
    price: '29.000',
    oldPrice: '35.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 9,
    name: 'Minyak Zaitun Borgres 125ml ',
    image: image9,
    price: '30.000',
    oldPrice: '40.000',
    ratings: 4,
    link: '/ecommerce/product-details',
  },
])

const starClass = (star, ratings) => {
  if (star <= ratings) return 'ri-star-fill'
  else if (star - ratings < 1) return 'ri-star-half-fill'
  else return 'ri-star-line'
}

</script>

<style scoped lang="scss">
@media (min-width: 768px) {
  .md\:pt-\[0\] {
    padding-top: 0 !important;
  }
}

.pt-\[0\] {
  padding-top: 0 !important;
}
</style>
