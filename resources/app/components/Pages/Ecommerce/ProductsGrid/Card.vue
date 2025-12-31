<template>
    <div class="shadow p-2">
        <div class="">
            <div class="h-[150px]">
                <img :src="`https://pos.kurniagrup.com/images/products/${props.product.image}`" alt="product-image" class="rounded-md" />
            </div>
        </div>
        <div class="mt-[19px] mb-auto">
            <h6 class="!text-sm !font-normal h-8">
                <div class="transition-all hover:text-primary-500 line-clamp-2 overflow-hidden">
                    {{ props.product.name }}
                </div>
            </h6>
            <div>
                <div class="flex items-center justify-between" v-show="authStore.user">
                    <span class="block font-bold text-black dark:text-white text-[14px]">
                        {{ format(props.product.price) }}
                    </span>
                </div>
            </div>

            <!-- Stock Information -->
            <div class="mt-2 flex items-center justify-between text-xs" v-show="authStore.user">
                <div class="flex items-center gap-1">
                    <span :class="getStockClass()" class="font-medium">
                        {{ getStockText() }}
                    </span>
                </div>
            </div>

            <div class="flex items-center justify-between mt-4 w-full">
                <button v-show="!cartItem()" @click="add" :disabled="!authStore.user || !isAvailable()"
                    class="mt-3 rounded-md transition-all z-[1] inline-block  bg-[#7d0909] text-white hover:bg-[#996c6c] w-full py-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-[#7d0909]"
                    type="button">
                    <i class="material-symbols-outlined">shopping_cart</i>
                </button>
                <QuantityCounter v-show="cartItem()" :product="props.product" :qty="cartItem()?.qty" :max-qty="props.product.stock?.qty || 0" />
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, defineProps } from 'vue'
import { RouterLink } from 'vue-router'
import { useStore } from 'vuex'
import QuantityCounter from '../Cart/QuantityCounter.vue'
import { useAuthStore } from "@/stores/auth";
import format from '@/utils/format';

const authStore = useAuthStore();

const props = defineProps({
    product: {
        id: Number,
        name: String,
        image: String,
        link: String,
        price: Number,
        oldPrice: Number,
        ratings: Number,
        stock: {
            qty: Number,
            status: String,
            available: Boolean
        },
        unit: {
            id: Number,
            name: String,
            short_name: String
        }
    }
})

const store = useStore()

const add = () => {
    if (!isAvailable()) {
        return;
    }
    // Ensure we don't add more than available stock
    const maxQty = props.product.stock?.qty || 0;
    const currentQty = cartItem()?.qty || 0;
    const qtyToAdd = Math.min(1, maxQty - currentQty);

    if (qtyToAdd > 0) {
        store.dispatch('cart/addToCart', { ...props.product, qty: qtyToAdd })
    }
}

const cartItem = () => {
    return store.state.cart.items.find(item => item.product_id == props.product.id)
}

const getStockText = () => {
    if (!props.product.stock) {
        return 'N/A'
    }
    const qty = props.product.stock.qty || 0
    return `${qty} ${props.product.unit?.short_name || ''}`
}

const getStockClass = () => {
    if (!props.product.stock) {
        return 'text-gray-500'
    }
    const status = props.product.stock.status
    if (status === 'in_stock') {
        return 'text-green-600 dark:text-green-400'
    } else if (status === 'low_stock') {
        return 'text-yellow-600 dark:text-yellow-400'
    } else {
        return 'text-red-600 dark:text-red-400'
    }
}

const isAvailable = () => {
    return props.product.stock?.available || false
}
</script>
