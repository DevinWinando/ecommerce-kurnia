<template>
    <Menu as="div"
        class="relative profile-menu mx-[8px] md:mx-[10px] lg:mx-[12px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0">
        <MenuButton class="flex items-center -mx-[5px] relative ltr:pr-[14px] rtl:pl-[14px] text-black">
            <img :src="avatarUrl"
                class="w-[35px] h-[35px] md:w-[42px] md:h-[42px] rounded-full ltr:md:mr-[2px] ltr:lg:mr-[8px] rtl:md:ml-[2px] rtl:lg:ml-[8px] border-[2px] border-primary-200 inline-block object-cover"
                alt="admin-image" />
            <span class="block font-semibold text-[0px] lg:text-base"> {{ authStore?.user?.first_name }} </span>
            <i
                class="ri-arrow-down-s-line text-[15px] absolute ltr:-right-[3px] rtl:-left-[3px] top-1/2 -translate-y-1/2 mt-px"></i>
        </MenuButton>

        <transition enter-active-class="transition ease-out duration-100"
            enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
            leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
            leave-to-class="transform opacity-0 scale-95">
            <MenuItems
                class="bg-white z-[99] transition-all shadow-3xl py-[22px] absolute mt-[13px] md:mt-[14px] w-[195px] top-full ltr:right-0 rtl:left-0 rounded-md focus:outline-hidden">
                <div class="flex items-center border-b border-gray-100 pb-[12px] mx-[20px] mb-[10px]">
                    <img :src="avatarUrl"
                        class="rounded-full w-[31px] h-[31px] ltr:mr-[9px] rtl:ml-[9px] border-2 border-primary-200 inline-block object-cover"
                        alt="admin-image" />
                    <div>
                        <span class="block text-black font-medium">
                            {{ authStore.user.first_name }}
                        </span>
                    </div>
                </div>

                <ul>
                    <li>
                        <MenuItem>
                        <RouterLink to="/settings"
                            class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black transition-all hover:text-primary-500"
                            exact>
                            <i
                                class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                account_circle
                            </i>
                            My Profile
                        </RouterLink>
                        </MenuItem>
                    </li>
                    <li>
                        <MenuItem>
                        <RouterLink to="/settings/change-password"
                            class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black transition-all hover:text-primary-500"
                            exact>
                            <i
                                class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                settings
                            </i>
                            Change Password
                        </RouterLink>
                        </MenuItem>
                    </li>
                    <li>
                        <MenuItem>
                        <RouterLink to="/settings/history"
                            class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black transition-all hover:text-primary-500"
                            exact>
                            <i
                                class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                                history
                            </i>
                            Transaction History
                        </RouterLink>
                        </MenuItem>
                    </li>
                </ul>
                <div class="border-t border-gray-100 mt-[10px] pt-[10px]">
                    <MenuItem>
                    <button
                        class="block relative py-[7px] ltr:pl-[50px] ltr:pr-[20px] rtl:pr-[50px] rtl:pl-[20px] text-black transition-all hover:text-primary-500 w-full text-left"
                        @click="onLogout">
                        <i
                            class="material-symbols-outlined top-1/2 -translate-y-1/2 !text-[22px] absolute ltr:left-[20px] rtl:right-[20px]">
                            logout
                        </i>
                        Logout
                    </button>
                    </MenuItem>
                </div>
            </MenuItems>
        </transition>
    </Menu>
</template>

<script setup>
import { computed } from "vue";
import { Menu, MenuButton, MenuItems, MenuItem } from "@headlessui/vue";
import { useAuthStore } from "@/stores/auth";
import adminImage from "@/assets/images/admin.png";

const authStore = useAuthStore();

function onLogout() {
    authStore.logout()
}

// Use computed to make it reactive to authStore.user changes
const avatarUrl = computed(() => {
    // Return user avatar if available, otherwise use default admin image
    if (authStore?.user?.avatar_url || authStore?.user?.avatar_thumb_url) {
        return authStore.user.avatar_thumb_url || authStore.user.avatar_url;
    }
    return adminImage;
});
</script>
