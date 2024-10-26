<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
</script>


<template>
    <footer class="mx-auto py-16 w-full max-w-7xl text-xl text-primary dark:text-primary-light flex flex-col lg:flex-row gap-16">
        <div class="lg:w-[40%]">
            <div class="flex flex-col lg:flex-row gap-4 items-center">
                <ApplicationLogo class="block w-[120px] h-auto" />
                <h1>Datadok</h1>
            </div>
            <p class="text-black dark:text-white">Datadok menawarkan teknologi pengambil keputusan berbasis data yang inovatif dan efektif dengan bukti analisa yang mendalam serta dapat dibuktikan</p>
        </div>
        <div class="lg:w-[60%]">
            <div class="grid grid-cols-3">
                <div>
                    <h5 class="mb-6">Features</h5>
                    <ul class="grid gap-4">
                        <li><Link :href="route('dashboard')">Eksplor</Link></li>
                        <li><Link :href="route('laporan')">Laporan</Link></li>
                        <li><Link :href="route('sumberdata')">Sumber Data</Link></li>
                        <li><Link href="#">Analisis</Link></li>
                        <li><Link href="#">AI Datadok</Link></li>
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6">Resources</h5>
                    <ul class="grid gap-4">
                        <li><Link :href="route('panduan')">Panduan</Link></li>
                        <li><Link :href="route('blog')">Blog</Link></li>
                        <li><Link :href="route('harga')">Harga</Link></li>
                        <li><Link :href="route('rilis')">Rilis</Link></li>
                        <li><Link href="#">Sitemap</Link></li>
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6">Company</h5>
                    <ul class="grid gap-4">
                        <li><Link :href="route('tentang')">Tentang</Link></li>
                        <li><Link :href="route('Karir')">Karir</Link></li>
                        <li><Link :href="route('kontak')">Kontak</Link></li>
                        <li><Link :href="route('partners')">Partner</Link></li>
                        <li><Link :href="route('privasidata')">Data Privacy</Link></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
</template>
