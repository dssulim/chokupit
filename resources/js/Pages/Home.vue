<script setup>
import AuthLayout from "@/Layouts/AuthLayout.vue";
//import CalendarSelector from "@/Components/Calendar/CalendarSelector.vue";
//import Shops from "@/Pages/Shops/Index.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
//import { ref } from "vue";

//const open = ref(true);
</script>

<template>
  <Head title="Home" />

  <AuthLayout>
    <div class="wrapper-home">
        <div class="border border-2 border-sky-400 rounded-lg p-2 min-w-[300px] min-h-[300px] flex flex-col justify-between">
            <div class="flex items-center justify-content-start flex-col">
                <p class="text-stone-600 mt-4">
                    Привет, <span class="text-sky-600 font-bold italic">{{ $page.props.auth.user.name }}</span> !
                </p>
                <p class="text-stone-600 mt-4">
                    Посмотрите Ваши текущие списки
                    или
                    создайте новый.
                </p>
            </div>
            <div class="flex w-full px-4 min-w-[280px] items-center justify-between mb-4">
                <div>
                    <Link :href="route('catalogs.index')">
                        <button class="btn btn-primary">My Lists</button>
                    </Link>
                </div>
                <div>
                    <Link :href="route('catalogs.create')">
                        <button class="btn btn-primary">Create List</button>
                    </Link>
                </div>
            </div>
        </div>
      <!-- <div class="calendar-box" :class="{ block: !open }">
        <CalendarSelector />
      </div> -->
      <!-- <div class="my-content mt-5 p-2.5 overflow-y-auto">
        <div class="w-full flex justify-center flex-col">
          <div class="text-stone-600 font-bold text-lg">
            You don't have Lists for the current and future date
          </div>
          <Link
            :href="route('shops.index')"
            class="text-lg text-sky-500 mt-3 font-bold hover: underline"
            >Create List
          </Link>
        </div>
        <div class="w-full flex justify-center flex-col hidden">
          <Shops />
          <div class="p-4">
            <div class="text-stone-500 font-bold text-lg text-left">
              22.11.22
            </div>
            <div class="w-full">
              <div
                class="
                  px-2.5
                  mt-2.5
                  border-b-2 border-stone-300
                  grid
                  grid-cols-[50%_15%_20%_15%]
                "
              >
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-start
                  "
                >
                  My Shop
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  1
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  list
                </div>
                <div class="flex items-center justify-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
              </div>
              <div
                class="
                  px-2.5
                  mt-2.5
                  border-b-2 border-stone-300
                  grid
                  grid-cols-[50%_15%_20%_15%]
                "
              >
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-start
                  "
                >
                  My Shop
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  2
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  list
                </div>
                <div class="flex items-center justify-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
              </div>
              <div
                class="
                  px-2.5
                  mt-2.5
                  border-b-2 border-stone-300
                  grid
                  grid-cols-[50%_15%_20%_15%]
                "
              >
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-start
                  "
                >
                  My Shop
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  3
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  list
                </div>
                <div class="flex items-center justify-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="p-4">
            <div class="text-stone-500 font-bold text-lg text-left">
              27.11.22
            </div>
            <div class="w-full">
              <div
                class="
                  px-2.5
                  mt-2.5
                  border-b-2 border-stone-300
                  grid
                  grid-cols-[50%_15%_20%_15%]
                "
              >
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-start
                  "
                >
                  My Shop
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  1
                </div>
                <div
                  class="
                    text-stone-600
                    font-bold
                    text-lg
                    flex
                    items-center
                    justify-center
                  "
                >
                  list
                </div>
                <div class="flex items-center justify-center">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-chevron-down"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"
                    />
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="w-full flex justify-end">
            <Link href="#">
              <button class="btn btn-primary">Create List</button>
            </Link>
          </div>
        </div>
      </div> -->
    </div>
  </AuthLayout>
</template>
