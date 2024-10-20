<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    datasets: Array,
    reports: Array
});
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 border-b border-gray-200">
            <ApplicationLogo class="block h-12 w-auto" />
        </div>

        <div class="grid gap-6 lg:gap-8 p-6 lg:p-8">
            <h5>Eksplor</h5>
            <div class="grid md:grid-cols-3 gap-8">
                <Link :href="route('sumberdata')">
                    <img src="images/tabel.png" alt="Tambahkan sumber data">
                    <p>Tambahkan Sumber Data/Database Bisnis Pertama</p>
                </Link>
                <Link :href="route('laporan')">
                    <img src="images/statistik.png" alt="Analisis AI dan report">
                    <p>Analisis AI dan Report untuk mendapatkan insight</p>
                </Link>
                <Link :href="route('teams.show', $page.props.auth.user.current_team)">
                    <img src="images/collab.png" alt="Kolaborasi">
                    <p>Tambahkan tim dalam Datadok untuk berkolaborasi</p>
                </Link>
            </div>
            <h5>Preset</h5>
            <p class="text-center text-primary">Tidak ada preset yang tersedia. Mohon tunggu jika kami sedang perbaikan...</p>
            <h5>Baru Saja</h5>
            <div class="grid md:grid-cols-2 gap-8">
                <template v-for="report in reports">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h6 class="text-sm text-gray-500">Laporan</h6>
                        <h5 class="text-lg font-semibold">{{ report.name }}</h5>
                        <p class="text-sm text-gray-500">{{ report.description }}</p>
                        <p class="text-sm text-gray-500">{{ report.created_at }}</p>
                    </div>
                </template>
                <template v-for="dataset in datasets">
                    <div class="bg-white shadow-md rounded-lg p-6">
                        <h6 class="text-sm text-gray-500">Sumber Data</h6>
                        <h5 class="text-lg font-semibold">{{ dataset.name }}</h5>
                        <p class="text-sm text-gray-500">{{ dataset.user.name }}</p>
                        <p class="text-sm text-gray-500">{{ dataset.created_at }}</p>
                    </div>
                </template>
            </div>
            <p v-if="reports.length === 0 && datasets.length === 0" class="text-center text-primary">Tidak ada yang baru Anda akses. Silahkan membuat laporan atau tambahkan sumber data...</p>
        </div>
    </div>
</template>
