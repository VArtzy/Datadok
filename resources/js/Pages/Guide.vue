<script setup>
import { Head, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Card from '@/Components/Card.vue';
</script>

<template>
<AppLayout title="Guide">
    <Head title="Guide" />
    <div class="shadow-md h-[70px] flex justify-center items-center">
       
    </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-8 md:px-12 mb-10">
                <h3>Panduan</h3>
                <Link :href="route('panduan')">
                    <Card title="Cara menambahkan akun ke tim Bisnis Datadok" subtitle="Mengelola tim dalam platform Datadok menjadi lebih mudah dengan fitur penambahan akun. Berikut adalah langkah-langkah untuk menambahkan anggota ke tim bisnis Anda di Datadok" created="2024-10-24T08:12:14" updated="2024-10-25T10:12:14" src="images/hero-landscape.jpg" />
                    </Link>
              </div>
                
                <div class="max-w-7xl mx-auto px-8 md:px-12 mb-10">
                    <h3>Blog</h3>
                    <Link :href="route('blog')">
                    <Card title="cobalah Datadok hari ini dan rasakan sendiri bagaimana intelijen bisnis dapat mengubah cara Anda menjalankan bisnis. " subtitle="Dalam dunia bisnis yang bergerak cepat dan kompetitif seperti saat ini, memiliki keunggulan dalam pengambilan keputusan adalah kunci sukses." created="2024-10-24T08:12:14" updated="2024-10-25T10:12:14" src="images/hero-landscape.jpg" />
                    </Link>
                    </div>
            
                    <div class="max-w-7xl mx-auto px-8 md:px-12">
                        <h3>Rilis</h3>
                        <Link :href="route('rilis')">
                    <Card title="Datadok 4.0: Perkenalkan AI Datadok & improvisasi performa, perbaikan bug" subtitle="Versi 4.0 - 31-01-2024 Fitur Baru: ●AI Datadok" created="2024-10-24T08:12:14" updated="2024-10-25T10:12:14" src="images/hero-landscape.jpg" />
                    </Link>
                    </div>
        
        <div class="py-12">
            
            </div>
            
            </div>
           

   
</AppLayout>
</template>
