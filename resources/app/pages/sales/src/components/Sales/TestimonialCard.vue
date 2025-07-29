<template>
  <div
    class="p-[20px] md:p-[30px] xl:p-[40px] bg-white dark:bg-dark rounded-[15px] md:rounded-[25px]"
  >
    <div
      class="flex items-center text-orange-400 leading-none text-md gap-[2px] mb-[13px] md:mb-[20px]"
    >
      <i
        v-for="star in fullStars"
        :key="'full-' + star"
        class="ri-star-fill"
      ></i>
      <i v-if="hasHalfStar" class="ri-star-half-line"></i>
      <i
        v-for="star in emptyStars"
        :key="'empty-' + star"
        class="ri-star-line"
      ></i>
    </div>
    <p class="text-[#7a857d]">"{{ testimonial.text }}"</p>
    <div
      class="flex items-center gap-[12px] mt-[15px] md:mt-[20px] lg:mt-[25px]"
    >
      <img
        :src="testimonial.image"
        class="rounded-full w-[42px]"
        :alt="testimonial.name"
      />
      <div>
        <h5
          class="!text-base !mb-[4px] !font-semibold !text-[#06201B] dark:!text-white"
        >
          {{ testimonial.name }}
        </h5>
        <span class="block text-[#7a857d]">
          {{ testimonial.role }}
        </span>
      </div>
    </div>
  </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";

interface Testimonial {
  rating: number;
  text: string;
  name: string;
  role: string;
  image: string;
}

export default defineComponent({
  name: "TestimonialCard",
  props: {
    testimonial: {
      type: Object as PropType<Testimonial>,
      required: true,
    },
  },
  computed: {
    fullStars() {
      return Math.floor(this.testimonial.rating);
    },
    hasHalfStar() {
      return this.testimonial.rating % 1 !== 0;
    },
    emptyStars() {
      const empty = 5 - Math.ceil(this.testimonial.rating);
      return empty > 0 ? empty : 0;
    },
  },
});
</script>
