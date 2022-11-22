<script setup>
import { computed, onMounted, onUnmounted, ref } from "vue";

const props = defineProps({
  align: {
    default: "right",
  },
  width: {
    default: "48",
  },
  contentClasses: {
    default: () => ["py-1", "bg-white"],
  },
});

const closeOnEscape = (e) => {
  if (open.value && e.key === "Escape") {
    open.value = false;
  }
};

onMounted(() => document.addEventListener("keydown", closeOnEscape));
onUnmounted(() => document.removeEventListener("keydown", closeOnEscape));

const widthClass = computed(() => {
  return {
    48: "w-48",
  }[props.width.toString()];
});

const alignmentClasses = computed(() => {
  if (props.align === "left") {
    return "origin-top-left left-0";
  } else if (props.align === "right") {
    return "origin-top-right right-0";
  } else {
    return "origin-top";
  }
});

const open = ref(false);
</script>

<template>
  <div class="relative">
    <div @click="open = !open" class="hamburger">
        <svg
                  class="h-6 w-6"
                  stroke="currentColor"
                  fill="none"
                  viewBox="0 0 24 24"
                >
                  <path
                    :class="{
                      hidden: open,
                      'inline-flex': !open,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h16M4 18h16"
                  />
                  <path
                    :class="{
                      hidden: !open,
                      'inline-flex': open,
                    }"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M6 18L18 6M6 6l12 12"
                  />
                </svg>

      <slot name="trigger" />
    </div>

    <!-- Full Screen Dropdown Overlay -->
    <div v-show="open" class="fixed inset-0 z-40" @click="open = false"></div>

    <transition
      enter-active-class="transition ease-out duration-200"
      enter-from-class="transform opacity-0 scale-95"
      enter-to-class="transform opacity-100 scale-100"
      leave-active-class="transition ease-in duration-75"
      leave-from-class="transform opacity-100 scale-100"
      leave-to-class="transform opacity-0 scale-95"
    >
      <div
        v-show="open"
        class="absolute z-50 mt-2 rounded-md shadow-lg"
        :class="[widthClass, alignmentClasses]"
        style="display: none"
        @click="open = false"
      >
        <div
          class="rounded-md ring-1 ring-black ring-opacity-5"
          :class="contentClasses"
        >
          <slot name="content" />
        </div>
      </div>
    </transition>
  </div>
</template>
