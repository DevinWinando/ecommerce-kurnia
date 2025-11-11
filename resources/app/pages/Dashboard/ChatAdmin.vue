<template>
    <div class="lg:grid lg:grid-cols-3 gap-[25px] px-6">
        <div class="lg:col-span-1">
            <Sidebar />
        </div>
        <div class="lg:col-span-2">
            <div class="wrap">
                <div
                    class="trezo-card bg-white mb-[25px] p-[20px] md:p-[25px] rounded-md"
                >
                    <div class="trezo-card-content relative">
                        <div
                            class="border-t border-gray-100 dark:border-[#172036] mt-[20px] mb-[18px]"
                        ></div>
                        <div
                            class="chat-body overflow-y-scroll h-[55vh] ltr:-mr-[25px] rtl:-ml-[25px]"
                            ref="chatBox"
                        >
                            <ul
                                class="flex-col flex ltr:pl-[25px] rtl:pr-[25px]"
                            >
                                <li
                                    v-for="message in messages"
                                    :key="message.id"
                                    :class="{
                                        'relative w-full md:w-[90%] ltr:text-left ltr:mr-auto':
                                            authStore.user &&
                                            authStore.user.id ===
                                                message.user_id,
                                        'relative w-full md:w-[90%] ltr:text-left md:ltr:mr-auto':
                                            !authStore.user ||
                                            authStore.user.id !==
                                                message.user_id,
                                    }"
                                >
                                    <div
                                        :class="{
                                            'ltr:text-right rtl:text-left':
                                                authStore.user &&
                                                authStore.user.id ===
                                                    message.user_id,
                                            'ltr:text-left rtl:text-right':
                                                !authStore.user ||
                                                authStore.user.id !==
                                                    message.user_id,
                                        }"
                                    >
                                        <div class="mb-[5px] last:mb-0">
                                            <p
                                                :class="{
                                                    'py-[10px] px-[15px] inline-block bg-blue-400 text-white ltr:rounded-l-md rtl:rounded-r-md':
                                                        authStore.user &&
                                                        authStore.user.id ===
                                                            message.user_id,
                                                    'py-[10px] px-[15px] inline-block bg-gray-50 dark:bg-[#15203c] ltr:rounded-r-md rtl:rounded-l-md':
                                                        !authStore.user ||
                                                        authStore.user.id !==
                                                            message.user_id,
                                                }"
                                            >
                                                {{ message.message }}
                                            </p>
                                        </div>
                                    </div>
                                    <span
                                        :class="{
                                            'block text-xs ltr:text-right rtl:text-left mb-[20px] mt-[7px]':
                                                !authStore.user ||
                                                authStore.user.id ===
                                                    message.user_id,
                                            'block text-xs ltr:text-left rtl:text-right mb-[20px] mt-[7px]':
                                                authStore.user &&
                                                authStore.user.id !==
                                                    message.user_id,
                                        }"
                                    >
                                        {{ formatTime(message.created_at) }}
                                    </span>
                                </li>
                            </ul>
                        </div>
                        <div
                            class="md:flex gap-[20px] sticky rounded-md p-[20px] bg-gray-50 dark:bg-[#15203c]"
                        >
                            <div
                                class="relative mt-[15px] md:mt-0 md:ltr:pr-[70px] md:rtl:pl-[70px] flex-auto"
                            >
                                <input
                                    v-model="text"
                                    @keyup.enter="send"
                                    type="text"
                                    class="block w-full rounded-md bg-white px-[15px] h-[55px] text-black placeholder:text-gray-500 dark:text-gray-400 outline-0"
                                    placeholder="Tulis pesan..."
                                />
                                <button
                                    @click="send"
                                    class="md:absolute flex items-center justify-center ltr:right-0 rtl:left-0 rounded-sm transition-all text-black hover:bg-primary-400 md:top-1/2 md:-translate-y-1/2 w-[55px] h-[55px] mt-[15px] md:mt-0"
                                >
                                    <i class="material-symbols-outlined">
                                        send
                                    </i>
                                </button>
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
import { useRoute } from "vue-router";
import axios from "axios";
import { useAuthStore } from "@/stores/auth";
import Sidebar from "@/components/Apps/Chat/Sidebar.vue";

const authStore = useAuthStore();

const route = useRoute();
const roomId = ref(Number(route.params.id));
const messages = ref([]);
const text = ref("");
let channel = null;

const fetchMessages = async (id) => {
    const res = await axios.get(`/api/rooms/${id}`);
    messages.value = res.data;
};

const listen = (id) => {
    if (!window.Echo) {
        console.error("Echo belum siap");
        return;
    }

    if (!id) {
        console.error("Room ID belum ada");
        return;
    }

    channel = window.Echo.private(`room.${id}`).listen(".MessageSent", (e) => {
        if (e.user.id !== authStore.user.id) {
            messages.value.push(e);
        }
    });
};

const cleanup = () => {
    if (channel) {
        channel.stopListening("MessageSent");
        channel = null;
    }
};

const send = async () => {
    if (!text.value) return;
    await axios.post("/api/messages", {
        room_id: roomId.value,
        message: text.value,
    });
    messages.value.push({
        id: Date.now(),
        message: text.value,
        user: { name: "Me" },
        user_id: authStore.user ? authStore.user.id : null,
        created_at: new Date().toISOString(),
    });
    text.value = "";
};

const chatBox = ref(null);

const scrollToBottom = () => {
    if (chatBox.value) {
        chatBox.value.scrollTop = chatBox.value.scrollHeight;
    }
};

// Auto scroll tiap messages berubah
watch(
    messages,
    async () => {
        await nextTick();
        scrollToBottom();
    },
    { deep: true }
);

onMounted(async () => {
    await fetchMessages(roomId.value);
    listen(roomId.value);
});

watch(
    () => route.params.id,
    async (val) => {
        cleanup();
        roomId.value = Number(val);
        await fetchMessages(roomId.value);
        listen(roomId.value);
    }
);

const formatTime = (dateTime) => {
    const date = new Date(dateTime);

    const formatted = new Intl.DateTimeFormat("en-GB", {
        day: "2-digit",
        month: "short",
        year: "numeric",
        hour: "2-digit",
        minute: "2-digit",
        hour12: false,
    })
        .format(date)
        .replace(",", "")
        .replace(":", ".");

    return formatted;
};

onBeforeUnmount(cleanup);
</script>

<style scoped>
.wrap {
    margin-top: 15vh;
}

.messages {
    border: 1px solid #ddd;
    padding: 12px;
    min-height: 300px;
}

.msg {
    margin: 6px 0;
}

.input {
    display: flex;
    gap: 8px;
    margin-top: 8px;
}

input {
    flex: 1;
    padding: 8px;
}
</style>
