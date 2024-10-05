<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Laporan" >
        <template #header>
            <h5 class="text-primary leading-tight text-center">
                Laporan
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF] ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-10 relative  ">
                <h3> Buat Laporan</h3>
                <div class="container self-center flex overflow-hidden ">
                    <div class="border border-1/2 w-[30%] h-[120px] flex sm:rounded-lg shadow-sm  p-100 overflow-hidden m-5">
                        
                    <img src="images/text_snippet.png" class=" self-center rounded-md h-[100px] w-[150px]  bg-[bottom_4rem]"></img>
                    <div class="container self-center m-3 ">
                        <p>Laporan Preset</p>
                        <p>Baru</p>
                    </div>
                    <img src="images/PlusSign.png" class=" self-center rounded-md h-[50px] w-[50px]  bg-[bottom_4rem]"></img>
                </div>
                <div class="border border-1/2 w-[30%] h-[120px] flex sm:rounded-lg shadow-sm p-100 overflow-hidden m-5">
                       
                    <img src="images/insert_drive_file.png" class=" self-center rounded-md h-[100px] w-[120px]  bg-[bottom_4rem]"></img>
                    <div class="container self-center m-3">
                        <p>Laporan Kosong</p>
                        <p>Baru</p>
                    </div>
                    <img src="images/PlusSign.png" class=" self-center rounded-md h-[50px] w-[50px]  bg-[bottom_4rem]"></img>
                    </div>
                </div>
                <h3 class="py-[50px]">Laporan Terakhir</h3>
                <div class="flex flex-warp gap-[100px]">
                    <div class="border bg-[#F5F5F5] rounded-xl w-[600px] h-[200px]">
                        <h6 class="absolute py-[200px]">Analisis Penjualan Q1</h6>
                    </div>
                    <div class="border bg-[#F5F5F5] rounded-xl  w-[600px] h-[200px]">

                    </div>
                    <div class="border bg-[#F5F5F5] rounded-xl w-[600px] h-[200px]">

                    </div>
                </div>
                
                <h3 class="py-[50px]">Dibagikan ke saya</h3>
                <div class="flex flex-warp gap-[100px]">
                    <div class="border bg-[#F5F5F5] rounded-xl w-[600px] h-[200px]">
                        <h6 class="absolute py-[200px]">Analisis Penjualan Q1</h6>
                    </div>
                    <div class="border bg-[#F5F5F5] rounded-xl w-[600px] h-[200px]">

                    </div>
                    <div class="border bg-[#F5F5F5] rounded-xl w-[600px] h-[200px]">
                        
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>