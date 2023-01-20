<script setup>
import AuthLayout from '@/Layouts/AuthLayout.vue';
import CalendarSelector from '@/Components/Calendar/CalendarSelector.vue';
import InputLabel from '@/Components/InputLabel.vue';
import InputErrorData from '@/Components/InputErrorData.vue'
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import { computed, reactive, ref, watch } from 'vue';
import store from '@/Store/store';

const props = defineProps(
    {
        people: Array,
        my_user_id: Number
    }
);
console.log(props.people);
</script>

<template>
    <Head title="All People"/>
    <AuthLayout>
        <p style="margin-bottom: 20px; font-size: 3em">Все пользователи</p> Можно кого-то добавить в друзья: <br>
        <div v-for="user in props.people" :key="user.id" style="border: 1px solid rgb(143, 195, 241); border-radius: 5px; padding: 10px; width: 600px">
            <div style="margin-bottom: 20px; display: flex; justify-content: space-between">
                <div>
                    {{user.id}} {{ user.name }} <br> {{ user.email }}
                </div>
                <div>
                    <a href="#" class="btn-primary">+</a>
                    <a href="#" class="btn-primary">i</a>
                </div>
            </div>

        </div>
    </AuthLayout>
</template>


<style scoped>

</style>
