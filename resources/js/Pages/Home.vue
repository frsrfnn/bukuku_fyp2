<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>


<template>
    <AppLayout title="Home">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Home
            </h2>
        </template>

        <div class="relative">
            <img src='/images/cover.jpg' alt="#" class="w-full h-96 opacity-50 object-cover">
        </div>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex flex-col max-w-7xl mx-auto px-4 sm:container sm:flex-row sm:space-x-4 sm:my-4 sm:px-6 lg:px-8">
                    <InertiaLink href="#" class="flex flex-col w-full h-full mb-4">
                        <div class="text-center text-black bg-purple-200 py-2">
                            <span>
                                Think and Grow Rich  
                            </span>
                        </div>
                        <img src='/images/book-1.jpg' alt="#" class="h-72 object-cover md:wd-72 lg:w-96">
                    </InertiaLink>
                    <InertiaLink href="#" class="flex flex-col w-full h-full mb-4">
                        <div class="text-center text-black bg-purple-200 py-2">
                            <span>
                                Acturial Mathematics 
                            </span>
                        </div>
                        <img src='/images/book-2.jpg' alt="#" class="h-72 object-cover md:wd-72 lg:w-96">
                    </InertiaLink>
                    <InertiaLink href="#" class="flex flex-col w-full h-full mb-4">
                        <div class="text-center text-black bg-purple-200 py-2">
                            <span>
                                Core Computer Science 
                            </span>
                        </div>
                        <img src='/images/book-3.jpg' alt="#" class="h-72 object-cover md:wd-72 lg:w-96">
                    </InertiaLink>
                    <InertiaLink href="#" class="flex flex-col w-full h-full mb-4">
                        <div class="text-center text-black bg-purple-200 py-2">
                            <span>
                                Physics in context 
                            </span>
                        </div>
                        <img src='/images/book-4.jpg' alt="#" class="h-72 object-cover md:wd-72 lg:w-96">
                    </InertiaLink>
                </div>
            </div>
        </div>
    </AppLayout>
</template>