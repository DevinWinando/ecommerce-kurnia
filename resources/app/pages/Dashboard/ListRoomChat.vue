<template>
    <div class="wrap mt-[15vh]">
        <h2>Admin — Rooms</h2>
        <div class="rooms">
            <router-link v-for="r in rooms" :key="r.id" class="room" :to="{ name: 'ChatAdmin', params: { id: r.id } }">
                <div class="title">{{ r.customer.name }}</div>
                <div class="sub">Room #{{ r.id }}</div>
            </router-link>
        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import axios from 'axios';

const rooms = ref([]);

onMounted(async () => {
    const res = await axios.get('/api/rooms'); // admin only
    rooms.value = res.data;

    console.log(rooms)
});
</script>

<style scoped>
.wrap {
    max-width: 720px;
    margin: 24px auto;
    margin-top: 15vh;
}

.rooms {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
    gap: 12px;
}

.room {
    border: 1px solid #ddd;
    padding: 12px;
    border-radius: 8px;
    display: block;
    text-decoration: none;
}

.title {
    font-weight: 700;
}

.sub {
    font-size: 12px;
    color: #666;
}
</style>
