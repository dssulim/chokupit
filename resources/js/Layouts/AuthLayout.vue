<template>
  <div class="wrapper">
    <div class="wrapper-box center">
      <div class="header">
        <div class="header-left">
          <Link href="/home"
            ><img
              class="logo"
              src="../../../public/images/logo1.svg"
              alt="logo"
            />
          </Link>
        </div>
        <div class="header-right">
          <DropdownAuth>
            <template #trigger> </template>
            <template #content>
              <DropdownLink :href="route('profile.edit')">
                Profile
              </DropdownLink>
              <DropdownLink :href="route('shoppingLists.create')">
                Create List
              </DropdownLink>
              <DropdownLink :href="route('shoppingLists.index')"> My Lists </DropdownLink>
              <DropdownLink :href="route('shops.index')"> My Shops </DropdownLink>
              <DropdownLink :href="route('logout')" method="post" as="button">
                Log Out
              </DropdownLink>
            </template>
          </DropdownAuth>
          <div class="menu">
            <ul class="menu-link" v-if="$page.props.auth.user">
              <div class="ml-3 relative">
                <DropdownFullScreen align="right" width="48">
                  <template #trigger>
                    <span class="inline-flex rounded-md">
                      <button
                        type="button"
                        class="
                          inline-flex
                          items-center
                          px-3
                          py-2
                          border-2 border-sky-400
                          text-sm
                          leading-4
                          font-bold
                          rounded-md
                          text-gray-600
                          bg-sky-50
                          hover:text-gray-700
                          focus:outline-none
                          transition
                          ease-in-out
                          duration-150
                        "
                      >
                        {{ $page.props.auth.user.name }}

                        <svg
                          class="ml-2 -mr-0.5 h-4 w-4"
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                        >
                          <path
                            fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </button>
                    </span>
                  </template>
                  <template #content>
                    <DropdownLink :href="route('profile.edit')">
                      Profile
                    </DropdownLink>
                    <DropdownLink :href="route('shoppingLists.create')">
                      Create List
                    </DropdownLink>
                    <DropdownLink :href="route('shoppingLists.index')">
                      My Lists
                    </DropdownLink>
                    <DropdownLink :href="route('shops.index')">
                      My Shops
                    </DropdownLink>
                    <DropdownLink
                      :href="route('logout')"
                      method="post"
                      as="button"
                    >
                      Log Out
                    </DropdownLink>
                  </template>
                </DropdownFullScreen>
              </div>
            </ul>

            <ul class="menu-link" v-else>
              <li class="menu-list">
                <Link :href="route('about')"> About </Link>
              </li>
              <li class="menu-list">
                <Link :href="route('login')"> Login </Link>
              </li>
              <li class="menu-list">
                <Link :href="route('register')"> Register </Link>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="content">
        <slot></slot>
      </div>
    </div>
  </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import DropdownAuth from "@/Components/DropdownAuth.vue";
import DropdownLink from "@/Components/DropdownLink.vue";
import DropdownFullScreen from "@/Components/DropdownFullScreen.vue";
import store from "@/Store/store";

</script>