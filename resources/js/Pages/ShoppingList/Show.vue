<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Link, Head } from '@inertiajs/inertia-vue3';

const Productlist = defineProps({
  productlist: Array
})
</script>


<template>
  <Head title="product in list" />
  <AuthLayout>

      <div>
        <div v-for="product in Productlist.productlist" :key="product.id">
          {{ product.product_name }}
        </div>
      </div>
  </AuthLayout>
</template>


<style>

</style>