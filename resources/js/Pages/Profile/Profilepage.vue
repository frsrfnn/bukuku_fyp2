<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>


<template>
    <AppLayout title="Profile">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{$page.props.user}} 's Profile
            </h2>

             <div class="flex align-item-right">
                <InertiaLink :href="route('listingentryform')" class="text-white bg-gray-800 rounded px-3 py-1 hover:bg-gray-500">
                    + Add Listing
                </InertiaLink>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                
            </div>
        </div>
    </AppLayout>
</template>