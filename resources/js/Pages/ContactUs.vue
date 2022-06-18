<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import {Inertia} from '@inertiajs/inertia';



</script>

<template>
    <AppLayout title="Contact Us">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Contact Us
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex item-center justify-between mb-2">
                    <div class="font-bold text-xl text-black-700">
                        We want to hear from you!
                        <h2 class="font-light text-l text-black-500 py-10">
                        Your experience is our responsibility, we want to make sure that every user can get the<br>
                        best of our service. Any suggestions and room for improvements are most welcome. </h2>

                        <form id="feedback" action="/" method="POST">
                            <div class="mb-6">
                                <label class="font-light text-m text-black-300" for="feedback">
                                    Feedback
                                </label>
                                <textarea class="border border-gray-300 w-full mt-3 rounded-lg" type="text" placeholder="tell us..." name="Feedback" id="feedback"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="text-white bg-gray-800 rounded px-5 py-1 hover:bg-gray-500">
                                    SUBMIT
                                </button>
                                
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </AppLayout>
</template>