<template>
    <div
        class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mt-[15vh]"
    >
        <div
            class="trezo-card-header mb-[20px] flex items-center justify-between"
        >
            <div class="trezo-card-title">
                <h5 class="!mb-0 !text-md !font-medium">Messages</h5>
            </div>
        </div>
        <div class="h-[65vh] trezo-card-content">
            <div class="trezo-tabs" id="trezo-tabs">
                <div class="chat-sidebar-tab-content">
                    <div
                        class="tab-pane ltr:-mr-[20px] rtl:-ml-[20px] md:ltr:-mr-[25px] md:rtl:-ml-[25px]"
                    >
                        <div
                            class="chat-users-list overflow-y-scroll h-[70vh] ltr:pr-[20px] rtl:pl-[20px] md:ltr:pr-[25px] md:rtl:pl-[25px] pt-[20px]"
                        >
                            <div
                                v-for="room in rooms"
                                class="mb-3 pb-[13.5px] border-b border-gray-100 dark:border-[#172036] last:border-0 last:pb-0 last:mb-0"
                            >
                                <RouterLink :to="`/admin/chat/${room.id}`" class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <div
                                            class="relative ltr:mr-[10px] rtl:ml-[10px]"
                                        >
                                            <span
                                                class="absolute ltr:right-0 rtl:left-0 bottom-0 w-[10px] h-[10px] rounded-full bg-success-500 border-[2px] border-white dark:border-[#0c1427]"
                                            ></span>
                                        </div>
                                        <div>
                                            <span
                                                class="block font-semibold text-black dark:text-white"
                                            >
                                                {{ room.customer?.full_name }}
                                            </span>
                                            <span
                                                class="text-success-600 block text-xs mt-[2px]"
                                            >
                                                {{
                                                    room.latest_message?.message
                                                }}
                                            </span>
                                        </div>
                                    </div>
                                    <span class="text-xs block">{{
                                        formatTime(
                                            room.latest_message?.created_at
                                        )
                                    }}</span>
                                </RouterLink>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted, watch, onBeforeUnmount, nextTick } from "vue";
import axios from "axios";
import { useAuthStore } from "@/stores/auth";

const authStore = useAuthStore();

const rooms = ref([]);

const fetchRooms = async () => {
    const res = await axios.get(`/api/rooms`);
    rooms.value = res.data;
};

const formatTime = (dateTime) => {
    const date = new Date(dateTime);

    const formatted = new Intl.DateTimeFormat("en-GB", {
        day: "2-digit",
        month: "short",
        year: "2-digit",
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
    })
        .format(date)
        .replace(",", "")
        .replace(":", ".");

    return formatted;
};

onMounted(() => {
    fetchRooms();
});
</script>
