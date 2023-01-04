<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputErrorData from '@/Components/InputErrorData.vue'
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import getISO from '@/Components/Calendar/Composables/getISO'
import { computed, reactive, ref, watch } from 'vue';
import store from '@/Store/store';

const props = defineProps({
  user_id: Number,
})

const choiceDay = computed(() => store.getters.getDayList)

const currentDay = getISO(new Date())

const form = reactive(useForm ({
  name: 'Тест',
  // user_id: props.user_id,
  user_id: 1,
  list_data: '!!!'
})) 

const submit = () => {
    form.post(route('shoppingList.store'), { 
      onSuccess: () => form.reset(), 
    })
};

</script>

<template>
  <Head title="CreateSoppinglists" />

  <AuthLayout>
    <div class="wrapper-home">
      <div class="calendar-box block">
        <CalendarSelector />
      </div>
      <div class="my-content mt-5 p-2.5 overflow-y-auto">
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">Create List</h1>
        <h3 class="mt-4 text-sky-600 font-bold">Выберите дату списка, затем введите название.</h3>
        <form class="mt-6" @submit.prevent= "submit">
          <div class="mb-4">
            <InputLabel for="day" value="Выберите дату" />
            <TextInput id="day" type="date" :min="currentDay" class="mt-1 block w-full" v-model="form.list_data" required autofocus autocomplete="day" />
            <InputErrorData class="" :message="form.errors.list_data" />
          </div>
          <div class="text-lg font-bold text-red-600">
            {{ $page.props.flash.message }}
          </div>
          <div>
            <InputLabel for="name" value="Введите название списка" />
            <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.name" required autofocus autocomplete="name" />
          </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn-primary">Create</button>
            </div>
        </form>
      </div>    
    </div>
  </AuthLayout>
</template>


