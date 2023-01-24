<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputErrorData from '@/Components/InputErrorData.vue'
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { computed, reactive, ref, watch } from 'vue';
import store from '@/Store/store';

const Productlist = defineProps({
  productlist: Array,
  shoppingListID: Number,
})

const form = reactive(useForm ({
  product_name: '',
  shopping_list_id: Productlist.shoppingListID 
})) 

const submit = () => {
    form.post(route('productShoppingList.store'), {      
      onSuccess: () => form.reset(), 
    })
};
</script>


<template>
  <Head title="product in list" />
  <AuthLayout>
    
      <div>
        <div v-for="product in Productlist.productlist" :key="product.id">
          {{ product.product_name }}
        </div>
      </div>

      <form class="mt-6" @submit.prevent= "submit">
          <div>
            <InputLabel for="name" value="Введите новый продукт" />
            <TextInput id="name" type="text" class="mt-1 block w-full" v-model="form.product_name" required autofocus autocomplete="name" />
          </div>
            <div class="flex items-center justify-end mt-4">
                <button type="submit" class="btn-primary">Create</button>
            </div>
        </form>


  </AuthLayout>
</template>


<style>

</style>