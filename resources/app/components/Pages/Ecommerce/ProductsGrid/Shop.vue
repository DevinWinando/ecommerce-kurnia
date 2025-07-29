<template>
  <div class="bg-white">
    <div>
      <TransitionRoot as="template" :show="mobileFiltersOpen">
        <Dialog class="relative z-40 lg:hidden" @close="mobileFiltersOpen = false">
          <TransitionChild as="template" enter="transition-opacity ease-linear duration-300" enter-from="opacity-0"
            enter-to="opacity-100" leave="transition-opacity ease-linear duration-300" leave-from="opacity-100"
            leave-to="opacity-0">
            <div class="fixed inset-0 bg-black/25" />
          </TransitionChild>

          <div class="fixed inset-0 z-40 flex">
            <TransitionChild as="template" enter="transition ease-in-out duration-300 transform"
              enter-from="translate-x-full" enter-to="translate-x-0"
              leave="transition ease-in-out duration-300 transform" leave-from="translate-x-0"
              leave-to="translate-x-full">
              <DialogPanel
                class="relative ml-auto flex size-full max-w-xs flex-col overflow-y-auto bg-white pt-4 pb-6 shadow-xl">
                <div class="flex items-center justify-between px-4">
                  <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                  <button type="button"
                    class="relative -mr-2 flex size-10 items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-50"
                    @click="mobileFiltersOpen = false">
                    <span class="sr-only">Close menu</span>
                    <XMarkIcon class="size-6" aria-hidden="true" />
                  </button>
                </div>

                <!-- Filters -->
                <form class="mt-4 border-t border-gray-200">
                  <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                    <li v-for="category in subCategories" :key="category.name">
                      <a :href="category.href" class="block px-2 py-3">{{ category.name }}</a>
                    </li>
                  </ul>

                  <Disclosure as="div" v-for="section in filters" :key="section.id"
                    class="border-t border-gray-200 px-4 py-6" v-slot="{ open }">
                    <h3 class="-mx-2 -my-3 flow-root">
                      <DisclosureButton
                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500">
                        <span class="font-medium text-gray-900">{{ section.name }}</span>
                        <span class="ml-6 flex items-center">
                          <PlusIcon v-if="!open" class="size-5" />
                          <MinusIcon v-else class="size-5" />
                        </span>
                      </DisclosureButton>
                    </h3>
                    <DisclosurePanel class="pt-6">
                      <div class="space-y-6">
                        <div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex gap-3">
                          <input :id="`filter-mobile-${section.id}-${optionIdx}`" :name="`${section.id}[]`"
                            :value="option.value" type="checkbox" />
                          <label :for="`filter-mobile-${section.id}-${optionIdx}`" class="text-gray-500">{{ option.label
                          }}</label>
                        </div>
                      </div>
                    </DisclosurePanel>
                  </Disclosure>
                </form>
              </DialogPanel>
            </TransitionChild>
          </div>
        </Dialog>
      </TransitionRoot>

      <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex items-baseline justify-between border-b border-gray-200 pt-24 pb-6">
          <h1 class="text-4xl font-bold tracking-tight text-gray-900">Our Products</h1>

          <div class="flex items-center">
            <Menu as="div" class="relative inline-block text-left">
              <MenuButton
                class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900">
                Sort
                <ChevronDownIcon class="-mr-1 ml-1 size-5 text-gray-400 group-hover:text-gray-500" />
              </MenuButton>
              <transition enter-active-class="transition ease-out duration-100"
                enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100"
                leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100"
                leave-to-class="transform opacity-0 scale-95">
                <MenuItems
                  class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black/5">
                  <MenuItem v-for="option in sortOptions" :key="option.name" v-slot="{ active }">
                  <a :href="option.href"
                    :class="[option.current ? 'font-medium text-gray-900' : 'text-gray-500', active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm']">
                    {{ option.name }}
                  </a>
                  </MenuItem>
                </MenuItems>
              </transition>
            </Menu>
            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 lg:hidden"
              @click="mobileFiltersOpen = true">
              <FunnelIcon class="size-5" />
            </button>
          </div>
        </div>

        <section class="pt-6 pb-24">
          <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
            <!-- Sidebar Filters -->
            <form class="hidden lg:block">
              <ul class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">
                <li v-for="category in subCategories" :key="category.name">
                  <a :href="category.href">{{ category.name }}</a>
                </li>
              </ul>

              <Disclosure as="div" v-for="section in filters" :key="section.id" class="border-b border-gray-200 py-6"
                v-slot="{ open }">
                <h3 class="-my-3 flow-root">
                  <DisclosureButton
                    class="flex w-full items-center justify-between py-3 text-sm text-gray-400 hover:text-gray-500">
                    <span class="font-medium text-gray-900">{{ section.name }}</span>
                    <span class="ml-6 flex items-center">
                      <PlusIcon v-if="!open" class="size-5" />
                      <MinusIcon v-else class="size-5" />
                    </span>
                  </DisclosureButton>
                </h3>
                <DisclosurePanel class="pt-6">
                  <div class="space-y-4">
                    <div v-for="(option, optionIdx) in section.options" :key="option.value" class="flex gap-3">
                      <input :id="`filter-${section.id}-${optionIdx}`" :name="`${section.id}[]`" :value="option.value"
                        type="checkbox" :checked="option.checked" />
                      <label :for="`filter-${section.id}-${optionIdx}`" class="text-sm text-gray-600">{{ option.label
                      }}</label>
                    </div>
                  </div>
                </DisclosurePanel>
              </Disclosure>
            </form>

            <!-- Product Grid -->
            <div class="lg:col-span-3">
              <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div v-for="product in products" :key="product.id">
                  <div class="relative">
                    <span
                      class="block ltr:right-0 rtl:left-0 bottom-0 w-[65px] h-[65px] absolute ltr:rounded-tl-md rtl:rounded-tr-md bg-white dark:bg-[#0c1427]">
                    </span>
                    <RouterLink :to="product.link" class="block rounded-md">
                      <img :src="product.image" alt="product-image" class="rounded-md" />
                    </RouterLink>
                    <button
                      class="rounded-md transition-all z-[1] inline-block absolute ltr:right-0 rtl:left-0 bottom-0 w-[60px] h-[60px] leading-[72px] bg-[#7d0909] text-white hover:bg-[#996c6c]"
                      type="button">
                      <i class="material-symbols-outlined">shopping_cart</i>
                    </button>
                  </div>
                  <div class="mt-[19px]">
                    <h6 class="!text-md !font-normal">
                      <RouterLink :to="product.link" class="transition-all hover:text-primary-500">
                        {{ product.name }}
                      </RouterLink>
                    </h6>
                    <div class="flex items-center justify-between mt-[12px] md:mt-[20px] lg:mt-[28px]">
                      <div class="flex items-center">
                        <span class="block font-bold text-black dark:text-white text-[16px]">
                          Rp. {{ product.price }}
                        </span>
                        <span class="block text-[12px] text-gray-400 ltr:ml-[7px] rtl:mr-[7px]">
                          Rp. {{ product.oldPrice }}
                        </span>
                      </div>
                      <div class="leading-none text-orange-400 flex items-center gap-[2px]">
                        <i v-for="star in 5" :key="star" :class="starClass(star, product.ratings)"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import { RouterLink } from 'vue-router'
import {
  Dialog,
  DialogPanel,
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  Menu,
  MenuButton,
  MenuItem,
  MenuItems,
  TransitionChild,
  TransitionRoot,
} from '@headlessui/vue'
import {
  XMarkIcon,
  ChevronDownIcon,
  FunnelIcon,
  MinusIcon,
  PlusIcon,
  Squares2X2Icon,
} from '@heroicons/vue/20/solid'

import image1 from '@/assets/images/products/product-1.jpg'
import image2 from '@/assets/images/products/product-2.jpg'
import image3 from '@/assets/images/products/product-3.jpg'
import image4 from '@/assets/images/products/product-4.jpg'
import image5 from '@/assets/images/products/product-5.jpg'
import image6 from '@/assets/images/products/product-6.jpg'
import image7 from '@/assets/images/products/product-7.jpg'
import image9 from '@/assets/images/products/product-9.jpg'

const mobileFiltersOpen = ref(false)

const sortOptions = [
  { name: 'Most Popular', href: '#', current: true },
  { name: 'Best Rating', href: '#', current: false },
  { name: 'Newest', href: '#', current: false },
  { name: 'Price: Low to High', href: '#', current: false },
  { name: 'Price: High to Low', href: '#', current: false },
]

const subCategories = [
  { name: 'Plastic Supplies', href: '#' },
  { name: 'Baking Supplies', href: '#' },
]

const filters = [
  {
    id: 'size',
    name: 'Size',
    options: [
      { value: 'small', label: 'Small', checked: false },
      { value: 'medium', label: 'Medium', checked: true },
      { value: 'large', label: 'Large', checked: false },
    ],
  },
  {
    id: 'category',
    name: 'Category',
    options: [
      { value: 'plastic', label: 'Plastic Supplies', checked: true },
      { value: 'baking', label: 'Baking Supplies', checked: false },
    ],
  },
]

const products = ref([
  {
    id: 1,
    name: 'Susu Evaporasi POLOCOCOA',
    image: image1,
    price: '9.500',
    oldPrice: '12.500',
    ratings: 5,
    link: '/ecommerce/product-details',
  },
  {
    id: 2,
    name: 'Ragi Instant Baker\' Bonus A',
    image: image2,
    price: '2.000',
    oldPrice: '3.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 3,
    name: 'Keju Mozarella Green Valley',
    image: image3,
    price: '10.000',
    oldPrice: '15.000',
    ratings: 4,
    link: '/ecommerce/product-details',
  },
  {
    id: 4,
    name: "Sakura Konyaku Jelly Powder",
    image: image4,
    price: '9.000',
    oldPrice: '12.000',
    ratings: 3.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 5,
    name: "Susu Cair Indomilk",
    image: image5,
    price: '9.000',
    oldPrice: '18.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 6,
    name: 'Achor Cream Cheese',
    image: image6,
    price: '20.000',
    oldPrice: '30.000',
    ratings: 3,
    link: '/ecommerce/product-details',
  },
  {
    id: 7,
    name: 'Nutella Chocolate Hazelnut Spread',
    image: image7,
    price: '29.000',
    oldPrice: '35.000',
    ratings: 4.5,
    link: '/ecommerce/product-details',
  },
  {
    id: 9,
    name: 'Minyak Zaitun Borgres 125ml ',
    image: image9,
    price: '30.000',
    oldPrice: '40.000',
    ratings: 4,
    link: '/ecommerce/product-details',
  },
])

const starClass = (star, rating) => {
  if (star <= rating) return 'ri-star-fill'
  if (star - rating < 1) return 'ri-star-half-fill'
  return 'ri-star-line'
}
</script>
