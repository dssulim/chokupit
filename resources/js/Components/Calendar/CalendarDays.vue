<template>
  <div class="days-wrapper">
    <div :class="[calendarItem(), {choice: isActive}]" @click="choiceDay(idx)"> 
      {{ days.getDate() }}

    </div>
  </div>
</template>

<script>
import getISO from './Composables/getISO';
import noteDays from './Composables/noteDay';
import { mapActions } from 'vuex';

export default {
  name: 'CalendarDays',

  props: ["days", "dateList", "idx"],

  data () {
    return {
      date: new Date(),
      isActive: false,
    };
  },

  methods: {
   
    ...mapActions(["choiceDays"]),

    choiceDay(selectDay) {
      this.isActive = this.isActive
      this.$emit('choiceDay', this.days)
    },
    
    calendarItem() {
      //const note = noteDays(this.dateList);
      // let classes = "";
      // let purchase = "";

      const isCurrentDate = getISO(new Date()) === getISO(this.days);
      // for (let i = 0; i <= note.length - 1; i++) {
      //   if (
      //     note[i] === getISO(this.days) &&
      //     note.length &&
      //     note[i] >= getISO(new Date())
      //   ) {
      //     classes = true;
      //   } else if (
      //     note[i] === getISO(this.days) &&
      //     note.length &&
      //     note[i] < getISO(new Date())
      //   ) {
      //     purchase = true;
      //   }
      // }
      return {
        primary: isCurrentDate,
        default: !isCurrentDate,
        // note: classes,
        // done: purchase,
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
    color: #ffffff;
    background-color: #57a6eb;
    font-weight: bold;
    font-size: 18px;
    border: 2px solid #57a6eb;
    border-radius: 50%;
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
  .choice {
    background-color: #8fc3f1;
    border-radius: 50%;
    cursor: pointer;
  }
  .note {
  border: 2px solid red;
  border-radius: 50%;
  }
  .done {
    border: 2px solid #57a6eb;
    border-radius: 50%;
  }
</style>