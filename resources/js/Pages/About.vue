<template>
  <GuestLayout>
    <Head title="About" />
    <div class="picture"></div>
    <div class="flex-column-center">
      <div class="description">
        <p class="description-p">
          КАКОЙ ТО ТЕКСТ О РАБОТЕ ПРИЛОЖЕНИЯ, МОЖНО НЕ ДЕЛАТЬ ЭТУ СТРАНИЦУ, НО
          ПУСКАЙ БУДЕТ, СЮДА ЖЕ МОЖНО И КОНТАКТЫ ВПИХНУТЬ И ТД И ТП. Составляй
          список покупок заранее на все случаи жизни для себя, для семьи или
          любых совместных активностей !
        </p>
      </div>
    </div>
  </GuestLayout>
</template>

<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";
</script>
