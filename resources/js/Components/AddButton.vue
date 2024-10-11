<script setup>
defineProps({
    src: { type: String },
    title: { type: String }
});
</script>

<template>
  <div
    class="border h-[100px] flex gap-4 rounded-lg shadow-sm p-8 cursor-pointer items-center justify-between"
  >
    <img
      :src="src"
      class="w-[80px] object-cover"
    />
    <p>
        {{ title }}
    </p>
      <svg width="32" height="32" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
          <line y1="24.9231" x2="50" y2="24.9231" stroke="#22577A" stroke-width="4"/>
          <line x1="25.0769" x2="25.0769" y2="50" stroke="#22577A" stroke-width="4"/>
      </svg>
  </div>
</template>
