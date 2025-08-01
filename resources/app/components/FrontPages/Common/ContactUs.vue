<template>
    <div class="pt-[60px] md:pt-[80px] lg:pt-[100px] xl:pt-[150px] bg-white min-h-screen">
        <div class="container 2xl:max-w-[1320px] mx-auto px-[12px]">
            <div class="flex items-center justify-center text-center">
                <div>
                    <div class="mb-[25px] md:mb-[30px] lg:mb-[35px] xl:mb-[40px] md:max-w-[540px] lg:max-w-full">
                        <div class="inline-block relative mt-[10px] mb-[20px]">
                            <span
                                class="absolute top-[4.5px] w-[5px] h-[5px] ltr:-left-[3.6px] rtl:-right-[3.6px] bg-orange-600 -rotate-[6.536deg]"></span>
                            <span
                                class="absolute -top-[9.5px] w-[5px] h-[5px] ltr:right-0 rtl:left-0 bg-orange-600 -rotate-[6.536deg]"></span>
                            <span
                                class="inline-block relative text-orange-600 border border-orange-600 py-[5.5px] px-[17.2px] -rotate-[6.536deg]">
                                Contact Us
                                <span
                                    class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-left-[3.5px] rtl:-right-[3.5px] bg-orange-600 -rotate-[6.536deg]"></span>
                                <span
                                    class="absolute -bottom-[2.5px] w-[5px] h-[5px] ltr:-right-[3.5px] rtl:-left-[3.5px] bg-orange-600 -rotate-[6.536deg]"></span>
                            </span>
                        </div>
                        <h2
                            class="!mb-0 !text-[24px] md:!text-[28px] lg:!text-[34px] xl:!text-[36px] -tracking-[.5px] md:-tracking-[.6px] lg:-tracking-[.8px] xl:-tracking-[1px] !leading-[1.2]">
                            Punya Pertanyaan? Hubungi Kami!
                        </h2>
                        <p class="text-gray-500 mt-[10px] md:mt-[15px] lg:mt-[20px]">
                            Tim kami siap membantu Anda menemukan solusi terbaik untuk kebutuhan Anda.
                        </p>
                        <a href="https://wa.me/6285189013293" target="_blank" rel="noopener noreferrer"
                            class="inline-block text-white py-[10.5px] px-[30px] rounded-[100px] transition-all font-medium border border-[#128c7e] bg-[#128c7e] hover:text-white hover:bg-[#25d366] hover:border-[#25d366] mt-[12px] md:mt-0">
                            <i class="ri-whatsapp-line mr-1 text-lg "></i> Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";

export default defineComponent({
    name: "ContactUs",
});
</script>
