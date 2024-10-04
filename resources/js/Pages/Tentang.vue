<script setup>
import { Head, Link } from '@inertiajs/vue3';
import ApplicationLogo from '@/components/ApplicationLogo.vue';
import PrimaryButton from '@/components/PrimaryButton.vue';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="shadow-md h-[70px] flex justify-center items-center">
        <ApplicationLogo></ApplicationLogo>
    </div>
            
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-primary leading-tight"><h3 class="text-6xl text-[22577A]">Bisnis yang lebih baik 
            bagi semua, bagi Indonesia</h3></div>
       
        <div class="py-12">

            <div class="text-primary max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight"><h4 class="text-[22577A]">Visi
            </h4></div>
       
        <div class="py-1"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                  <p>Penyedia kesempatan dalam memberdayakan UMKM melalui penerapan teknologi keputusan berbasis data.</p>
                    </div>
                </div>

                <div class="mt-[2%] text-primary max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight"><h4 class="text-[22577A]">Misi
            </h4></div>
       
        <div class="py-1"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                  <p>Penyedia kesempatan dalam memberdayakan UMKM melalui penerapan teknologi keputusan berbasis data.</p>
                    </div>
                </div>

                <div class="mt-[2%] text-primary max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight"><h4 class="text-[22577A]">Nilai Datadok
            </h4></div>
       
        <div class="py-1"></div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div>
                  <p>Intangible Value:</p>
<p>●Membantu UMKM dalam bersaing dengan perusahaan besar</p>
<p>●Mempromosikan budaya pengambilan keputusan bisnis berbasis data</p>
<p>●Meningkatkan ekonomi Indonesia secara menyeluruh, UMKM Indonesia berkontribusi 61% dalam PDB dan menyerap sekitar 117 juta pekerja (97%) dari total tenaga kerja (Kadin Indonesia. (2023))</p>
<p>Tangible Value:</p>
<p>1. Menjalin kemitraan dengan 5000 UMKM yang cloud-ready untuk optimasi bisnis</p>
<p>2. Profit Rp 500 juta dari subscription software termasuk pemanfaatan model freemium</p>
<p>3. Memiliki 20 preset dan template data mining dan model umum berbagai jenis usaha</p>
<p>4. UI/UX desain tampilan hingga API yang mudah digunakan bagi pemilik UMKM, developer atau sistem lain. Juga integrasi data source lain menggunakan banyak API</p>
                    </div>
                </div>

                <div class="py-12">

                <div class="text-primary max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight"><h4 class="text-[22577A]">Datadok For The World
                </h4></div>

                <div class="py-1"></div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div>
                    <p>Datadok ikut serta berkontribusi ke pembanguan Dunia dengan menganut nilai Sustainable Goals Development.</p>
                        </div>
                    </div>
                    
                    </div>
                
                    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 leading-tight">
                    <img src="images/ftw.png">
                    </div>
            </div>
      

   
      
</template>
