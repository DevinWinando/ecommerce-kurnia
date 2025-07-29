<template>
  <div class="lg:grid lg:grid-cols-3 gap-[25px] mt-[15vh]">
    <div class="lg:col-span-2">
      <div
        class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md"
      >
        <div
          class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between"
        >
          <div class="trezo-card-title">
            <h5 class="!mb-0">Pesananmu</h5>
          </div>
          <div class="trezo-card-subtitle mt-[15px] sm:mt-0">
            <h5 class="!mb-0">Customer ID : 357951</h5>
          </div>
        </div>

        <div class="trezo-card-content">
          <div class="table-responsive overflow-x-auto">
            <table class="w-full">
              <thead class="text-black dark:text-white">
                <tr>
                  <th
                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Order ID
                  </th>
                  <th
                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Produk
                  </th>
                  <th
                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Jumlah
                  </th>
                  <th
                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Harga
                  </th>
                  <th
                    class="font-medium text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tr-md"
                  >
                    Total
                  </th>
                </tr>
              </thead>
              <tbody class="text-black dark:text-white">
                <tr>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    #JAN-2345
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <div class="flex items-center">
                      <div class="rounded-md w-[40px]">
                        <img
                          src="@/assets/images/products/product-1.jpg"
                          class="inline-block rounded-md"
                          alt="product-image"
                        />
                      </div>
                      <div class="ltr:ml-[12px] rtl:mr-[12px]">
                        <RouterLink
                          to="/ecommerce/product-details"
                          class="block font-medium md:text-[15px] transition-all hover:text-primary-500"
                        >
                          Susu Evaporasi POLOCOCOA
                        </RouterLink>
                      </div>
                    </div>
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <QuantityCounter />
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 80.00
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 80.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    #JAN-1323
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <div class="flex items-center">
                      <div class="rounded-md w-[40px]">
                        <img
                          src="@/assets/images/products/product-2.jpg"
                          class="inline-block rounded-md"
                          alt="product-image"
                        />
                      </div>
                      <div class="ltr:ml-[12px] rtl:mr-[12px]">
                        <RouterLink
                          to="/ecommerce/product-details"
                          class="block font-medium md:text-[15px] transition-all hover:text-primary-500"
                        >
                          Ragi Instant Baker Bonus A
                        </RouterLink>
                      </div>
                    </div>
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <QuantityCounter />
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 150.00
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 450.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    #DEC-1234
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <div class="flex items-center">
                      <div class="rounded-md w-[40px]">
                        <img
                          src="@/assets/images/products/product-3.jpg"
                          class="inline-block rounded-md"
                          alt="product-image"
                        />
                      </div>
                      <div class="ltr:ml-[12px] rtl:mr-[12px]">
                        <RouterLink
                          to="/ecommerce/product-details"
                          class="block font-medium md:text-[15px] transition-all hover:text-primary-500"
                        >
                          Keju Mozarella Green Valley
                        </RouterLink>
                      </div>
                    </div>
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <QuantityCounter />
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 750.00
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 750.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    #DEC-3567
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <div class="flex items-center">
                      <div class="rounded-md w-[40px]">
                        <img
                          src="@/assets/images/products/product-4.jpg"
                          class="inline-block rounded-md"
                          alt="product-image"
                        />
                      </div>
                      <div class="ltr:ml-[12px] rtl:mr-[12px]">
                        <RouterLink
                          to="/ecommerce/product-details"
                          class="block font-medium md:text-[15px] transition-all hover:text-primary-500"
                        >
                          Sakura Konyaku Jelly Powder
                        </RouterLink>
                      </div>
                    </div>
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <QuantityCounter />
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 15.00
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 75.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    #DEC-1098
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <div class="flex items-center">
                      <div class="rounded-md w-[40px]">
                        <img
                          src="@/assets/images/products/product-5.jpg"
                          class="inline-block rounded-md"
                          alt="product-image"
                        />
                      </div>
                      <div class="ltr:ml-[12px] rtl:mr-[12px]">
                        <RouterLink
                          to="/ecommerce/product-details"
                          class="block font-medium md:text-[15px] transition-all hover:text-primary-500"
                        >
                          Susu Cair Indomilk
                        </RouterLink>
                      </div>
                    </div>
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    <QuantityCounter />
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 25.00
                  </td>
                  <td
                    class="ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 50.00
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <div class="lg:col-span-1">
      <div
        class="trezo-card bg-white dark:bg-[#0c1427] mb-[25px] p-[20px] md:p-[25px] rounded-md"
      >
        <div
          class="trezo-card-header mb-[20px] md:mb-[25px] sm:flex items-center justify-between"
        >
          <div class="trezo-card-title">
            <h5 class="!mb-0">Ringkasan Pesanan</h5>
          </div>
        </div>

        <div class="trezo-card-content">
          <div class="table-responsive overflow-x-auto">
            <table class="w-full">
              <thead class="text-black dark:text-white">
                <tr>
                  <th
                    class="font-medium ltr:text-left rtl:text-right px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Deskripsi
                  </th>
                  <th
                    class="font-medium ltr:text-right rtl:text-left px-[20px] py-[11px] bg-gray-50 dark:bg-[#15203c] whitespace-nowrap first:rounded-tl-md"
                  >
                    Harga
                  </th>
                </tr>
              </thead>
              <tbody class="text-black dark:text-white">
                <tr>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Grand Total :
                  </td>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 1,105.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Diskon :
                  </td>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    -Rp. 105.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Subtotal :
                  </td>
                  <td
                    class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 1,000.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Ongkos Kirim :
                  </td>
                  <td
                    class="text-gray-500 dark:text-gray-400 ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 80.00
                  </td>
                </tr>
                <tr>
                  <td
                    class="font-medium ltr:text-left rtl:text-right whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Total :
                  </td>
                  <td
                    class="font-medium ltr:text-right rtl:text-left whitespace-nowrap px-[20px] py-[15px] border-b border-gray-100 dark:border-[#172036] ltr:first:border-l ltr:last:border-r rtl:first:border-r rtl:last:border-l"
                  >
                    Rp. 900.00
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <h6 class="mt-[20px] md:mt-[25px] mb-[10px]">Tambahkan Catatan</h6>
          <form>
            <textarea
              class="h-[140px] rounded-md text-black dark:text-white border border-gray-200 dark:border-[#172036] bg-white dark:bg-[#0c1427] p-[17px] block w-full outline-0 transition-all placeholder:text-gray-500 dark:placeholder:text-gray-400 focus:border-primary-500"
              placeholder="Catatan untuk pesanan ini"
            ></textarea>
            <button
              type="button"
              class="mt-[20px] md:mt-[25px] font-medium inline-block transition-all rounded-md md:text-md py-[10px] md:py-[12px] px-[20px] md:px-[22px] bg-[#7d0909] text-white hover:bg-[#996c6c]"
            >
              <span class="inline-block relative ltr:pl-[29px] rtl:pr-[29px]">
                <i
                  class="material-symbols-outlined ltr:left-0 rtl:right-0 absolute top-1/2 -translate-y-1/2"
                >
                  add
                </i>
                Proses Order
              </span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import QuantityCounter from "./QuantityCounter.vue";

export default defineComponent({
  // eslint-disable-next-line vue/multi-word-component-names
  name: "Cart",
  components: {
    QuantityCounter,
  },
});
</script>
