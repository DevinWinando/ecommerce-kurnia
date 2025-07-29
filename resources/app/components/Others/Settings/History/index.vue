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
      <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white border rounded-xl shadow-sm p-5 gap-4 mb-4">
        <div class="flex-1">
          <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
            <div class="flex items-center gap-1 text-black font-medium">
              Transaksi
            </div>
            <span>27 Jul 2025</span>
            <span class="px-2 py-0.5 rounded-md bg-green-100 text-green-600 font-medium">Berhasil</span>
            <span class="text-gray-500">INV/20250727/XXV/VII/1111111</span>
          </div>

          <!-- Nama Produk -->
          <div class="mt-3 font-semibold text-base text-black">Transaksi 1</div>
          <!-- Nomor -->
          <div class="text-gray-500 text-sm mt-1">93608850124*****</div>
        </div>

        <!-- Kanan -->
        <div class="flex flex-col sm:items-end w-full sm:w-auto">
          <div class="text-xs text-gray-400">Total Harga</div>
          <div class="text-lg font-semibold text-black">Rp21.500</div>

          <div class="flex items-center gap-3 mt-4">
            <button class="text-[#7d0909] font-medium text-sm hover:underline">
              Lihat Detail Transaksi
            </button>
          </div>
        </div>
      </div>
      <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white border rounded-xl shadow-sm p-5 gap-4 mb-4">
        <div class="flex-1">
          <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
            <div class="flex items-center gap-1 text-black font-medium">
              Transaksi
            </div>
            <span>27 Jul 2025</span>
            <span class="px-2 py-0.5 rounded-md bg-green-100 text-green-600 font-medium">Berhasil</span>
            <span class="text-gray-500">INV/20250727/XXV/VII/1111111</span>
          </div>

          <!-- Nama Produk -->
          <div class="mt-3 font-semibold text-base text-black">Transaksi 2</div>
          <!-- Nomor -->
          <div class="text-gray-500 text-sm mt-1">93608850124*****</div>
        </div>

        <!-- Kanan -->
        <div class="flex flex-col sm:items-end w-full sm:w-auto">
          <div class="text-xs text-gray-400">Total Harga</div>
          <div class="text-lg font-semibold text-black">Rp21.500</div>

          <div class="flex items-center gap-3 mt-4">
            <button class="text-[#7d0909] font-medium text-sm hover:underline">
              Lihat Detail Transaksi
            </button>
          </div>
        </div>
      </div>
      <div
        class="flex flex-col sm:flex-row justify-between items-start sm:items-center bg-white border rounded-xl shadow-sm p-5 gap-4">
        <div class="flex-1">
          <div class="flex flex-wrap items-center gap-2 text-sm text-gray-600">
            <div class="flex items-center gap-1 text-black font-medium">
              Transaksi
            </div>
            <span>27 Jul 2025</span>
            <span class="px-2 py-0.5 rounded-md bg-green-100 text-green-600 font-medium">Berhasil</span>
            <span class="text-gray-500">INV/20250727/XXV/VII/1111111</span>
          </div>

          <!-- Nama Produk -->
          <div class="mt-3 font-semibold text-base text-black">Transaksi 3</div>
          <!-- Nomor -->
          <div class="text-gray-500 text-sm mt-1">93608850124*****</div>
        </div>

        <!-- Kanan -->
        <div class="flex flex-col sm:items-end w-full sm:w-auto">
          <div class="text-xs text-gray-400">Total Harga</div>
          <div class="text-lg font-semibold text-black">Rp21.500</div>

          <div class="flex items-center gap-3 mt-4">
            <button class="text-[#7d0909] font-medium text-sm hover:underline">
              Lihat Detail Transaksi
            </button>
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
</script>
