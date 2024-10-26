<script setup>
import { ref } from 'vue';
import { useForm, Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import AddButton from '@/Components/AddButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import Card from '@/Components/Card.vue';

const props = defineProps({
    datasets: Array,
    reports: Array
});

const reportForm = useForm({
    title: '',
    description: '',
    dataset_id: null
});

const manageLaporan = ref(false);
const selectedDataset = ref(null);

const addReport = () => {
    reportForm.post(route('reports.store'), {
        onSuccess: () => manageLaporan.value = false
    });
}
</script>

<template>
    <AppLayout title="Laporan" >
        <template #header>
            <h5 class="text-primary leading-tight">
                Laporan
            </h5>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto px-8 md:px-12">
                <h3 class="mb-8">Buat Laporan</h3>
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <AddButton @click="manageLaporan = true" src="images/text_snippet.png" title="Laporan Preset Baru" />
                    <AddButton src="images/insert_drive_file.png" title="Laporan Kosong Baru" />
                </div>

                <h3 class="mb-8">Laporan Terakhir</h3>
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <Link v-for="report in reports" :key="report.id" :href="route('reports.show', report.id)">
                    <Card :title="report.title" :subtitle="report.description" :created="report.created_at" :updated="report.updated_at" src="images/hero-landscape.jpg" />
                    </Link>
                    <p v-if="reports.length === 0" class="col-span-3 text-center">Belum ada laporan, silahkan menambahkan laporan diatas.</p>
                </div>

                <h3 class="mb-8">Dibagikan ke saya</h3>
                <div class="grid md:grid-cols-3 gap-12 mb-12">
                    <div>
                        <div class="border bg-white rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-white rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                    <div>
                        <div class="border bg-white rounded-xl h-[200px]"></div>
                        <h6>Analisis Penjualan Q1</h6>
                    </div>
                </div>
            </div>
        </div>
        <DialogModal :show="manageLaporan" @close="manageLaporan = false">
            <template #title>
                Buat Laporan
            </template>
            <template #content>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="md:w-[65%] grid gap-4">
                        <TextInput v-model="reportForm.title" placeholder="Masukkan nama laporan" />
                        <textarea v-model="reportForm.description" class="w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan deskripsi laporan"></textarea>
                        <h6>Pilih preset laporan</h6>
                    </div>
                    <div class="md:w-[35%]">
                        <h6>Sumber data saya</h6>
                        <button v-for="dataset in datasets" :key="dataset.id" @click="reportForm.dataset_id = dataset.id" class="flex items center gap-4">

                            <span :class="{ 'bg-primary text-white p-2 rounded-md' : selectedDataset === dataset.id }" @click="selectedDataset = dataset.id">{{ dataset.filename }}</span>
                        </button>

                    </div>
                </div>
            </template>
            <template #footer>
                <PrimaryButton @click="addReport">Buat</PrimaryButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>.
