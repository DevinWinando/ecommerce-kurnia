<template>
  <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mt-[15vh]">
    <div class="trezo-card-content">
      <div class="w-full p-4 mb-4 rounded-xl shadow bg-white">
        <div class="flex flex-col md:flex-row items-center md:justify-between justify-center">
          <div>
            <h2 class="text-lg font-semibold text-gray-800">{{ authStore?.user?.first_name }} {{ authStore?.user?.last_name }}</h2>
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
            <div class="text-lg font-semibold text-yellow-600">{{ authStore?.user?.point || 0 }}</div>
            <a href="#" class="text-sm text-gray-600 link">Tukar Poin</a>
          </div>
        </div>
      </div>

      <SettingsNav />

      <form @submit.prevent="updatePassword">
        <div class="sm:grid sm:grid-cols-2 sm:gap-[25px]">
          <div class="mb-[20px] sm:mb-0 relative" id="passwordHideShow">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Password Lama <span class="text-red-500">*</span>
            </label>
            <input
              :type="showPassword ? 'text' : 'password'"
              v-model="form.current_password"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] pr-[50px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Ketik password lama" />
            <button
              type="button"
              @click="showPassword = !showPassword"
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500">
              <i :class="showPassword ? 'ri-eye-line' : 'ri-eye-off-line'"></i>
            </button>
            <div v-if="errors.current_password" class="text-red-500 text-sm mt-1">
              {{ errors.current_password }}
            </div>
          </div>
          <div class="mb-[20px] sm:mb-0 relative" id="passwordHideShow2">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Password Baru <span class="text-red-500">*</span>
            </label>
            <input
              :type="showPassword2 ? 'text' : 'password'"
              v-model="form.password"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] pr-[50px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Ketik password baru" />
            <button
              type="button"
              @click="showPassword2 = !showPassword2"
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500">
              <i :class="showPassword2 ? 'ri-eye-line' : 'ri-eye-off-line'"></i>
            </button>
            <div v-if="errors.password" class="text-red-500 text-sm mt-1">
              {{ errors.password }}
            </div>
          </div>
          <div class="sm:col-span-2 mb-[20px] sm:mb-0 relative" id="passwordHideShow3">
            <label class="mb-[10px] text-black dark:text-white font-medium block">
              Konfirmasi Password <span class="text-red-500">*</span>
            </label>
            <input
              :type="showPassword3 ? 'text' : 'password'"
              v-model="form.password_confirmation"
              class="h-[55px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] px-[17px] pr-[50px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Konfirmasi password baru" />
            <button
              type="button"
              @click="showPassword3 = !showPassword3"
              class="absolute text-lg ltr:right-[20px] rtl:left-[20px] bottom-[13px] transition-all hover:text-primary-500">
              <i :class="showPassword3 ? 'ri-eye-line' : 'ri-eye-off-line'"></i>
            </button>
            <div v-if="errors.password_confirmation" class="text-red-500 text-sm mt-1">
              {{ errors.password_confirmation }}
            </div>
          </div>
        </div>
        <div class="mt-[20px] md:mt-[25px]">
          <button
            type="submit"
            :disabled="isSubmitting"
            class="font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#a00c0c] disabled:opacity-50 disabled:cursor-not-allowed">
            <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
              <i class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2">
                check
              </i>
              {{ isSubmitting ? 'Mengubah...' : 'Perbarui Password' }}
            </span>
          </button>
          <a href="/forgot-password" class="inline-block text-danger-500 ltr:ml-[23px] rtl:mr-[23px]">
            Lupa Password?
          </a>
        </div>
      </form>
    </div>
  </div>
</template>

<script setup>
import { ref, reactive, onMounted } from "vue";
import SettingsNav from "../SettingsNav.vue";
import JsBarcode from "jsbarcode";
import { useAuthStore } from "@/stores/auth";
import axios from "axios";

const authStore = useAuthStore();

const barcode = ref(null);
const isSubmitting = ref(false);
const showPassword = ref(false);
const showPassword2 = ref(false);
const showPassword3 = ref(false);

const form = reactive({
  current_password: "",
  password: "",
  password_confirmation: "",
});

const errors = reactive({
  current_password: "",
  password: "",
  password_confirmation: "",
});

onMounted(() => {
  // Initialize barcode
  if (barcode.value) {
    const barcodeText = authStore?.user?.code || authStore?.user?.id?.toString() || "000000";
    JsBarcode(barcode.value, barcodeText, {
      format: 'CODE128',
      lineColor: '#000',
      width: 2,
      height: 40,
      displayValue: false,
    });
  }
});

const updatePassword = async () => {
  // Reset errors
  errors.current_password = "";
  errors.password = "";
  errors.password_confirmation = "";

  // Validation
  if (!form.current_password) {
    errors.current_password = "Password lama harus diisi";
    return;
  }

  if (!form.password) {
    errors.password = "Password baru harus diisi";
    return;
  }

  if (form.password.length < 8) {
    errors.password = "Password minimal 8 karakter";
    return;
  }

  if (form.password !== form.password_confirmation) {
    errors.password_confirmation = "Konfirmasi password tidak cocok";
    return;
  }

  isSubmitting.value = true;

  try {
    const response = await axios.put('/user/password', {
      current_password: form.current_password,
      password: form.password,
      password_confirmation: form.password_confirmation,
    }, {
      headers: {
        'Accept': 'application/json',
      },
    });

    if (response.status === 200) {
      alert("Password berhasil diubah");
      // Reset form
      form.current_password = "";
      form.password = "";
      form.password_confirmation = "";
    }
  } catch (error) {
    console.error('Error updating password:', error);

    if (error.response?.status === 422) {
      const validationErrors = error.response.data.errors || {};
      if (validationErrors.current_password) {
        errors.current_password = validationErrors.current_password[0];
      }
      if (validationErrors.password) {
        errors.password = validationErrors.password[0];
      }
      if (validationErrors.password_confirmation) {
        errors.password_confirmation = validationErrors.password_confirmation[0];
      }
    } else {
      alert(error.response?.data?.message || "Gagal mengubah password");
    }
  } finally {
    isSubmitting.value = false;
  }
};
</script>
