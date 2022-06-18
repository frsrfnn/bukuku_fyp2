<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
</script>

<template>
    <AppLayout title="Sell/Donate">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Sell/Donate 
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="flex item-center justify-between mb-2">
                    <div>
                        <form action="/" method="POST" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="">Book Name :    </label>
                                <input type="text" name="name" class="form-control border border-gray-300 w-full mt-3 rounded-lg">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Book Author :  </label>
                                <input type="text" name="author" class="form-control border border-gray-300 w-full mt-3 rounded-lg">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Year Book Published :  </label>
                                <input type="text" name="year" class="form-control border border-gray-300 w-full mt-3 rounded-lg">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Book Price (RM) :  </label>
                                <input type="text" name="price" class="form-control border border-gray-300 w-full mt-3 rounded-lg">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Kuliyyah :  </label>
                                <select name="kuliyyah" id="" class="border border-gray-300 w-full mt-3 rounded-lg">
                                    <option value="KICT">KICT</option>
                                    <option value="KOE">KOE</option>
                                    <option value="KIRKHS">KIRKHS</option>
                                    <option value="LAW">LAW</option>
                                    <option value="KAED">KAED</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Condition :  </label>
                                <select name="condition" id="" class="border border-gray-300 w-full mt-3 rounded-lg">
                                    <option value="New">New</option>
                                    <option value="Used">Used</option>
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Book Description :  </label>
                                <textarea name="description" id="" cols="20" rows="10" class="border border-gray-300 w-full mt-3 rounded-lg"></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Book Image :  </label>
                                <input type="file" name="imsge" class="form-control  w-full mt-3">
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary text-white bg-gray-800 rounded px-5 py-1 hover:bg-gray-500">
                                    ADD
                                </button>
                            </div>
                        </form>   
                    </div>
                    <div class="font-bold text-xl text-black-700">
                        Share your resources with other people!
                        <h2 class="font-light text-l text-black-500 py-10">
                        Choose either to sell or donate your unwanted academic resources here!</h2>
                    </div>         
                </div>
            </div>
            
        </div>
    </AppLayout>
</template>