<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AddButton from '@/Components/AddButton.vue';
</script>

<template>
    <AppLayout title="Laporan" >
        <template #header>
            <h5 class="text-primary leading-tight">
                Laporan
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto px-8">
                <h3 class="mb-8">Buat Laporan</h3>
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <AddButton src="images/text_snippet.png" title="Laporan Preset Baru" />
                    <AddButton src="images/insert_drive_file.png" title="Laporan Kosong Baru" />
                </div>
                <h3 class="mb-8">Laporan Terakhir</h3>
                <div class="grid grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                </div>

                <h3 class="mb-8">Dibagikan ke saya</h3>
                <div class="grid grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-[#F5F5F5] rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
