import getDaysOfMonth from "@/Components/Calendar/Composables/getDays";
import getFirstWeekday from "@/Components/Calendar/Composables/getWeekDay";

export const calendar = {
  state: {
    days: []
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
    }
  },

  mutations: {
    updateMonth(state, days) {
      state.days = days
    }
  },
  
  getters: {
    dayOfMonth(state) {
      return state.days
  },
  },
}
