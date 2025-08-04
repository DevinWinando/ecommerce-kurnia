<template>
    <div class="bg-white pt-[15vh]">
        <div class="px-4">
            <div v-if="authStore.user" class="w-full p-4 mb-4 rounded-xl shadow bg-white">
                <div class="flex flex-col md:flex-row items-center md:justify-between justify-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">{{ authStore?.user?.first_name }}</h2>
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

        <!-- <Banner /> -->
        <div v-for="product in products" :key="product.id" class="px-8 bg-white">
            <ProductsFilter :title="product.name" />
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-[25px]">
                <Card v-for="item in product.products" :key="item.id" :product="item" />
            </div>
        </div>
    </div>
    <Footer />
</template>

<script setup>
import { ref, onMounted } from 'vue';
import ProductsFilter from "@/components/Pages/Ecommerce/ProductsGrid/ProductsFilter.vue";
import ProductsGrid from "@/components/Pages/Ecommerce/ProductsGrid/index.vue";
import Footer from "@/components/FrontPages/Common/Footer.vue";
import JsBarcode from "jsbarcode";
import { useAuthStore } from "@/stores/auth";
import ProductService from '@/services/ProductService';
import Card from '@/components/Pages/Ecommerce/ProductsGrid/Card.vue';
import { useStore } from 'vuex';
import { useRoute } from 'vue-router';

const store = useStore()
const route = useRoute();

const productService = new ProductService();
const products = ref([]);
const fetchProducts = async () => {
    try {
        store.dispatch('cart/fetchCart')

        const categoryId = route.params.categoryId;
        const response = await productService.getByCategoryId(categoryId);
        products.value = response.data;
    } catch (error) {
        console.error("Error fetching products:", error);
    }
};

fetchProducts();

const authStore = useAuthStore();

const barcode = ref(null);
onMounted(() => {
    if (authStore.user && authStore.user.hasOwnProperty('id')) {
        JsBarcode(barcode.value, authStore.user.id, {
            format: 'CODE128',
            lineColor: '#000',
            width: 2,
            height: 40,
            displayValue: false,
        })
    }

    fetchProducts();
})
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
