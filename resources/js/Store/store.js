import { createStore } from "vuex";
import { calendar } from './Modules/calendar';

const store = createStore({
  modules: {
    calendar
  }
  
});

export default store;