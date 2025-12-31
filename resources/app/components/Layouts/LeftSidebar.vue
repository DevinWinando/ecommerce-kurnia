<template>
    <div :class="[
        'sidebar-area bg-white dark:bg-[#0c1427] fixed overflow-hidden z-[7] top-0 h-screen transition-all rounded-r-md',
        { active: stateStoreInstance.open },
    ]">
        <div
            class="logo bg-white dark:bg-[#0c1427] border-b border-gray-100 dark:border-[#172036] px-[25px] pt-[19px] pb-[15px] absolute z-[2] right-0 top-0 left-0">
            <RouterLink to="/dashboard" class="transition-none relative flex items-center">
                <img src="@/assets/images/logo-fixed.png" class="h-[40px]" alt="logo-icon" />
                <span class="font-bold text-black dark:text-white relative ltr:ml-[8px] rtl:mr-[8px] top-px text-xl">
                    Kurnia Jaya
                </span>
            </RouterLink>
            <button type="button"
                class="burger-menu inline-block absolute z-[3] top-[24px] ltr:right-[25px] rtl:left-[25px] transition-all hover:text-primary-500"
                @click="stateStoreInstance.onChange">
                <i class="material-symbols-outlined"> close </i>
            </button>
        </div>
        <div class="pt-[89px] px-[25px] pb-[20px] h-screen hover-scroll-bar">
            <div class="accordion">
                <span class="block relative font-medium uppercase text-gray-400 mb-[8px] text-xs">
                    Main
                </span>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <RouterLink to="/admin/dashboard"
                        class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[30px] rtl:pr-[14px] rtl:pl-[30px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i
                            class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            dashboard
                        </i>
                        <span class="title leading-none"> Dashboard </span>
                    </RouterLink>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <RouterLink to="/admin/chat/rooms"
                        class="accordion-button flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[30px] rtl:pr-[14px] rtl:pl-[30px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]">
                        <i
                            class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            chat
                        </i>
                        <span class="title leading-none"> Chat </span>
                    </RouterLink>
                </div>
                <div class="accordion-item rounded-md text-black dark:text-white mb-[5px] whitespace-nowrap">
                    <button
                        class="accordion-button toggle flex items-center transition-all py-[9px] ltr:pl-[14px] ltr:pr-[30px] rtl:pr-[14px] rtl:pl-[30px] rounded-md font-medium w-full relative hover:bg-gray-50 text-left dark:hover:bg-[#15203c]"
                        type="button">
                        <i
                            class="material-symbols-outlined transition-all text-gray-500 dark:text-gray-400 ltr:mr-[7px] rtl:ml-[7px] !text-[22px] leading-none relative -top-px">
                            settings
                        </i>
                        <span class="title leading-none"> Settings </span>
                        <span
                            class="rounded-full font-medium inline-block text-center w-[20px] h-[20px] text-[11px] leading-[20px] text-success-500 bg-success-50 dark:bg-[#ffffff14] ltr:ml-auto rtl:mr-auto">
                        </span>
                    </button>
                    <div class="accordion-collapse hidden">
                        <div class="pt-[4px]">
                            <ul class="sidebar-sub-menu">
                                <li class="sidemenu-item mb-[4px] last:mb-0">
                                    <RouterLink to="/admin/settings/banner"
                                        class="sidemenu-link rounded-md flex items-center relative transition-all font-medium text-gray-500 dark:text-gray-400 py-[9px] ltr:pl-[38px] ltr:pr-[30px] rtl:pr-[38px] rtl:pl-[30px] hover:text-primary-500 hover:bg-primary-50 w-full text-left dark:hover:bg-[#15203c]">
                                        Banner
                                    </RouterLink>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, onMounted } from "vue";
import stateStore from "@/utils/store";

export default defineComponent({
    name: "LeftSidebar",
    setup() {
        const stateStoreInstance = stateStore;
        const initializeAccordions = () => {
            const accordions = document.querySelectorAll<HTMLElement>(
                ".accordion-button.toggle, .sidemenu-link.toggle"
            );
            accordions.forEach((accordion) => {
                accordion.addEventListener("click", function () {
                    const siblingAccordions = Array.from(
                        this.closest(".accordion-collapse")?.querySelectorAll<HTMLElement>(
                            ".accordion-button.toggle, .sidemenu-link.toggle"
                        ) || accordions
                    );
                    siblingAccordions.forEach((acc) => {
                        if (acc !== accordion) {
                            acc.classList.remove("open");
                            acc.setAttribute("aria-expanded", "false");
                            const nextSibling = acc.nextElementSibling as HTMLElement;
                            if (nextSibling) nextSibling.style.display = "none";
                        }
                    });

                    this.classList.toggle("open");
                    const panel = this.nextElementSibling as HTMLElement;
                    if (panel) {
                        if (panel.style.display === "block") {
                            panel.style.display = "none";
                            this.setAttribute("aria-expanded", "false");
                        } else {
                            panel.style.display = "block";
                            this.setAttribute("aria-expanded", "true");
                        }
                    }
                });
            });
        };

        onMounted(() => {
            initializeAccordions();
        });

        return {
            stateStoreInstance,
        };
    },
});
</script>
