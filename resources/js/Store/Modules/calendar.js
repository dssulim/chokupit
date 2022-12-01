import getDaysOfMonth from "@/Components/Calendar/Composables/getDays";
import getFirstWeekday from "@/Components/Calendar/Composables/getWeekDay";
import getISO from "@/Components/Calendar/Composables/getISO";

export const calendar = {
  state: {
    days: [],

    selectDay: ""
  },
  
  actions: {
    getDays({commit}, props) {
      
      const currentDay = new Date(props)
      
        const month = currentDay.getMonth()
            
        const year = currentDay.getFullYear()
           
        const daysInMonth = getDaysOfMonth(month, year)
            
        const firstDayIndex = getFirstWeekday(month, year)
            
        const day = []
        for (let i = firstDayIndex; i < daysInMonth + firstDayIndex; i++) {
            day[i] = new Date(year, month, i + 1 - firstDayIndex)
        }
        const days = day;
            
        commit('updateMonth', days);
    },

    getChoiceDay({commit}, day) {
      //console.log(day)
      commit('updateSelectDay', day);
    }
  },

  mutations: {
    updateMonth(state, days) {
      state.days = days
    },

    updateSelectDay(state, day) {
      state.selectDay = day
      //console.log(state.selectDay)
    }
  },
  
  getters: {
    dayOfMonth(state) {
      return state.days
    },

    getDayList(state) {
      if (state.selectDay.length != 0) {
         return getISO(state.selectDay)
      } 
      else {
        return state.selectDay
      }    
    }
  },
}
