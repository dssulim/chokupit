<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
  <Head title="Calendar"/>

  <AuthLayout>
    <div class="flex flex-col w-full h-screen mt-5 p-2.5">
      <div class="sm:hidden">
        <CalendarSelector />
      </div>
    </div>
  </AuthLayout>
  
</template>