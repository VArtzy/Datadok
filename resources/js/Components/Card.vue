<script setup>
defineProps({
    src: { type: String },
    title: { type: String },
    subtitle: { type: String },
    created: { type: String },
    updated: { type: String }
});
</script>

<template>
<div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <img class="rounded-t-lg" :src="src" :alt="title" />
    <div class="p-4">
        <h6>{{ title }}</h6>
        <p>{{ new Date(created).toLocaleDateString("id-ID") }}</p>
        <p>{{ new Date(updated).toLocaleDateString("id-ID") }}</p>
        <p> {{subtitle}} </p>
    </div>
</div>
</template>
