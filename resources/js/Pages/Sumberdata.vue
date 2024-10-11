<script setup>
import { ref } from 'vue';
import { useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import AddButton from '@/Components/AddButton.vue';
import DialogModal from '@/Components/DialogModal.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import Footer from '@/Components/Footer.vue';

const manageData = ref(false);
const manageSheet = ref(false);
const manageDB = ref(false);
const dataInput = ref(null);

const props = defineProps({
    auth: Object,
    datasets: Array
});

const form = useForm({
    name: props.auth.user.name,
    team_id: props.auth.user.current_team_id,
    fakta: null
});

const upload = () => {
    form.fakta = dataInput.value.files[0];
    form.post(route("uploads.upload"), {
        onSuccess: () => manageData.value = false
    });
}
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
                    <AddButton @click="manageSheet = true" src="images/GoogleSheet.png" title="Unggah Dataset Dari Google Sheet" />
                    <AddButton @click="manageDB = true" src="images/SQL.png" title="Koneksikan Ke Basis Data SQL" />
                </div>
                <h3>Terakhir Diakses</h3>
                <div class="grid md:grid-cols-3 gap-12">
                    <div v-for="dataset in datasets" :key="dataset.id" class="bg-white shadow-md rounded-md p-6">
                        <h4 class="text-lg font-semibold">{{ dataset.filename }}</h4>
                        <h4 class="text-lg font-semibold">{{ dataset.user.name }}</h4>
                        <p class="text-sm text-gray-500">{{ new Date(dataset.created_at).toLocaleDateString("id-ID") }}</p>
                        <p class="text-sm text-gray-500">{{ new Date(dataset.updated_at).toLocaleDateString("id-ID") }}</p>
                    </div>
                </div>
            </div>
        </div>

        <DialogModal :show="manageData" @close="manageData = false">
            <template #title>
                Tambahkan Sumber Data
            </template>
            <template #content>
                    <input
                    id="data"
                    ref="dataInput"
                    type="file"
                    />
            </template>
            <template #footer>
                <PrimaryButton @click="upload">Upload</PrimaryButton>
            </template>
        </DialogModal>
        <DialogModal :show="manageSheet" @close="manageSheet = false">
            <template #title>
                Tambahkan Google Sheet
            </template>
            <template #content>
                <input type="text" class="w-full border border-gray-300 rounded-md p-2" placeholder="Masukkan URL Google Sheet" />
            </template>
            <template #footer>
                <PrimaryButton @click="manageSheet = false">Tambahkan</PrimaryButton>
            </template>
        </DialogModal>
        <DialogModal :show="manageDB" @close="manageDB = false">
            <template #title>
                Tambahkan Database SQL
            </template>
            <template #content>
                <input type="text" class="w-full border border-gray-300 rounded-md p-2" placeholder="Masukan URL Database" />
            </template>
            <template #footer>
                <PrimaryButton @click="manageDB = false">Tambahkan</PrimaryButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
