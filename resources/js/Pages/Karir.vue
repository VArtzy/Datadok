<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';


const form = useForm({
    email: '',
    password: '',
    remember: false,
});

</script>

<template>
    <Head title="Karir" />
    <div class="fixed w-full shadow-md flex justify-center">
        <ApplicationLogo />
    </div>
    <div class="flex gap-16 px-[120px] bg-white items-center">
    <AuthenticationCard class="w-1/2">
        <div class="mb-8 text-primary">
            <h2>Talenta tumbuh bersama Datadok</h2>
        </div>
        <div class=" text-black">
            <h6>Email</h6>
        </div>
        <div class="mt-1 block mb-8">
            <TextInput  
                    id="email"
                    v-model="form.email"
                    type="email"
                    class="mt-1 block w-full"
                    required
                    autofocus
                    autocomplete="username"
                />
               
        </div>  
        
        <div class=" text-black">
            <h6>Posisi</h6>
        </div>
        <div class="mt-1 block mb-8">
            <select id="Posisi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected></option>
                <option value="O">Owner</option>
                <option value="A">Administrator</option>
                <option value="E">Editor</option>
            </select>
        </div>

        <Link class="text-primary">Nilai Kami
        </Link>
      <div class="block mt-8">
        <a class="inline items-center bg-primary border px-12 py-4 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150" href="mailto:name@rapidtables.com?subject=The%20subject%20of%20the%20mail">Kirim
        </a> 
        
        <Link :href="route('kontak')" class="ms-4 inline items-center bg-secondary border px-12 py-4 border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150">
        Kontak
        </Link>
    </div>
    </AuthenticationCard>
    <img class="w-1/2 h-[530px] object-cover object-left shadow-md" src="images/login.jpeg">
    </div>

</template>
