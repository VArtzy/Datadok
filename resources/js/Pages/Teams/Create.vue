<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import CreateTeamForm from '@/Pages/Teams/Partials/CreateTeamForm.vue';
import SectionBorder from '@/Components/SectionBorder.vue';

</script>

<template>
    <AppLayout title="Create Team">
        <template #header>
            <h5 class="text-primary leading-tight">
                Buat Bisnis
            </h5>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <CreateTeamForm />
            </div>
        </div>
    </AppLayout>
</template>
