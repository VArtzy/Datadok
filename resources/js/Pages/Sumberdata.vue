<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import AddButton from '@/Components/AddButton.vue';
</script>

<template>
    <AppLayout title="Sumberdata">
        <template #header>
            <h5 class="text-primary leading-tight">
                Dataset
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto px-8">
                <h3 class="mb-8">Tambahkan Sumber Data</h3>
                <div class="mb-12 grid md:grid-cols-3 gap-12">
                    <AddButton src="images/CSV-XLS.png" title="Unggah File CSV/XLS Excel" />
                    <AddButton src="images/GoogleSheet.png" title="Unggah Dataset Dari Google Sheet" />
                    <AddButton src="images/SQL.png" title="Koneksikan Ke Basis Data SQL" />
                </div>
                <h3>Terakhir Diakses</h3>
            </div>
        </div>
    </AppLayout>
</template>
