<template>
    <div class="bg-white pt-[15vh]">
        <div class="px-4">
            <div v-if="authStore.user" class="w-full p-4 mb-4 rounded-xl shadow bg-white">
                <div class="flex flex-col md:flex-row items-center md:justify-between justify-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">{{authStore?.user?.first_name}}</h2>
                        <div class="mt-1 flex items-center text-sm text-green-600 font-medium">
                            <svg class="w-4 h-4 mr-1 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3-11a1 1 0 10-2 0v1H9V7a1 1 0 10-2 0v1a1 1 0 00-1 1v2a1 1 0 001 1v1a1 1 0 102 0v-1h2v1a1 1 0 102 0v-1a1 1 0 001-1V9a1 1 0 00-1-1V7z" />
                            </svg>
                            New Member
                        </div>
                    </div>
    
                    <div>
                        <svg ref="barcode"></svg>
                    </div>
    
                    <div class="text-center">
                        <div class="text-lg font-semibold text-yellow-600">233</div>
                        <a href="#" class="text-sm text-gray-600 link">Tukar Poin</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="relative px-4">
            <Swiper :modules="[Navigation, Pagination]" :slides-per-view="2" :space-between="20" :loop="true" navigation
                pagination class="w-full">
                <SwiperSlide v-for="(slide, index) in slides" :key="index">
                    <img :src="slide.image" :alt="`promo-${index}`"
                        class="rounded-xl w-full object-cover max-h-[40vh]" />
                </SwiperSlide>
            </Swiper>
        </div>

        <div class="relative mt-10">
            <Swiper :slides-per-view="'auto'" :space-between="12" :loop="true" class="category-carousel w-full">
                <SwiperSlide v-for="(item, index) in categories" :key="index" class="!w-auto">
                    <button
                        class="inline-flex border border-slate-700 items-center gap-2 px-4 py-2 rounded-full text-sm text-gray-700">
                        <!-- <img :src="item.icon" alt="" class="w-5 h-5 object-contain" /> -->
                        <span>{{ item.label }}</span>
                    </button>
                </SwiperSlide>
            </Swiper>
        </div>
    </div>

    <!-- <Banner /> -->
    <div class="px-8 bg-white">
        <ProductsFilter title="New Products" />
        <ProductsGrid />
    </div>
    <div class="px-8 bg-white">
        <ProductsFilter title="Plastic Supplies" />
        <ProductsGrid />
    </div>
    <div class="px-8 bg-white">
        <ProductsFilter title="Baking Materials" />
        <ProductsGrid />
    </div>
    <Footer />
</template>

<script setup>
import { ref, onMounted } from 'vue';
import ProductsFilter from "@/components/Pages/Ecommerce/ProductsGrid/ProductsFilter.vue";
import ProductsGrid from "@/components/Pages/Ecommerce/ProductsGrid/index.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";
import { Swiper, SwiperSlide } from 'swiper/vue'
import { Navigation, Pagination } from 'swiper/modules'
import image5 from '@/assets/images/products/promo.jpg'
import JsBarcode from "jsbarcode";
import { useAuthStore } from "@/stores/auth";

const authStore = useAuthStore();

const barcode = ref(null);
const text = ref("Hello World");
onMounted(() => {
    JsBarcode(barcode.value, text.value, {
        format: 'CODE128',
        lineColor: '#000',
        width: 2,
        height: 40,
        displayValue: false,
    })
})

// Ganti dengan URL gambar asli atau import statis
const slides = [
    {
        image: image5
    },
    {
        image: image5
    },
    {
        image: image5
    },
    {
        image: image5
    }
]

const categories = [
    {
        label: 'Kebutuhan Dapur',
    },
    {
        label: 'Kebutuhan Ibu & Anak',
    },
    {
        label: 'Kebutuhan Rumah',
    },
    {
        label: 'Makanan',
    },
    {
        label: 'Minuman',
    },
    {
        label: 'Produk Segar & Beku',
    },
    {
        label: 'Bahan Kue',
    },
    {
        label: 'Peralatan Dapur',
    },
    {
        label: 'Peralatan Kebersihan',
    }
];
</script>

<style scoped>
.category-carousel {
    padding: 0 2rem;
}

.swiper-button-prev,
.swiper-button-next {
    width: 2rem;
    height: 2rem;
    top: 50%;
    transform: translateY(-50%);
}
</style>
