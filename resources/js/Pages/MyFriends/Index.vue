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
        friendList: Array,
        my_user_id: Number
    }
);

console.log(props.friendList);
</script>


<template>

    <Head title="My Friends" />
    <AuthLayout>
        <form action="#" method="get" style="margin-bottom: 10px; display: flex; flex-direction: column; width: 600px">
            <label for="find-a-friend">Найти новых друзей:</label>
            <input type="text" placeholder="e-mail" class="input-form" id="find-a-friend">
            <input type="submit" value="Find" class="btn-primary">
        </form>
        <div style="margin-bottom: 50px; color: #8fc3f1; border: solid 1px; padding: 10px; border-radius: 5px; width: 600px; visibility: hidden" >
            найденные пользователи: <p id="found_user"></p>
        </div>
        <a href="#" style="margin-bottom: 20px; font-size: 3em">Мои друзья</a>
        <div v-for="friend in props.friendList" style="border: 1px solid rgb(143, 195, 241); border-radius: 5px; padding: 10px; width: 600px; display: flex; justify-content: space-between; align-items: center">
            <div style="margin-bottom: 20px">
                <div>От: {{friend.initiatorName}}</div>
                <div>Кому: {{ friend.targetUserName }}</div>
                <div>статус дружбы: {{ friend.statusRequest }}</div>
            </div>
            <div style="padding: 20px">
                <a href="#">Удалить из друзей &#10060;</a>
            </div>
        </div>

    </AuthLayout>
</template>

<!--<script>-->
<!--    import AuthLayout from '@/Layouts/AuthLayout';-->
<!--    // import ApplicationLogo from "@/Components/ApplicationLogo.vue";-->


<!--    export default {-->
<!--        components: {-->
<!--            AuthLayout,-->
<!--            ApplicationLogo-->
<!--        },-->
<!--        props: {-->
<!--            friendList: Array-->
<!--        }-->
<!--    }-->
<!--</script>-->

<!--<template>-->
<!--    <AuthLayout>-->
<!--        <h1>My friends page</h1>-->
<!--            user id: {{ friendList[0]['user_id'] }}-->
<!--    </AuthLayout>-->

<!--</template>-->

<!--<script>-->
<!--export default {-->
<!--    name: "MyFriendsController"-->
<!--}-->
<!--</script>-->



<style>

</style>
