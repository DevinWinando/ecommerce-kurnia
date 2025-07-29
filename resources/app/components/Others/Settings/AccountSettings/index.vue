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
        <h5 class="text-lg mb-[6px]">Profil</h5>
        <div class="sm:grid sm:grid-cols-2 sm:gap-[25px]">
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Nama
            </label>
            <input type="text"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              :value="authStore?.user?.first_name" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Email
            </label>
            <input type="text"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              :value="authStore?.user?.email" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Telepon
            </label>
            <input type="text"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              value="+62123456789" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Jenis Usaha
            </label>
            <input type="text"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              value="Warung" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Kota
            </label>
            <input type="text"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              value="Purbalingga" />
          </div>
          <div class="mb-[20px] sm:mb-0">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Alamat
            </label>
            <textarea
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              value="" />
          </div>
        </div>
        <h5 class="text-lg mb-[6px] mt-[20px] md:mt-[25px]">Profil</h5>
        <p class="mb-[20px] md:mb-[25px]">
          Unggah foto profil Anda. Ukuran maksimal 2MB, format JPG/PNG.
        </p>
        <div id="fileUploader">
          <div
            class="relative flex items-center justify-center overflow-hidden rounded-md py-[88px] px-[20px] border border-gray-200 dark:border-[#172036]">
            <div class="flex items-center justify-center">
              <div
                class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                <i class="ri-upload-2-line"></i>
              </div>
              <p class="leading-[1.5]">
                <strong class="text-black dark:text-white">Klik untuk mengunggah</strong><br />
                file Anda di sini
              </p>
            </div>
            <input type="file" id="fileInput"
              class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer" />
          </div>
          <ul id="fileList"></ul>
        </div>
        <div class="mt-[20px] md:mt-[25px]">
          <button type="button"
            class="font-medium inline-block transition-all rounded-md md:text-md ltr:mr-[15px] rtl:ml-[15px] py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-danger-500 text-white hover:bg-danger-400">
            Batal
          </button>
          <button type="button"
            class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#a00c0c]">
            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
              <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                check
              </i>
              Perbarui Profil
            </span>
          </button>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { defineComponent, ref, onMounted } from "vue";
import SettingsNav from "../SettingsNav.vue";
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
</script>
