<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/components/ApplicationLogo.vue';
import PrimaryButton from '@/components/PrimaryButton.vue';
</script>


<template>
    
    <Head title="rilis" />
            <div class="w-full max-w-2xl mx-auto px-6 lg:max-w-7xl">
                <header class="grid grid-cols-1 items-center gap-2 lg:py-10 lg:grid-cols-3">
                    <div class="flex justify-center lg:justify-start">
                        <ApplicationLogo class="block w-16 lg:w-[120px] h-auto" />
                    </div>
                    <nav class="-mx-3 flex gap-12 justify-center flex-1">
                        <a class="font-semibold" href="#fitur">Fitur</a>
                        <a class="font-semibold" href="panduan">Panduan</a>
                        <a class="font-semibold" href="#">Harga</a>
                        <a class="font-semibold" href="#blog">Blog</a>
                    </nav>
                    <div class="flex gap-12 justify-center lg:justify-end">
                        <Link :href="route('login')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px] bg-white text-primary outline outline-black">Masuk</Link>
                        <Link :href="route('register')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px]">Coba Gratis</Link>
                    </div>
                </header>

                <main class="mt-6">
                    <h1 class="max-w-5xl mx-auto mb-12 text-primary text-center">Datadok 4.0: Perkenalkan AI Datadok & improvisasi performa, perbaikan bug</h1>
                    <div class="flex flex-col lg:flex-row gap-12">
                        <div class="lg:w-[75%] grid gap-12">
                        </div>
                    </div>
                </main>
            </div>
    

            <div class="text-primary text-center leading-tight"><p class="text-6xl text-[22577A] text-semibold" id="blog">Rahasia Manajemen Atas Amazon: Intelijen Bisnis</p></div>
        <div class="text-primary text-center leading-tight"><h6 class="text-black">3 menit baca - oleh Farrel Nikoson - 2024</h6></div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto ">
                
<p>Versi 4.0 - 31-01-2024</p>
<p>Fitur Baru:</p>
<p>●AI Datadok</p>
    <p class="ms-4">●Diperkenalkan kecerdasan buatan untuk analisis data yang lebih mendalam.</p>
    <p class="ms-4">●Fitur prediksi akurat dan rekomendasi strategis otomatis.</p>
<p>Peningkatan Performa:</p>
    <p>●Optimalisasi Kecepatan</p>
    <p class="ms-4">●Peningkatan kecepatan pemrosesan data dan respons sistem.</p>
    <p class="ms-4">●Pengalaman pengguna yang lebih cepat dan efisien.</p>
<p>Perbaikan Bug:</p>
    <p>●Stabilitas dan Keamanan</p>
    <p class="ms-4">●Perbaikan berbagai bug untuk meningkatkan stabilitas platform.</p>
    <p class="ms-4">●Pembaruan untuk keamanan dan pengoperasian yang lebih lancar.</p>
<p>Untuk informasi lebih lanjut dan panduan pembaruan, hubungi tim dukungan pelanggan.</p>
                
            </div>
        </div>
</template>
