<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

const myList = defineProps({
  lists: Array,
  shoppingLists: Array,
  dateList: Array
})
  
</script>

<template>
  <Head title="shoppingLists" />

  <AuthLayout>
    <div class="wrapper-home">
       <div class="calendar-box">
        <CalendarSelector 
          :dateList="myList.dateList"
        />
      </div>
      <div class="my-content mt-5 p-2.5 overflow-y-auto" >
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">My Lists</h1>
        <div class="w-full flex justify-center flex-col mt-4" v-if="(!myList.lists.length > 0)">
          <div class="text-stone-600 font-bold text-lg">
            You don't have Lists for the current and future date
          </div>
          <Link
            :href="route('shoppingLists.create')"
            class="hover:underline  hover:underline-offset-8 hover:text-sky-400 text-lg text-sky-500 mt-3 font-bold"
            >Create List
          </Link>
        </div>
        <div v-else class="w-full flex flex-col mt-6">
          <div class="hover:cursor-pointer w-full flex items-center justify-between mb-2 pb-2 border-b border-stone-400"
            v-for= "(list, idx) in myList.lists" :key="idx"
          >
            <div class="flex items-center justify-start w-[40%]">
              {{ list.shopping_list_date }}
            </div>
            <div class="flex items-center justify-start w-[40%]">
              {{ list.list_name }}
            </div>
          <Link :href="route('shoppingLists.show', list.id)" class="flex items-center justify-end w-[10%]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
          </Link>
          <Link :href="route('shoppingLists.destroy', list.id)" method="delete" as="button" class="flex items-center justify-end w-[10%]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
          </Link>
          </div>
        </div>
      </div>
    </div>
  </AuthLayout>
</template>