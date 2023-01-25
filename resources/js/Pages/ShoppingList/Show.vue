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
    
      <div class="w-full flex flex-col mt-6">
        <div v-for="product in Productlist.productlist" 
          :key="product.id"   
          class="hover:cursor-pointer w-full flex items-center justify-between mb-2 pb-2 border-b border-stone-400"
          >
          {{ product.product_name }}
          <Link :href="route('productShoppingList.destroy', product.id)" method="delete" as="button" class="flex items-center justify-end w-[10%]">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg>
          </Link>
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