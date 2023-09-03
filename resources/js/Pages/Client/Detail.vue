<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';
import Service from '@/Components/Client/Services.vue';

</script>

<template>
    <Head title="Services" />
    <ClientLayout>
        <div>

            <div class="bg-white">
                <div aria-hidden="true" class="relative">
                    <img src="/img/ck.jpg" alt="" class="h-96 w-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
                </div>

                <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                        <p class="font-semibold mb-4 text-2xl">Blog Details</p>
                        <h2 data-wow-duration="1.5"
                            class="wow animate__rubberBand text-3xl font-bold tracking-tight text-primary sm:text-4xl">
                            Commercial Kitchen Equipment
                        </h2>
                    </div>

                </div>
            </div>


            <div class="bg-white mb-20">
                <div class="mx-auto max-w-5xl px-4 py-2 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-8">

                    <div class="bg-white px-6 lg:px-8">
                        <div class="mx-auto max-w-5xl text-base leading-7 text-gray-700">


                            <div class="mt-2 max-w-5xl">
                                <p>Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim. Mattis mauris
                                    semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio penatibus risus
                                    viverra tellus varius sit neque erat velit. Faucibus commodo massa rhoncus, volutpat.
                                    Dignissim sed eget risus enim. Mattis mauris semper sed amet vitae sed turpis id.</p>

                                <p class="mt-8">Et vitae blandit facilisi magna lacus commodo. Vitae sapien duis odio id et.
                                    Id blandit molestie auctor fermentum dignissim. Lacus diam tincidunt ac cursus in vel.
                                    Mauris varius vulputate et ultrices hac adipiscing egestas. Iaculis convallis ac tempor
                                    et ut. Ac lorem vel integer orci.</p>

                                <p class="mt-10">Faucibus commodo massa rhoncus, volutpat. Dignissim sed eget risus enim.
                                    Mattis mauris semper sed amet vitae sed turpis id. Id dolor praesent donec est. Odio
                                    penatibus risus viverra tellus varius sit neque erat velit.</p>
                            </div>
                            <figure class="mt-16">
                                <img class="aspect-video rounded-xl bg-gray-50 object-cover"
                                    src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&auto=format&fit=facearea&w=1310&h=873&q=80&facepad=3"
                                    alt="">
                                <figcaption class="mt-4 flex gap-x-2 text-sm leading-6 text-gray-500">
                                    <svg class="mt-0.5 h-5 w-5 flex-none text-gray-300" viewBox="0 0 20 20"
                                        fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a.75.75 0 000 1.5h.253a.25.25 0 01.244.304l-.459 2.066A1.75 1.75 0 0010.747 15H11a.75.75 0 000-1.5h-.253a.25.25 0 01-.244-.304l.459-2.066A1.75 1.75 0 009.253 9H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Faucibus commodo massa rhoncus, volutpat.
                                </figcaption>
                            </figure>
                        </div>
                    </div>

                </div>
            </div>


            <div class="bg-white py-10 mb-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="text-primary text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Featured blogs</h2>
                    </div>
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Boost your conversion rate
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">Illo sint voluptas. Error
                                    voluptates culpa eligendi. Hic vel totam vitae illo. Non aliquid explicabo
                                    necessitatibus unde. Sed exercitationem placeat consectetur nulla deserunt vel. Iusto
                                    corrupti dicta.</p>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>





    </div>
</ClientLayout></template>