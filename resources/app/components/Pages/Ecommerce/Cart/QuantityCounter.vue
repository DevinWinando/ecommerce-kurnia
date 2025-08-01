<template>
    <div class="counter-container relative w-full min-w-[100px]" id="inputCounter">
        <button
            class="decrease-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:left-[15px] rtl:right-[15px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500"
            @click="decrement">
            -
        </button>
        <input type="text"
            class="counter text-[15px] py-1 rounded-md text-center block w-full bg-[#ffffff] dark:bg-[#15203c] text-black outline-0 font-medium dark:text-white"
            v-model="internalValue" readonly />
        <button
            class="increase-btn top-1/2 -translate-y-1/2 absolute text-[20px] ltr:right-[15px] rtl:left-[15px] text-gray-500 dark:text-gray-400 transition-all hover:text-primary-500"
            @click="increment">
            +
        </button>
    </div>
</template>

<script setup>
import { ref, defineProps } from "vue";
import { useStore } from 'vuex'

const props = defineProps({
    modelValue: {
        type: Number,
        default: 1
    },
    product: {
        type: Object,
        required: true
    },
    qty: {
        type: Number,
        default: 1
    }
});

const store = useStore()

const updateQty = () => {
    store.dispatch('cart/updateQty', { id: props.product.id, qty: internalValue.value })
}

const internalValue = ref(props.qty || props.modelValue || 1);

const increment = () => {
    internalValue.value++;
    updateQty();
};

const decrement = () => {
    if (internalValue.value > 0) {
        internalValue.value--;
        updateQty();
    }
};
</script>
