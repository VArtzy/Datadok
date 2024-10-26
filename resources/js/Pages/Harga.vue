<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <AppLayout title="harga">
    <Head title="Welcome" />
    <div class="shadow-md h-[70px] flex justify-center items-center">
        <ApplicationLogo/>
    </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-8 md:px-12">
        <h1 class="text-center text-primary">Paket Harga</h1>
        <div class="text-primary text-center leading-tight"><h6 class="text-black">Temukan pilihan paket harga yang tepat untuk kebutuhan bisnis Anda</h6></div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                <p>Kami menawarkan berbagai paket harga untuk memenuhi kebutuhan bisnis dari semua industri dan segmen. Harga kami didasarkan pada jumlah pengguna, fitur, dan 
                    tingkat dukungan. Anda dapat memilih antara paket bulanan atau tahunan, sesuai dengan kebutuhan bisnis Anda.</p>
                <div class="container self-center flex overflow-hidden">
                    <div class="border border-1/2 h-[100px] bg-[#F5F5F5] flex rounded-lg shadow-sm p-8 overflow-hidden mx-auto">

                        <img src="images/WA.png" class=" self-center rounded-md"></img>
                        <div class="container self-center ml-3">
                            <h5 class="text-primary font-semibold">Konsultasi Harga Lebih Lanjut</h5>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
    </AppLayout>
</template>
