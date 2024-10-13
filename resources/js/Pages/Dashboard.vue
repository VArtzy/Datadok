<script setup>
import { defineProps } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';

const props = defineProps({
    datasets: Array,
    reports: Array
});
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h5 class="leading-tight">
                Beranda
            </h5>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome :datasets="datasets" :reports="reports" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
