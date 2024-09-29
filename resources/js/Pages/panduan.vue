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
                        <a class="font-semibold" href="#">Fitur</a>
                        <a class="font-semibold" href="panduan">Panduan</a>
                        <a class="font-semibold" href="#">Harga</a>
                        <a class="font-semibold" href="#">Blog</a>
                    </nav>
                    <div class="flex gap-12 justify-center lg:justify-end">
                        <Link :href="route('login')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px] bg-white text-primary outline outline-black">Masuk</Link>
                        <Link :href="route('register')" class="inline-flex items-center bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150 px-8 lg:px-12 py-[16px]">Coba Gratis</Link>
                    </div>
                </header>
            
        <div class="text-primary text-center leading-tight"><p class="text-6xl text-[22577A]">Cara menambahkan akun ke tim Bisnis Datadok</p></div>
        <div class="text-primary text-center leading-tight"><h6 class="text-black">10 menit baca - oleh Farrel Nikoson - 2023</h6></div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                  <p>Mengelola tim dalam platform Datadok menjadi lebih mudah dengan fitur penambahan akun. Berikut adalah langkah-langkah untuk menambahkan anggota ke tim bisnis Anda di Datadok:</p>
<p>1. Masuk ke Akun Datadok Anda
Pertama, pastikan Anda sudah masuk ke akun Datadok Anda. Jika belum, buka Datadok dan lakukan login menggunakan kredensial yang sesuai.</p>
<p>2. Akses Menu Tim
Setelah berhasil masuk, navigasikan ke halaman Dashboard. Di sisi kiri layar, Anda akan melihat menu navigasi. Klik pada "Tim" untuk mengakses pengaturan tim bisnis Anda.</p>
<p>3. Pilih Opsi "Tambahkan Anggota"
Di halaman tim, cari tombol atau opsi "Tambahkan Anggota". Biasanya, tombol ini terletak di bagian atas atau bawah daftar anggota tim yang sudah ada.</p>
<p>4. Masukkan Detail Anggota Baru
Anda akan diarahkan ke formulir untuk menambahkan anggota baru. Masukkan informasi yang diperlukan, seperti:</p>
●Nama Lengkap: Nama anggota baru.
<p>●Alamat Email: Alamat email yang valid untuk mengundang anggota.</p>
<p>●Peran: Pilih peran yang sesuai untuk anggota (misalnya, Admin, Anggota, atau Pengguna Terbatas).</p>
<p>5. Kirim Undangan
Setelah mengisi semua detail yang diperlukan, klik tombol "Kirim Undangan" atau "Tambahkan". Anggota baru akan menerima email undangan dengan petunjuk untuk bergabung dengan tim Anda di Datadok.</p>
<p>6. Konfirmasi Bergabung
Tunggu hingga anggota baru menerima dan mengonfirmasi undangan melalui email mereka. Setelah mereka menyetujui undangan, mereka akan ditambahkan secara resmi ke tim bisnis Anda.</p>
<p>7. Verifikasi dan Pengaturan Tambahan
Kembali ke halaman Tim untuk memverifikasi bahwa anggota baru telah ditambahkan dengan benar. Anda juga dapat mengatur izin dan peran tambahan jika diperlukan.
Tips Berguna
<p>●Periksa Email Spam: Jika undangan tidak diterima dalam waktu singkat, pastikan untuk memeriksa folder spam atau junk di email anggota baru.</p>
<p>●Kustomisasi Peran: Sesuaikan peran dan izin anggota tim sesuai dengan kebutuhan dan tanggung jawab mereka.</p>
Dengan mengikuti langkah-langkah di atas, Anda dapat dengan mudah menambahkan anggota baru ke tim bisnis Anda di Datadok, memastikan bahwa semua kolaborator memiliki akses yang diperlukan untuk bekerja secara efektif. Jika Anda mengalami kesulitan atau membutuhkan bantuan tambahan, jangan ragu untuk menghubungi dukungan pelanggan Datadok.</p>
                    </div>
                </div>
            </div>
        </div>

    <div class="text-center"><h6>Video Tutorial</h6></div>
      
</template>
