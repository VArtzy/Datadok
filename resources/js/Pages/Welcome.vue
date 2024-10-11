<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/components/ApplicationLogo.vue';
import PrimaryButton from '@/components/PrimaryButton.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>


<template>
    
    <Head title="Welcome" />
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
                    <h1 class="max-w-5xl mx-auto mb-12 text-primary text-center">Keputusan Bisnis dalam Sekejap. <span class="text-primary-light">Lebih Cepat, Lebih Tanggap.</span></h1>
                    <div class="flex flex-col lg:flex-row gap-12">
                        <div class="lg:w-[75%] grid gap-12">
                        <img src="images/hero-landscape.jpg" alt="Menggunakan datadok" class="rounded-md h-[200px] w-full bg-white object-cover bg-[bottom_4rem]"></img>
                        <h3>Manfaatkan alat pintar untuk analisis dan intelijen bisnis, serta buat keputusan bisnis yang lebih optimal. Gunakan sekarang, batalkan kapan saja.</h3>
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

            <div class="text-primary text-center leading-tight"><p class="text-6xl text-[22577A] text-semibold" id="blog">Rahasia Manajemen Atas Amazon: Intelijen Bisnis</p></div>
        <div class="text-primary text-center leading-tight"><h6 class="text-black">5 menit baca - oleh Farrel Nikoson - 2024</h6></div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                  <p>Dalam dunia bisnis yang bergerak cepat dan kompetitif seperti saat ini, memiliki keunggulan dalam pengambilan keputusan adalah kunci sukses. Salah satu raksasa e-commerce global, Amazon, telah menunjukkan kepada dunia bagaimana intelijen bisnis yang tepat dapat mengubah permainan. Namun, Anda tidak perlu menjadi raksasa untuk memanfaatkan kekuatan data dan analisis. Dengan Datadok, solusi intelijen bisnis terbaru, Anda bisa mendapatkan wawasan mendalam yang sama seperti yang digunakan oleh perusahaan-perusahaan besar.
Mengapa Intelijen Bisnis Itu Penting?
Intelijen bisnis (BI) adalah seni dan ilmu dalam mengumpulkan, menganalisis, dan memanfaatkan data untuk membuat keputusan yang lebih baik dan lebih cepat. Amazon, sebagai salah satu pemimpin pasar global, telah lama mengandalkan BI untuk memantau tren pasar, mengelola inventaris, dan memahami perilaku pelanggan. Sekarang, Anda bisa mendapatkan keuntungan yang sama dengan Datadok, platform BI yang dirancang khusus untuk membantu bisnis dari berbagai ukuran memaksimalkan potensi data mereka.
Bagaimana Datadok Membantu Anda?</p>
<p>1. Wawasan Mendalam dari Data Anda
Datadok memberikan alat canggih untuk mengumpulkan dan menganalisis data dari berbagai sumber. Dari pelacakan penjualan hingga analisis perilaku pelanggan, Datadok membantu Anda memahami pola dan tren yang tersembunyi dalam data Anda, mirip dengan yang dilakukan oleh Amazon untuk memprediksi permintaan dan mengoptimalkan rantai pasokan mereka.</p>
<p>2. Laporan Kustom dan Analisis Real-Time
Dengan Datadok, Anda dapat membuat laporan kustom dan mendapatkan analisis real-time yang membantu Anda membuat keputusan cepat dan terinformasi. Fitur ini memungkinkan Anda untuk mengikuti perkembangan bisnis secara langsung, seperti halnya Amazon yang memanfaatkan data untuk melacak performa produk secara real-time.</p>
<p>3. Integrasi Mudah dengan Sistem Anda
Datadok dirancang untuk integrasi mulus dengan berbagai sistem dan platform yang sudah Anda gunakan. Baik itu CRM, ERP, atau sistem lainnya, Datadok memastikan data Anda selalu terhubung dan konsisten, memudahkan Anda dalam membuat laporan dan analisis tanpa kesulitan teknis.</p>
<p>4. Antarmuka Pengguna yang Ramah dan Intuitif
Dengan antarmuka yang mudah digunakan, Datadok memungkinkan Anda dan tim untuk mengakses informasi yang diperlukan tanpa memerlukan keahlian teknis yang mendalam. Fitur drag-and-drop dan dashboard yang dapat disesuaikan menjadikan analisis data lebih cepat dan lebih sederhana.</p>
<p>5. Keamanan Data yang Kuat
Kami memahami betapa pentingnya keamanan data dalam bisnis. Datadok menyediakan enkripsi data tingkat tinggi dan kontrol akses yang ketat untuk memastikan informasi Anda tetap aman dari ancaman luar.
Bergabung dengan Revolusi BI
Saatnya mengambil langkah besar untuk meningkatkan strategi bisnis Anda dengan intelijen bisnis yang canggih. Datadok menawarkan solusi yang sama efektifnya dengan yang digunakan oleh Amazon untuk menjaga dominasi mereka di pasar. Dengan fitur-fitur unggulan dan antarmuka yang intuitif, Datadok membantu Anda mengambil keputusan yang lebih baik dan memanfaatkan data untuk pertumbuhan bisnis yang berkelanjutan.</p>
<p>Jangan biarkan bisnis Anda tertinggal. Cobalah Datadok hari ini dan rasakan sendiri bagaimana intelijen bisnis dapat mengubah cara Anda menjalankan bisnis. Daftar sekarang dan mulai perjalanan Anda menuju pengelolaan data yang lebih efektif dan keputusan yang lebih cerdas!</p>
                </div>
            </div>
        </div>
</template>
