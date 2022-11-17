<script setup>

import MainLayout from '../Layouts/MainLayout.vue';
import { Link } from '@inertiajs/inertia-vue3';

</script>

<template>
  <MainLayout>
    <Head title="Home" />

    <div class="picture"></div>
    <div class="flex-column-center">
      <div class="description">
        <p class="description-p">
          Составляй список покупок заранее на все случаи жизни для себя, для
          семьи или любых совместных активностей !
        </p>
      </div>
      <Link href="/">
        <button class="btn btn-primary">Get started</button>
      </Link>
    </div>

  </MainLayout>
</template>