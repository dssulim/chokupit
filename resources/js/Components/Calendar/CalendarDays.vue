<template>
  <div class="days-wrapper">
    <div :class="calendarItem()"> 
      {{ days.getDate() }}
    </div>
  </div>
</template>

<script>
import getISO from './Composables/getISO';

export default {
  name: 'CalendarDays',

  props: ["days", ],

  data () {
    return {
      date: new Date(),
    };
  },

  methods: {
    calendarItem() {
      
      const isCurrentDate = getISO(new Date()) === getISO(this.days);
      
      return {
        primary: isCurrentDate,
        default: !isCurrentDate,
      };
    },
  }
}
</script>

<style>
  .days-wrapper {
    width: 100%;
    height: 100%;
  }
  .primary {
    color: #57a6eb;
    font-weight: bold;
    font-size: 18px;
    border: 2px solid #57a6eb;
    border-radius: 10px;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .default {
    color: rgb(109, 109, 109);
    font-weight: bold;
    font-size: 18px;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
  }
  .default:hover {
    background-color: #8fc3f1;
    border-radius: 50%;
    cursor: pointer;
  }
  .primary:hover {
    background-color: #8fc3f1;
    border-radius: 50%;
    cursor: pointer;
    color: #ffffff;
  }
</style>