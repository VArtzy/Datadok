<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Sumberdata">
        <template #header>
            <h5 class="text-primary leading-tight text-center">
                Dataset
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF] px-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-10 relative ">
                <h3> Tambahkan Sumber Data</h3>
                <div class="container self-center overflow-hidden ">
                    <div class="border border-1/2 w-[30%] h-[120px] float-left flex sm:rounded-lg shadow-xl p-100 overflow-hidden m-5">
                        
                        <img src="images/CSV-XLS.png" class="float-left self-center rounded-md h-[100px] w-[150px]  bg-[bottom_4rem]"></img>
                        <div class="container float-none self-center m-3 ">
                            <p>Unggah File</p>
                            <p>CVS/XLS Excel</p>
                        </div>
                        <img src="images/PlusSign.png" class="float-right self-center rounded-md h-[50px] w-[50px]  bg-[bottom_4rem]"></img>
                    </div>
                    <div class="border border-1/2 w-[27%] h-[120px] float-left flex sm:rounded-lg shadow-xl p-100 overflow-hidden m-5">
                       
                        <img src="images/GoogleSheet.png" class="float-left self-center rounded-md h-[100px] w-[120px]  bg-[bottom_4rem]"></img>
                        <div class="container self-center float-none m-3">
                            <p>Unggah File</p>
                            <p>GoogleSheet</p>
                        </div>
                        <img src="images/PlusSign.png" class="float-right self-center rounded-md h-[50px] w-[50px]  bg-[bottom_4rem]"></img>
                    </div>
                    <div class="border border-1/2 w-[30%] h-[120px] float-left flex  sm:rounded-lg shadow-xl p-100 overflow-hidden m-5">
                        
                        <img src="images/SQL.png" class="float-left self-center rounded-md h-[100px] w-[120px]  bg-[bottom_4rem]"></img>
                        <div class="container float-none m-3 self-center ">
                            <p>Unggah File</p>
                            <p>Database SQL</p>
                        </div>
                        
                        <img src="images/PlusSign.png" class="float-left self-center  rounded-md h-[50px] w-[50px]  bg-[bottom_4rem]"></img>
                        
                        
                    </div>
                </div>
                <h3>Terakhir Diakses</h3>
            </div>
        </div>
    </AppLayout>
</template>