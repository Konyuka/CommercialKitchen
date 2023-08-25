<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';

</script>

<template>
    <Head title="Blogs & Gallery" />
    <ClientLayout>
        <div>

            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">From our blogs</h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert
                            advice.</p>
                    </div>
                    <div
                        class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article class="flex flex-col items-start justify-between">
                            <div class="relative w-full">
                                <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                    alt=""
                                    class="aspect-[16/9] w-full rounded-2xl bg-gray-100 object-cover sm:aspect-[2/1] lg:aspect-[3/2]">
                                <div class="absolute inset-0 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>
                            </div>
                            <div class="max-w-xl">
                                <div class="mt-8 flex items-center gap-x-4 text-xs">
                                    <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2023</time>
                                    <a href="#"
                                        class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                                </div>
                                <div class="group relative">
                                    <h3
                                        class="mt-3 text-lg font-semibold leading-6 text-primary group-hover:text-gray-600">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Boost your conversion rate
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-3 text-sm leading-6 text-black font-medium">Illo sint voluptas. Error
                                        voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                        necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel.
                                        Iusto corrupti dicta.</p>
                                </div>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>

            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">From our Gallery</h2>
                    </div>
                    <div
                        class="mx-auto mt-16 grid max-w-2xl auto-rows-fr grid-cols-1 gap-8 sm:mt-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article
                            class="relative isolate flex flex-col justify-end overflow-hidden rounded-2xl bg-gray-900 px-8 pb-8 pt-80 sm:pt-48 lg:pt-80">
                            <img src="https://images.unsplash.com/photo-1496128858413-b36217c2ce36?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=3603&q=80"
                                alt="" class="absolute inset-0 -z-10 h-full w-full object-cover">
                            <div class="absolute inset-0 -z-10 bg-gradient-to-t from-gray-900 via-gray-900/40"></div>
                            <div class="absolute inset-0 -z-10 rounded-2xl ring-1 ring-inset ring-gray-900/10"></div>

                            
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-black">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Boost your conversion rate
                                </a>
                            </h3>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>


    </div>
</ClientLayout></template>