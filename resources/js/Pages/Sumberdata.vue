<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
</script>

<template>
    <AppLayout title="sumberdata">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sumberdata
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
                <h3>
                    Tambahkan Sumber Data
                </h3>
                <div>
                    <div class="border rounded-full">
                        <p>Unggah file</p>
                    </div>
                    <div class="border rounded-full">
                        <p>Unggah file</p>
                    </div>
                    <div class="border rounded-full">
                        <p>Unggah file</p>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>