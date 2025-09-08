<template>
    <div class="lg:grid lg:grid-cols-3 gap-[25px] mt-[15vh]">
        <div class="lg:col-span-2">
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">Pesananmu</h5>
                    </div>
                    <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
                        <h5 class="!mb-0">Customer ID : 357951</h5>
                    </div>
                </div>

                <div class="trezo-card-content">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th
                                        class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                        Produk
                                    </th>
                                    <th
                                        class="font-medium ltr:text-left rtl:text-right py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                        Jumlah
                                    </th>
                                    <th
                                        class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                        Harga
                                    </th>
                                    <th
                                        class="font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md">
                                        Total
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr v-for="(item) in carts" :key="item.id">
                                    <td
                                        class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <div class="flex items-center">
                                            <div class="rounded-md w-[40px]">
                                                <img src="@/assets/images/products/product-1.jpg"
                                                    class="inline-block rounded-md" alt="product-image" />
                                            </div>
                                            <div class="ltr:ml-[12px] rtl:mr-[12px]">
                                                <RouterLink to="/ecommerce/product-details"
                                                    class="block font-medium md:text-[15px] transition-all hover:text-primary-500">
                                                    {{ item.product?.name }}
                                                </RouterLink>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        <QuantityCounter :product="item.product" :qty="item.qty" />
                                    </td>
                                    <td
                                        class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        {{ format(item.product?.price) }}
                                    </td>
                                    <td
                                        class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        {{ format(item.product?.price * item.qty) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:col-span-1">
            <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md">
                <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between">
                    <div class="trezo-card-title">
                        <h5 class="!mb-0">Ringkasan Pesanan</h5>
                    </div>
                </div>

                <div class="trezo-card-content">
                    <div class="table-responsive overflow-x-auto">
                        <table class="w-full">
                            <thead class="text-black dark:text-white">
                                <tr>
                                    <th
                                        class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                        Deskripsi
                                    </th>
                                    <th
                                        class="font-medium ltr:text-right rtl:text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                        Harga
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-black dark:text-white">
                                <tr>
                                    <td
                                        class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        Total :
                                    </td>
                                    <td
                                        class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                        {{format(carts.reduce((total, item) => total + (item.product?.price *
                                        item.qty), 0)) }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <h6 class="mt-[20px] md:mt-[25px] mb-[10px]">Alamat Pengiriman</h6>
                    <form class="w-full" @submit.prevent="handleCheckout">
                        <textarea
                            class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
                            name="shipping_address" placeholder="Alamat lengkap"></textarea>
                        <button type="submit"
                            class="mt-[20px] md:mt-[25px] font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#996c6c]">
                            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                                <i
                                    class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                                    add
                                </i>
                                Checkout
                            </span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineComponent, onMounted, ref, watch } from "vue";
import QuantityCounter from "./QuantityCounter.vue";
import { useStore } from "vuex";
import format from "@/utils/format";
import CartService from "@/services/CartService";
import { useAuthStore } from "@/stores/auth";

const cartService = new CartService();
const authStore = useAuthStore();

const store = useStore();
const carts = ref([]);

watch(
    () => store.state.cart.items,
    (newItems) => {
        carts.value = newItems;
    },
    { immediate: true, deep: true }
);

onMounted(() => {
    store.dispatch("cart/fetchCart");
});

const handleCheckout = (e) => {
    if (!authStore.user?.pos_id) {
        alert('Kamu bukan member kurnia store');
        return;
    }

    e.preventDefault();
    const formData = new FormData(e.target);
    const shippingAddress = formData.get("shipping_address");

    if (!shippingAddress) {
        alert("Alamat pengiriman tidak boleh kosong.");
        return;
    }

    cartService.checkout({ shipping_address: shippingAddress });

    store.dispatch("cart/clearCart");
    window.location.href = "/cart";
};
</script>
