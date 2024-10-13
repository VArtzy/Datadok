<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Bar } from 'vue-chartjs'
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js'

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale)

defineProps({
    report: Object,
    data: Object
})
</script>

<template>
    <AppLayout :title="report.title">
        <template #header>
            <h5 class="text-primary leading-tight">
                {{ report.title }}
            </h5>
        </template>
    <h3>{{ report.description }}</h3>
    <p>{{ report.created_at }}</p>
    <p>{{ report.updated_at }}</p>

    <Bar :data="{ labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'], datasets: [{ label: 'Sales', data: [65, 59, 80, 81, 56, 55, 40] }] }" :options="{ scales: { y: { beginAtZero: true } }}" />
    </AppLayout>
</template>
