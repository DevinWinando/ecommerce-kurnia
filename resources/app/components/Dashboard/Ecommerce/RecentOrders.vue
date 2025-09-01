<template>
    <div class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md mt-[12vh]">
        <div class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex sm:items-center sm:justify-between">
            <div class="trezo-card-title">
                <h5 class="!mb-0">Banners</h5>
            </div>
        </div>
        <div class="trezo-card-content">
            <form class="relative w-full my-[13px] flex justify-end" @submit.prevent>
                <div class="trezo-card-content">
                    <div id="fileUploader">
                        <div
                            class="relative flex items-center justify-center overflow-hidden rounded-md py-[20px] px-[20px] border border-gray-200 dark:border-[#172036]">
                            <div class="flex items-center justify-center">
                                <div
                                    class="w-[35px] h-[35px] border border-gray-100 dark:border-[#15203c] flex items-center justify-center rounded-md text-primary-500 text-lg ltr:mr-[12px] rtl:ml-[12px]">
                                    <i class="ri-upload-2-line"></i>
                                </div>
                                <p class="leading-[1.5]">
                                    <strong class="text-black dark:text-white">Click to upload</strong><br />
                                    you file here
                                </p>
                            </div>
                            <input type="file" id="fileInput" @change="handleFileUpload"
                                class="absolute top-0 left-0 right-0 bottom-0 rounded-md z-[1] opacity-0 cursor-pointer" />
                        </div>
                    </div>
                </div>
            </form>
            <div class="table-responsive overflow-x-auto">
                <table class="w-full">
                    <thead class="text-black dark:text-white">
                        <tr>
                            <th
                                class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                Banner ID
                            </th>
                            <th
                                class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                Banner
                            </th>
                            <th
                                class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-black dark:text-white">
                        <tr v-for="item in paginatedItems" :key="item.orderID">
                            <td
                                class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                {{ item.id }}
                            </td>
                            <td
                                class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                <div class="flex items-center">
                                    <div class="rounded-md w-[60px]">
                                        <img :src="item.image" class="inline-block rounded-md" alt="product-image" />
                                    </div>
                                </div>
                            </td>
                            <td
                                class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l">
                                <div class="flex items-center">
                                    <button @click="handleDelete(item.id)"
                                        class="text-red-400 hover:text-red-200 dark:hover:text-red-400 transition-all ml-[10px]">
                                        <i class="material-symbols-outlined">delete</i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div
                class="px-[20px] py-[12px] md:py-[14px] rounded-b-md border-l border-r border-b border-gray-100 dark:border-[#172036] sm:flex sm:items-center justify-between">
                <p class="!mb-0 text-sm">
                    Showing {{ startItem + 1 }} to {{ endItem }} of
                    {{ filteredItems.length }} results
                </p>
                <ol class="mt-[10px] sm:mt-0">
                    <li class="inline-block mx-[3px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
                        :class="{ disabled: currentPage === 1 }">
                        <a href="#"
                            class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
                            @click.prevent="prevPage">
                            <span class="opacity-0"> 0 </span>
                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                chevron_left
                            </i>
                        </a>
                    </li>
                    <li class="inline-block mx-[3px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
                        v-for="page in totalPages" :key="page" :class="{ active: currentPage === page }">
                        <a href="#"
                            class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
                            @click.prevent="goToPage(page)">
                            {{ page }}
                        </a>
                    </li>
                    <li class="inline-block mx-[3px] ltr:first:ml-0 ltr:last:mr-0 rtl:first:mr-0 rtl:last:ml-0"
                        :class="{ disabled: currentPage === totalPages }">
                        <a href="#"
                            class="w-[31px] h-[31px] block leading-[29px] relative text-center rounded-md border border-gray-100 dark:border-[#172036] transition-all hover:bg-primary-500 hover:text-white hover:border-primary-500"
                            @click.prevent="nextPage">
                            <span class="opacity-0"> 0 </span>
                            <i class="material-symbols-outlined left-0 right-0 absolute top-1/2 -translate-y-1/2">
                                chevron_right
                            </i>
                        </a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref, computed, onMounted } from 'vue'
import { useClickOutside } from '@/utils/useClickOutside'
import image1 from '@/assets/images/users/user1.jpg'
import BannerService from '@/services/BannerService'

// Dropdown logic
const { isActive, toggleActive } = useClickOutside('dropdownToggle')

// Upload handler
const bannerService = new BannerService()
const handleFileUpload = (event) => {
    const fileInput = event.target
    if (fileInput.files && fileInput.files.length > 0) {
        const file = fileInput.files[0]

        bannerService.createBanner({
            file: file,
        }).then(async (response) => {
            items.value = (await bannerService.getBanners()).data?.data;
        }).catch((error) => {
            console.error('Error uploading banner:', error)
        })

        event.target.value = ''
    }
}

const handleDelete = (id) => {
    // confirmation
    if (!confirm('Are you sure you want to delete this banner?')) {
        return
    }

    bannerService.deleteBanner(id).then(async () => {
        items.value = (await bannerService.getBanners()).data?.data;
    }).catch((error) => {
        console.error('Error deleting banner:', error)
    })
}

// Dummy data
const items = ref([])

onMounted(async () => {
    // Fetch banners from the service
    items.value = (await bannerService.getBanners()).data?.data;

    console.log('Banners fetched:', items.value)
})

// Pagination & Search
const searchTerm = ref('')
const currentPage = ref(1)
const itemsPerPage = ref(5)

const filteredItems = computed(() => {
    console.log(items.value, searchTerm.value)
    return items.value.filter((item) => {
        const query = searchTerm.value.toLowerCase()
        return (
            item.image.toLowerCase().includes(query)
        )
    })
})

const totalPages = computed(() =>
    Math.ceil(filteredItems.value.length / itemsPerPage.value)
)

const startItem = computed(() =>
    (currentPage.value - 1) * itemsPerPage.value
)

const endItem = computed(() =>
    Math.min(startItem.value + itemsPerPage.value, filteredItems.value.length)
)

const paginatedItems = computed(() =>
    filteredItems.value.slice(startItem.value, endItem.value)
)

const nextPage = () => {
    if (currentPage.value < totalPages.value) {
        currentPage.value++
    }
}

const prevPage = () => {
    if (currentPage.value > 1) {
        currentPage.value--
    }
}

const goToPage = (page) => {
    currentPage.value = page
}
</script>

<style lang="scss" scoped>
ol {
    li {
        &.active {
            a {
                background-color: #605dff;
                color: #fff;
                border-color: #605dff;
            }
        }
    }
}
</style>
