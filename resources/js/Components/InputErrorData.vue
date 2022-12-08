<script setup>
defineProps(['message']);
</script>

<template>
    <div v-show="message">
        <p class="text-lg text-red-600 font-bold">
            <!-- {{ message }} -->
            Выберите дату

        </p>
    </div>
</template>
