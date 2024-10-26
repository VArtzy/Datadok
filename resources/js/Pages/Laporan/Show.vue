<script setup>
import { ref } from 'vue';
import AppLayout from '@/Layouts/AppLayout.vue';
import DialogModal from '@/Components/DialogModal.vue';
import { Bar } from 'vue-chartjs';
import { Chart as ChartJS, Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale } from 'chart.js';
import html2pdf from 'html2pdf.js';

ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);

const share = ref(false);
const printableArea = ref(null);
const text = ref('Atau Salin Tautan');

const props = defineProps({
    report: Object,
    data: Object,
    filename: String
});

// Accessing props and initializing data variables
const jumlahStats = [
    props.data.statistik_ringkasan.jumlah.rata_rata,
    props.data.statistik_ringkasan.jumlah.median,
    props.data.statistik_ringkasan.jumlah.modus,
    props.data.statistik_ringkasan.jumlah.standar_deviasi,
    props.data.statistik_ringkasan.jumlah.minimum,
    props.data.statistik_ringkasan.jumlah.maksimum
];

const hargaStats = [
    props.data.statistik_ringkasan.harga.rata_rata,
    props.data.statistik_ringkasan.harga.median,
    props.data.statistik_ringkasan.harga.modus,
    props.data.statistik_ringkasan.harga.standar_deviasi,
    props.data.statistik_ringkasan.harga.minimum,
    props.data.statistik_ringkasan.harga.maksimum
];

const copy = () => {
    navigator.clipboard.writeText(window.location.href);
    text.value = 'Tautan disalin!';
}

function downloadPDF() {
  const element = printableArea.value;

  // Configure options
  const options = {
    margin:       0.5,
    filename:     props.report.title,
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'in', format: 'a4', orientation: 'portrait' }
  };

  // Generate PDF
  html2pdf().set(options).from(element).save();
}
</script>

<template>
    <AppLayout :title="report.title">
        <template #header>
            <h5 class="text-primary leading-tight">{{ report.title }}</h5>
        </template>

        <div ref="printableArea" class="max-w-7xl mx-auto px-8 md:px-12 py-12">
            <div class="mb-12 flex flex-col md:flex-row gap-16 justify-between items-center">
                <div>
            <h6>{{ report.description }}</h6>
            <div class="flex gap-4">
<svg @click="downloadPDF" class="cursor-pointer" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_85_986)">
<path d="M25.3332 12H19.9998V4H11.9998V12H6.6665L15.9998 21.3333L25.3332 12ZM14.6665 14.6667V6.66667H17.3332V14.6667H18.8932L15.9998 17.56L13.1065 14.6667H14.6665ZM6.6665 24H25.3332V26.6667H6.6665V24Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_85_986">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>

<svg @click="share = true" class="cursor-pointer" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_85_981)">
<path d="M24 21.44C22.9867 21.44 22.08 21.84 21.3867 22.4667L11.88 16.9334C11.9467 16.6267 12 16.32 12 16C12 15.68 11.9467 15.3734 11.88 15.0667L21.28 9.58669C22 10.2534 22.9467 10.6667 24 10.6667C26.2133 10.6667 28 8.88002 28 6.66669C28 4.45335 26.2133 2.66669 24 2.66669C21.7867 2.66669 20 4.45335 20 6.66669C20 6.98669 20.0533 7.29335 20.12 7.60002L10.72 13.08C10 12.4134 9.05333 12 8 12C5.78667 12 4 13.7867 4 16C4 18.2134 5.78667 20 8 20C9.05333 20 10 19.5867 10.72 18.92L20.2133 24.4667C20.1467 24.7467 20.1067 25.04 20.1067 25.3334C20.1067 27.48 21.8533 29.2267 24 29.2267C26.1467 29.2267 27.8933 27.48 27.8933 25.3334C27.8933 23.1867 26.1467 21.44 24 21.44ZM24 5.33335C24.7333 5.33335 25.3333 5.93335 25.3333 6.66669C25.3333 7.40002 24.7333 8.00002 24 8.00002C23.2667 8.00002 22.6667 7.40002 22.6667 6.66669C22.6667 5.93335 23.2667 5.33335 24 5.33335ZM8 17.3334C7.26667 17.3334 6.66667 16.7334 6.66667 16C6.66667 15.2667 7.26667 14.6667 8 14.6667C8.73333 14.6667 9.33333 15.2667 9.33333 16C9.33333 16.7334 8.73333 17.3334 8 17.3334ZM24 26.6934C23.2667 26.6934 22.6667 26.0934 22.6667 25.36C22.6667 24.6267 23.2667 24.0267 24 24.0267C24.7333 24.0267 25.3333 24.6267 25.3333 25.36C25.3333 26.0934 24.7333 26.6934 24 26.6934Z" fill="#323232"/>
</g>
<defs>
<clipPath id="clip0_85_981">
<rect width="32" height="32" fill="white"/>
</clipPath>
</defs>
</svg>
<p>{{ new Date(report.created_at).toLocaleDateString('id-ID') }}</p>
<p>{{ new Date(report.updated_at).toLocaleDateString('id-ID') }}</p>
            </div>
                </div>
                <div class="outline outline-gray-200 rounded-md p-4">
                    <h6 class="mb-4">Sumber data:</h6>
                    <div class="flex gap-8 items-center">
                        <img width="100" src="/images/CSV-XLS.png" alt="Excel files">
                        <p>{{ filename }}</p>
                    </div>
                </div>
            </div>

        <div class="flex flex-col md:flex-row gap-16">
        <section class="w-[60%]">
            <Bar
                :data="{
                    labels: ['Rata-rata', 'Median', 'Modus', 'Standar Deviasi', 'Minimum', 'Maksimum'],
                    datasets: [
                        {
                            label: 'Jumlah',
                            data: jumlahStats,
                            backgroundColor: 'rgba(75, 192, 192, 0.5)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        },
                        {
                            label: 'Harga',
                            data: hargaStats,
                            backgroundColor: 'rgba(153, 102, 255, 0.5)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }
                    ]
                }"
                :options="{
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top'
                        },
                        title: {
                            display: true,
                            text: 'Perbandingan Jumlah dan Harga'
                        }
                    }
                }"
            />

        <!-- Summary Statistics -->
        <section class="mt-12 p-8 outline outline-gray-200 rounded-md">
            <h4 class="mb-8">Summary Statistics</h4>
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <h6 class="mb-4">Jumlah</h6>
                    <p>Rata-rata: {{ data.statistik_ringkasan.jumlah.rata_rata }}</p>
                    <p>Median: {{ data.statistik_ringkasan.jumlah.median }}</p>
                    <p>Modus: {{ data.statistik_ringkasan.jumlah.modus }}</p>
                    <p>Standar Deviasi: {{ data.statistik_ringkasan.jumlah.standar_deviasi.toFixed(2) }}</p>
                    <p>Minimum: {{ data.statistik_ringkasan.jumlah.minimum }}</p>
                    <p>Maksimum: {{ data.statistik_ringkasan.jumlah.maksimum }}</p>
                </div>
                <div>
                    <h6 class="mb-4">Harga</h6>
                    <p>Rata-rata: {{ data.statistik_ringkasan.harga.rata_rata }}</p>
                    <p>Median: {{ data.statistik_ringkasan.harga.median }}</p>
                    <p>Modus: {{ data.statistik_ringkasan.harga.modus }}</p>
                    <p>Standar Deviasi: {{ data.statistik_ringkasan.harga.standar_deviasi.toFixed(2) }}</p>
                    <p>Minimum: {{ data.statistik_ringkasan.harga.minimum }}</p>
                    <p>Maksimum: {{ data.statistik_ringkasan.harga.maksimum }}</p>
                </div>
            </div>
        </section>
        </section>

        <!-- Insights -->
        <section class="w-[40%]">
            <div class="mb-8 p-8 outline outline-gray-200 rounded-md">
            <h4 class="text-center mb-4">Insights</h4>
<ul class="list-disc list-inside">
    <li v-for="(insight, index) in data.wawasan.slice(1)" :key="index">{{ insight }}</li>
</ul>
            </div>
            <div class="text-center p-8 outline outline-gray-200 rounded-md">
            <h4 class="mb-4">Produk Terlaris</h4>
                <p>{{ data.wawasan[1] }}</p>
            </div>
        </section>
        </div>

            <div class="mt-12 flex items-center gap-4">
            <textarea class="w-full border border-gray-300 rounded-md p-2" placeholder="tanya AI Datadok..."></textarea>
            <button class="bg-primary text-white rounded-md p-4">Kirim</button>
            </div>
       </div>
        <DialogModal :show="share" @close="share = false">
            <template #title>
                Bagikan Laporan
            </template>
            <template #content>
                <div class="flex flex-col gap-4">
                    <label for="email">Email</label>
                    <input type="email" id="email" class="border border-gray-300 rounded-md p-2" placeholder="Masukkan email penerima" />
                </div>
                <button class="w-full bg-primary text-white rounded-md p-2 mt-4 active:bg-primary-light transition-all" @click="copy">{{ text }}</button>
            </template>
            <template #footer>
                <PrimaryButton @click="share = false">Bagikan</PrimaryButton>
            </template>
        </DialogModal>
    </AppLayout>
</template>
