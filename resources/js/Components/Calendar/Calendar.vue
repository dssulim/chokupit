<template>
  <div class="calendar grid grid-cols-7">
    <div
      class="calendar-week mb-5 flex items-center justify-center"
      v-for="(_, i) in 7"
      :key="i"
    >
      <span
        class="weeklyDay uppercase font-bold"
        :class="{ weekEnd: i === 5 || i === 6 }"
        >{{ weekDayName(i) }}</span
      >
    </div>
  </div>
  <div class="calendar-body grid grid-cols-7">
    <div class="calendar-days" v-for="(day, idx) in dayOfMonth" :key="idx">
      <CalendarDays :days="day" v-if="day" />
    </div>
  </div>
</template>

<script>
import CalendarDays from "./CalendarDays.vue";
import { mapGetters, mapActions } from "vuex";

export default {
  name: "Calendar",

  components: {
    CalendarDays,
  },

  props: ["selectedDate"],

  computed: {
    ...mapGetters(["dayOfMonth"]),
  },

  watch: {
    selectedDate() {
      this.getDays(this.selectedDate);
    },
  },

  methods: {
    ...mapActions(["getDays"]),

    weekDayName(i) {
      const d = new Date("2021-04-05");
      d.setDate(d.getDate() + i);
      return d.toLocaleDateString("ru-RU", { weekday: "short" });
    },
  },

  mounted() {
    this.getDays(this.selectedDate);
  },
};
</script>

<style scoped>
.weekEnd {
  text-transform: uppercase;
  font-weight: bold;
  color: red;
}

.calendar-days {
  min-height: 39px;
  min-height: 39px;
}
</style>