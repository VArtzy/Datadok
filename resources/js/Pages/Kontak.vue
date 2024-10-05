<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Laporan" >
        <template #header>
            <h5 class="text-primary leading-tight text-center">
                Kontak
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-10 relative ">
                <h3 class="text-[#22577A] font-bold"> Kami selalu siap </h3>
                <h3 class="text-[#22577A] font-bold">membantu & melayani</h3>
                <div class="container self-center flex overflow-hidden ">
                    <div class="border border-1/2 w-[30%] h-[100px] bg-[#F5F5F5] flex sm:rounded-lg shadow-sm  p-100 overflow-hidden m-5">
                        
                        <img src="images/WA.png" class=" self-center rounded-md h-[70px] w-[90px]  bg-[bottom_4rem]"></img>
                        <div class="container self-center m-3 ">
                            <p class="text-[#22577A] font-semibold text-[30px]">Konsultasi Gratis</p>
                        </div>
                    </div>
                </div>
                <p class="py-[50px]">Anda dapat menghubungi lewat nomor WhatsApp yang tersedia setelah mengirim email untuk melakukan livechat</p>
                <div class="gap-y-[50px] grid grid-cols-2 grid-rows-auto">
                    <div class="border bg-[#F5F5F5] rounded-xl w-[400px] h-[200px] ">
                        
                        <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[50px]">Bantuan & CS</h6>
                        <p class="text-[#000000] font-semibold text-[20px] text-center relative top-[50px]">bantuan@datadok.com</p>
                        
                    </div>
                    <div class=" border bg-[#F5F5F5] rounded-xl w-[400px] h-[200px] ">
                        
                        <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[50px]">Training</h6>
                        <p class="text-[#000000] font-semibold text-[20px] text-center relative top-[50px]">pelatihan@datadok.com</p>
                        
                    </div>
                    <div class=" border bg-[#F5F5F5] rounded-xl w-[400px] h-[100px] ">
                        
                        <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[25px]">Karir > </h6>
                        
                    </div>
                    <div class=" border bg-[#F5F5F5] rounded-xl w-[400px] h-[100px] ">
                        
                        <h6 class="text-[#22577A] font-semibold text-[30px] text-center relative top-[25px]">Patner ></h6>
                        
                    </div>
                    
                </div>
                <div class="absolute grid grid-cols-1 gap-y-[20px] top-[400px] left-[1100px]" >
                    <img src="images/Linkedin.png" ></img>
                    <img src="images/Instagram.png" ></img>
                    <img src="images/X.png" ></img>
                    <img src="images/Facebook.png" ></img>
                    <img src="images/Tiktok.png" ></img>
                    <img src="images/Youtube.png" ></img>
                </div>
            </div>
        </div>
    </AppLayout>
</template>