<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
</script>

<template>

    <Head title="Solusi Analisis Bisnis UMKM" />
            <div class="w-full max-w-2xl mx-auto px-6 lg:max-w-7xl">
                <header class="grid grid-cols-1 items-center gap-2 lg:py-10 lg:grid-cols-3">
                    <div class="flex justify-center lg:justify-start">
                        <ApplicationLogo class="block w-16 lg:w-[120px] h-auto" />
                    </div>
                    <nav class="-mx-3 flex gap-12 justify-center flex-1">
                        <a class="font-semibold" href="#fitur">Fitur</a>
                        <a class="font-semibold" href="panduan">Panduan</a>
                        <a class="font-semibold" :href="route('harga')">Harga</a>
                        <a class="font-semibold" :href="route('guide')">Blog</a>
                    </nav>
                    <div class="flex gap-12 justify-center lg:justify-end">
                        <Link :href="route('login')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px] bg-white text-primary outline outline-black">Masuk</Link>
                        <Link :href="route('register')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px]">Coba Gratis</Link>
                    </div>
                </header>

                <main class="mt-6">
                    <h1 class="max-w-7xl mx-auto mb-12 text-primary text-center">Keputusan Bisnis dalam Sekejap. <span class="text-primary-light">Lebih Cepat, Lebih Tanggap.</span></h1>
                    <div class="flex flex-col lg:flex-row gap-12">
                        <div class="lg:w-[75%] grid gap-12">
                        <img src="images/hero-landscape.jpg" alt="Menggunakan datadok" class="rounded-md h-[200px] w-full bg-white object-cover bg-[bottom_4rem]"></img>
                        <h5>Manfaatkan alat pintar untuk analisis dan intelijen bisnis, serta buat keputusan bisnis yang lebih optimal. Gunakan sekarang, batalkan kapan saja.</h5>
                        <div class="flex flex-col lg:flex-row items-center gap-12">
                            <PrimaryButton class="px-12 py-[16px]">Datadok bagi UMKM</PrimaryButton>
                            <PrimaryButton class="px-12 py-[16px] bg-primary-light">Hubungi Datadok</PrimaryButton>
                        </div>
                        <h6 class="bg-secondary p-2 text-center rounded" id="fitur">🎉 Ribuan UMKM terus meningkatkan produktivitas dengan AI Datadok</h6>
                        </div>
                        <img src="images/hero-portrait.png" class="rounded-md lg:w-[25%] h-auto bg-white object-cover"></img>
                    </div>
                </main>

    <footer class="py-16 text-xl text-sm text-primary /70 flex flex-col lg:flex-row gap-16">
        <div class="lg:w-[40%]">
            <div class="flex flex-col lg:flex-row gap-4 items-center">
                <ApplicationLogo class="block w-[120px] h-auto" />
                <h1>Datadok</h1>
            </div>
            <p class="text-black">Datadok menawarkan teknologi pengambil keputusan berbasis data yang inovatif dan efektif dengan bukti analisa yang mendalam serta dapat dibuktikan</p>
        </div>
        <div class="lg:w-[60%]">
            <div class="grid grid-cols-3">
                <div>
                    <h5 class="mb-6">Features</h5>
                    <ul class="grid gap-4">
                        <li><Link href="#">Eksplor</Link></li>
                        <li><Link href="#">Laporan</Link></li>
                        <li><Link href="#">Sumber Data</Link></li>
                        <li><Link href="#">Analisis</Link></li>
                        <li><Link href="#">AI Datadok</Link></li>
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6">Resources</h5>
                    <ul class="grid gap-4">
                        <li><Link href="#">Panduan</Link></li>
                        <li><Link href="#">Blog</Link></li>
                        <li><Link href="#">Harga</Link></li>
                        <li><Link href="#">Rilis</Link></li>
                        <li><Link href="#">Sitemap</Link></li>
                    </ul>
                </div>
                <div>
                    <h5 class="mb-6">Company</h5>
                    <ul class="grid gap-4">
                        <li><Link href="#">Tentang</Link></li>
                        <li><Link href="#">Karir</Link></li>
                        <li><Link href="#">Kontak</Link></li>
                        <li><Link href="#">Partner</Link></li>
                        <li><Link href="#">Data Privacy</Link></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
            </div>
</template>
