<template>
    <div class="mt-4 bg-white mb-[25px]">
        <swiper :space-between="20" :grid="{ rows: 1, fill: 'row' }" :breakpoints="{
            0: { slidesPerView: 2 },       // HP
            640: { slidesPerView: 3 },     // Tablet
            1024: { slidesPerView: 6 }     // Laptop ke atas
        }" @swiper="onSwiper" @slideChange="onSlideChange">
            <swiper-slide v-for="product in props.products" class="!h-full" :key="product.id">
                <Card :product="product" />
            </swiper-slide>
        </swiper>
    </div>
</template>

<script setup>
import { ref, defineProps } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/css'
import 'swiper/css/grid'
import { RouterLink } from 'vue-router'
import Card from "@/components/Pages/Ecommerce/ProductsGrid/Card.vue";

const props = defineProps({
    products: [
        {
            id: Number,
            name: String,
            image: String,
            link: String,
            price: Number,
            oldPrice: Number,
            ratings: Number
        }
    ]
})

const onSwiper = (swiper) => {
}

const onSlideChange = () => {
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
