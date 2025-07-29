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

      <form>
        <div class="sm:grid sm:grid-cols-2 sm:gap-[25px]">
          <div class="mb-[20px] sm:mb-0 relative" id="passwordHideShow">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Password Lama
            </label>
            <input type="password"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              id="password" placeholder="Ketik password" />
            <button
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500"
              id="toggleButton" type="button">
              <i class="ri-eye-off-line"></i>
            </button>
          </div>
          <div class="mb-[20px] sm:mb-0 relative" id="passwordHideShow2">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Password Baru
            </label>
            <input type="password"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              id="password2" placeholder="Ketik password" />
            <button
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500"
              id="toggleButton2" type="button">
              <i class="ri-eye-off-line"></i>
            </button>
          </div>
          <div class="sm:col-span-2 mb-[20px] sm:mb-0 relative" id="passwordHideShow3">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Konfirmasi Password
            </label>
            <input type="password"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              id="password3" placeholder="Ketik password" />
            <button
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500"
              id="toggleButton3" type="button">
              <i class="ri-eye-off-line"></i>
            </button>
          </div>
        </div>
        <div class="mt-[20px] md:mt-[25px]">
          <button type="button"
            class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#a00c0c]">
            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
              <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                check
              </i>
              Perbarui Password
            </span>
          </button>
          <a href="forgot-password.html" class="inline-block text-danger-500 ltr:ml-[23px] rtl:mr-[23px]">
            Lupa Password?
          </a>
        </div>
      </form>
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
