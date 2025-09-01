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

            <div class="flex items-center justify-between mt-4 w-full">
                <button v-show="!cartItem()" @click="add" :disabled="!authStore.user"
                    class="mt-3 rounded-md transition-all z-[1] inline-block  bg-[#7d0909] text-white hover:bg-[#996c6c] w-full py-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-[#7d0909]"
                    type="button">
                    <i class="material-symbols-outlined">shopping_cart</i>
                </button>
                <QuantityCounter v-show="cartItem()" :product="props.product" :qty="cartItem()?.qty" />
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
        ratings: Number
    }
})

const store = useStore()

const add = () => {
    store.dispatch('cart/addToCart', { ...props.product, qty: 1 })
}

const cartItem = () => {
    return store.state.cart.items.find(item => item.product_id == props.product.id)
}
</script>
