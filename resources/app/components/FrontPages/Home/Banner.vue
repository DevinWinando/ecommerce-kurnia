<template>
    <div
        class="min-h-[100vh] pt-[145px] md:pt-[145px] lg:pt-[170px] xl:pt-[140px] pb-4 relative z-[1] overflow-hidden bg-white">
        <div class="container sm:max-w-[540px] md:max-w-[720px] lg:max-w-[960px] xl:max-w-[1308px] mx-auto px-[12px]">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-[25px] items-center justify-center">
                <div class="ltr:lg:-mr-[75px] rtl:lg:-ml-[75px]">
                    <h2
                        class="-tracking-[1px] lg:-tracking-[1.5px] !text-[30px] md:!text-[45px] lg:!text-[48px] xl:!text-[48px] !font-medium !leading-[1.2] !mb-[14px] md:!mb-[17px] lg:!mb-[20px] xl:!mb-[25px]">
                        <span class="text-orange-600 italic">Pusat</span> Kebutuhan Plastik & Baking Terlengkap di
                        Purbalingga!
                    </h2>
                    <p class="md:text-[15px] lg:text-md">
                        Temukan ratusan produk berkualitas yang jadi andalan baker rumahan, bisnis kuliner, dan EO sejak
                        1999.
                    </p>
                    <div class="-mt-[5px] md:mt-[25px] lg:mt-[20px] xl:mt-[30px] ">
                        <RouterLink to="/shop"
                            class="inline-block text-white py-[10.5px] px-[30px] rounded-[100px] transition-all font-medium border border-orange-500 bg-orange-500 hover:text-white hover:bg-orange-700 hover:border-orange-700 mt-[12px] md:mt-0">
                            Belanja Sekarang
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute top-[25%] w-[40%] right-[1%] bottom-0 bg-cover bg-no-repeat bg-top -z-[1] dark:hidden">
            <img src="@/assets/images/banner.png"
                class="hidden md:inline-block -z-[1] rounded-lg top-0 ltr:left-0 rtl:right-0" alt="dots">
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";


export default defineComponent({
    name: "Banner",
    components: {
    },
    setup() {

        return {
        };
    },
});
</script>
