<template>
  <div class="flex items-center">
    <div class="flex items-center justify-between my-2 w-full px-2">
      <button class="w-9 h-9 flex items-center justify-center hover:bg-sky-200 rounded-lg" @click="prevent">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-chevron-left"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"
          />
        </svg>
      </button>
      <div class="font-semibold text-gray-500 uppercase">
          {{ getMonthTitle() + "  " + getYear() }}
        </div>
      <button class="w-9 h-9 flex items-center justify-center hover:bg-sky-200 rounded-lg" @click="next">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="16"
          height="16"
          fill="currentColor"
          class="bi bi-chevron-right"
          viewBox="0 0 16 16"
        >
          <path
            fill-rule="evenodd"
            d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
          />
        </svg>
      </button>
    </div>
  </div>
  <Calendar :selectedDate = "date" 
  
  />
</template>

<script>
import Calendar from "./Calendar.vue";

export default {
  name: "CalendarSelector",

  components: {
    Calendar,
  },

  data() {
    return {
      date: new Date(),
    };
  },

  methods: {
    getMonthTitle() {
      const m = this.date.getMonth();
      const d = new Date(2020, m, 1);
      return d.toLocaleDateString("ru-RU", { month: "long" });
    },
    getYear() {
      return this.date.getFullYear();
    },
    next() {
      const date = new Date(this.date);
      date.setMonth(date.getMonth() + 1);
      this.date = date;
    },
    prevent() {
      const date = new Date(this.date);
      date.setMonth(date.getMonth() - 1);
      this.date = date;
    },
  },
};
</script>

<style>
</style>