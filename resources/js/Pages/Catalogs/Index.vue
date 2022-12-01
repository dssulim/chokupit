<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <Head title="UserCurrentCatalog" />

  <AuthLayout>
    <div class="wrapper-home">
       <div class="calendar-box">
        <CalendarSelector />
      </div>
      <div class="my-content mt-5 p-2.5 overflow-y-auto">
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">My Lists</h1>
        <div class="w-full flex justify-center flex-col mt-4">
          <div class="text-stone-600 font-bold text-lg">
            You don't have Lists for the current and future date
          </div>
          <Link
            :href="route('catalogs.create')"
            class="hover:underline  hover:underline-offset-8 hover:text-sky-400 text-lg text-sky-500 mt-3 font-bold"
            >Create List
          </Link>
        </div>
      </div>
      
    </div>
  </AuthLayout>
</template>