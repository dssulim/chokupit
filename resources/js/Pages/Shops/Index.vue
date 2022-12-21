<script setup>

import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

</script>

<template>
  <Head title="MyCurrentShops" />

  <AuthLayout>
    <div class="wrapper-home">
      <div class="calendar-box">
        <CalendarSelector />
      </div>
      <div class="flex flex-col w-full">
        <div class="my-content mt-5 p-2.5">
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">List Name</h1>
        <span class="text-stone-700 text-sm">22 dec.</span>
        <div class="w-full flex flex-col mt-2">
          <div class="flex items-center justify-between w-full mt-2">
            <div class="text-stone-700 text-lg">
              Shop name
            </div>
            <div class="flex items-center">
              <div class="text-stone-700 text-lg">
                0/
              </div>
              <div class="text-stone-700 text-lg">
                10
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between w-full mt-2">
            <div class="text-stone-700 text-lg">
              Shop name-name
            </div>
            <div class="flex items-center">
              <div class="text-stone-700 text-lg">
                3/
              </div>
              <div class="text-stone-700 text-lg">
                5
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="my-content mt-5 p-2.5">
        <h1 class="text-stone-700 text-lg font-bold underline underline-offset-8">List Name</h1>
        <span class="text-stone-700 text-sm">26 dec.</span>
        <div class="w-full flex flex-col mt-2">
          <div class="flex items-center justify-between w-full mt-2">
            <div class="text-stone-700 text-lg">
              Shop name
            </div>
            <div class="flex items-center">
              <div class="text-stone-700 text-lg">
                0/
              </div>
              <div class="text-stone-700 text-lg">
                10
              </div>
            </div>
          </div>
          <div class="flex items-center justify-between w-full mt-2">
            <div class="text-stone-700 text-lg">
              Shop name-name
            </div>
            <div class="flex items-center">
              <div class="text-stone-700 text-lg">
                3/
              </div>
              <div class="text-stone-700 text-lg">
                5
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </AuthLayout>
</template>

<style scoped>
</style>