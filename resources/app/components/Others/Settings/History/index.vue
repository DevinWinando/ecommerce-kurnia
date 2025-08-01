<template>
    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mt-[15vh]">
        <div class="trezo-card-content">
            <div class="w-full p-4 mb-4 rounded-xl shadow bg-white">
                <div class="flex flex-col md:flex-row items-center md:justify-between justify-center">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-800">Olivia</h2>
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

            <SettingsNav />

            <div v-for="transaction in transactions" :key="transaction.id"
                class="bg-white border rounded-xl shadow-sm p-5">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-4">
                    <div class="flex-1">
                        <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
                            <div class="flex items-center gap-1 text-black font-medium">
                                Transaksi
                            </div>
                            <span>{{ transaction.transaction_date }}</span>
                            <span class="px-2 py-0.5 rounded-md bg-green-100 text-green-600 font-medium">{{
                                transaction.status }}</span>
                            <span class="text-gray-500">{{ transaction.transaction_number }}</span>
                        </div>
                    </div>

                    <!-- Kanan -->
                    <div class="flex flex-col sm:items-end w-full sm:w-auto">
                        <div class="text-xs text-gray-400">Total Harga</div>
                        <div class="text-lg font-semibold text-black">{{ format(transaction.total_amount) }}</div>
                    </div>
                </div>
                <div v-for="item in transaction.items" :key="item.id">
                    <div class="flex items-center justify-between gap-2">
                        <span class="text-gray-800 text-[12px]">{{ item?.product?.name }}</span>

                        <div>
                            <span class="mr-1 text-gray-800 text-[12px]">{{ format(item?.product?.price) }}</span>
                            <span class="text-gray-500 text-[12px] ml-1">x {{ item.qty }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { defineComponent, ref, onMounted } from "vue";
import SettingsNav from "../SettingsNav.vue";
import JsBarcode from "jsbarcode";
import TransactionService from "@/services/TransactionService";
import format from "@/utils/format";

const barcode = ref(null);
const text = ref("Hello World");
const transactions = ref([]);

const transactionService = new TransactionService();

onMounted(() => {
    JsBarcode(barcode.value, text.value, {
        format: 'CODE128',
        lineColor: '#000',
        width: 2,
        height: 40,
        displayValue: false,
    })

    transactionService.getTransactions().then(data => {
        transactions.value = data.data;
    });
})
</script>
