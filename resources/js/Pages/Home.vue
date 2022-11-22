<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Home" />

    <AuthLayout>
       <div class="wrapper-home">
        <div class="calendar">
            
        </div>
        <div class="my-content"></div>
       </div>   
    </AuthLayout>
</template>
