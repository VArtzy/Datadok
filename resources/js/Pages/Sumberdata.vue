<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import AddButton from '@/Components/AddButton.vue';
import DialogModal from '@/Components/DialogModal.vue';

const manageData = ref(false);
</script>

<template>
    <AppLayout title="Sumberdata">
        <template #header>
            <h5 class="text-primary leading-tight">
                Dataset
            </h5>
        </template>

        <div class="py-12 bg-[#FFFFFF]">
            <div class="max-w-7xl mx-auto px-8 md:px-12">
                <h3 class="mb-8">Tambahkan Sumber Data</h3>
                <div class="mb-12 grid md:grid-cols-3 gap-12">
                    <AddButton @click="manageData = true" src="images/CSV-XLS.png" title="Unggah File CSV/XLS Excel" />
                    <AddButton src="images/GoogleSheet.png" title="Unggah Dataset Dari Google Sheet" />
                    <AddButton src="images/SQL.png" title="Koneksikan Ke Basis Data SQL" />
                </div>
                <h3>Terakhir Diakses</h3>
            </div>
        </div>

        <DialogModal :show="manageData" @close="manageData = false">
            <template #title>
                Tambahkan Sumber Data
            </template>
            <template #content>
                Tambahkan sumber data
            </template>
            <template #footer>
                tes
            </template>
        </DialogModal>
    </AppLayout>
</template>
