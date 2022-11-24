<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import { Head } from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Home" />

    <AuthLayout>
       <div class="wrapper-home">
        <div class="calendar-box">
            <CalendarSelector />
        </div>
        <div class="my-content">
            ВЫВОД СПИСКОВ НА ТЕКУЩУЮ И БУДУЮЩИЕ ДАТЫ
        </div>
       </div>   
    </AuthLayout>
</template>
