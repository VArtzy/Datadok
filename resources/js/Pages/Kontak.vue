<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Laporan" >
        <template #header>
            <h5 class="text-primary leading-tight">
                Kontak
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto px-8 md:px-12">
                <h2 class="text-primary font-bold max-w-2xl mb-8 md:mb-12"> Kami selalu siap membantu & melayani</h2>
                <div class="container self-center flex overflow-hidden">
                    <div class="border border-1/2 h-[100px] bg-[#F5F5F5] flex rounded-lg shadow-sm p-8 overflow-hidden">

                        <img src="images/WA.png" class=" self-center rounded-md"></img>
                        <div class="container self-center ml-3">
                            <h5 class="text-primary font-semibold">Konsultasi Gratis</h5>
                        </div>
                    </div>
                </div>
                <p class="my-8 md:my-12 max-w-xl">Anda dapat menghubungi lewat nomor WhatsApp yang tersedia setelah mengirim email untuk melakukan livechat</p>
                <div class="md:flex justify-between">
                    <div class="gap-8 md:gap-12 grid md:grid-cols-2 grid-rows-auto">
                        <div class="border bg-[#F5F5F5] rounded-xl md:w-[400px] h-[200px] ">
                            <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[50px]">Bantuan & CS</h6>
                            <p class="text-[#000000] font-semibold text-[20px] text-center relative top-[50px]">bantuan@datadok.com</p>
                        </div>
                        <div class=" border bg-[#F5F5F5] rounded-xl md:w-[400px] h-[200px] ">
                            <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[50px]">Training</h6>
                            <p class="text-[#000000] font-semibold text-[20px] text-center relative top-[50px]">pelatihan@datadok.com</p>
                        </div>
                        <div class=" border bg-[#F5F5F5] rounded-xl md:w-[400px] h-[100px] ">
                            <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[25px]">Karir > </h6>
                        </div>
                        <div class=" border bg-[#F5F5F5] rounded-xl md:w-[400px] h-[100px] ">
                            <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[25px]">Patner ></h6>
                        </div>
                    </div>
                    <div class="grid grid-cols-6 md:grid-cols-1 gap-8 mt-8" >
                        <img src="images/Linkedin.png" ></img>
                        <img src="images/Instagram.png" ></img>
                        <img src="images/X.png" ></img>
                        <img src="images/Facebook.png" ></img>
                        <img src="images/Tiktok.png" ></img>
                        <img src="images/Youtube.png" ></img>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
