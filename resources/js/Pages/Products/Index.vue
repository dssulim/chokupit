<script setup>

import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
  <Head title="MyProducts" />

  <AuthLayout>
    <div class="wrapper-home">
      <div class="calendar-box">
        <CalendarSelector />
      </div>
      <div class="my-content mt-5 p-2.5">
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">My Products</h1>
        <div class="w-full flex flex-col mt-6">
          
        </div>
      </div>
    </div>
  </AuthLayout>
</template>

<style scoped>
</style>