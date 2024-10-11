<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <Head title="Privasi" />
    <div class="fixed w-full shadow-md flex justify-center">
        <ApplicationLogo />
    </div>
    
    <div class="flex gap-10 px-[250px] bg-white items-center text-center">
    
    <AuthenticationCard class="w-1/2 text-center">
<div class="mb-8 text-primary">
            <h1>Keamanan & Privasi Data</h1>
            <h5>Sistem tersertifikasi standar regulasi dan ketentuan keamanan data.</h5>
            <h6>Privasi Anda adalah prioritas kami. Dengan teknologi mutakhir, data Anda tetap aman dan hanya digunakan sesuai hukum yang berlaku.</h6>
        </div>
     </AuthenticationCard>
    <div class="w-1/2  object-cover object-left">
    <h5 class="text-primary">●Enkripsi Data & File</h5>
    <h5 class="text-primary">●Otentikasi Ganda (2FA)</h5>
    <h5 class="text-primary">●Pemulihan Data (backup)</h5>
    <h5 class="text-primary">●Session Management</h5>
    <h5 class="text-primary">●Konfirmasi Password Dalam Aksi Penting</h5>
    <h5 class="text-primary">●Verifikasi Email</h5>
    </div>
    </div>

</template>
