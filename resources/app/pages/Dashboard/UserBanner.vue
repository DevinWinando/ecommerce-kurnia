<template>

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
                    <div class="text-lg font-semibold text-yellow-600">{{ authStore?.user?.point }}</div>
                    <a href="#" class="text-sm text-gray-600 link">Tukar Poin</a>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { useAuthStore } from "@/stores/auth";
import JsBarcode from "jsbarcode";
import { ref, onMounted } from 'vue';

const authStore = useAuthStore();
const barcode = ref(null);

onMounted(() => {
    if (authStore.user && authStore.user.hasOwnProperty('id')) {
        JsBarcode(barcode.value, authStore.user.id, {
            format: 'CODE128',
            lineColor: '#000',
            width: 2,
            height: 40,
            displayValue: false
        });
    }
});
</script>
