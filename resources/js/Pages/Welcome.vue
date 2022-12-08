<template>

<Head title="Welcome" />

  <div class="wrapper">
    <div class="wrapper-box center">
      <div class="header">
        <div class="header-left">
          <Link href="/"
            ><img
              class="logo"
              src="../../../public/images/logo1.svg"
              alt="logo"
            />
          </Link>
        </div>
        <div class="header-right">
          <Dropdown>
            <template #content>
              <DropdownLink :href="route('about')"> About </DropdownLink>
              <DropdownLink :href="route('login')"> Login </DropdownLink>
              <DropdownLink :href="route('register')"> Register </DropdownLink>
            </template>
          </Dropdown>
          <div class="menu" v-if="canLogin">
            <Link
              v-if="$page.props.auth.user"
              :href="route('home')"
              class="text-sm text-gray-700 dark:text-gray-500 underline"
              >Home</Link
            >
            <ul class="menu-link" v-else>
              <li class="menu-list">
                <Link :href="route('about')"> About </Link>
              </li>
              <li class="menu-list">
                <Link :href="route('login')"> Login </Link>
              </li>
              <li class="menu-list">
                <Link v-if="canRegister" :href="route('register')">
                  Register
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="content">
        <div class="picture"></div>
        <div class="flex-column-center">
          <div class="description">
            <p class="description-p">
              Составляй список покупок заранее на все случаи жизни для себя, для
              семьи или любых совместных активностей !
            </p>
          </div>
          <Link href="/login">
            <button class="btn btn-primary">Get started</button>
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>
  
<script setup>

import Dropdown from "@/Components/Dropdown.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import { Link, Head } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
});
</script>
  
  <style>
</style>