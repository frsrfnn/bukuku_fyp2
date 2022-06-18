<script setup>
//import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />
        
        <div class="flex justify-around items-center bg-gray-100 min-h-screen">
            <div>
                <img src='/images/book-logo.png' alt="Bukuku">
            </div>
            <div>
                <h1 class="text-4xl font-bold">
                    Bukuku - Book paradise
                </h1>
                <h2 class="text-xl font-semibold">
                    resources at the tip of your finger!
                </h2>
            </div>
            <div v-if="canLogin" class="flex.justify-center space-x-5 mt-5">
                <InertiaLink :href="('home')" v-if="$page.props.user" class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500">
                    Home
                </InertiaLink>
                 <InertiaLink href='#' v-if="$page.props.user" class="text-lg text-gray-700 underline">
                    Log Out
                 </InertiaLink>
                <template v-else>
                    <InertiaLink :href="route('login')" class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500">
                        LOGIN
                    </InertiaLink>
                    <InertiaLink :href="route('register')" v-if="canRegister" class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500" >
                        REGISTER
                    </InertiaLink>
                </template>
            </div>
        </div>
</template>