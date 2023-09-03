<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';

</script>

<template>
    <Head title="Blogs & Gallery" />
    <ClientLayout>
        <div>

            <div class="bg-white sm:py-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">From our blogs</h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">Learn how to grow your business with our expert
                            content.</p>
                    </div>
                    <div
                        class="mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-20 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article
                            class="transform transition hover:scale-95 duration-700 ease-in-out hover:cursor-pointer flex flex-col items-start justify-between">
                            <div class="relative w-full">
                                <img src="https://eatout.co.ke/wp-content/uploads/2021/03/4-540x480.jpg"
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
                                    <h3 class="mt-3 text-md font-semibold leading-6 text-primary group-hover:text-gray-600">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Tips for Setting up a restaurant
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-4 text-sm leading-6 text-black font-medium">
                                        Setting up a restaurant can be an exciting endeavor, but it often comes with
                                        significant financial challenges. However, with the right budget-friendly
                                        strategies, aspiring restaurant owners can turn their dreams into reality without
                                        breaking the bank. In this blog post, we will explore a range of practical tips and
                                        cost-saving measures to help you set up a restaurant on a budget.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article
                            class="transform transition hover:scale-95 duration-700 ease-in-out hover:cursor-pointer flex flex-col items-start justify-between">
                            <div class="relative w-full">
                                <img src="https://www.samtell.com/hubfs/Blogs/SamTell-Blog-Restaurant-Kitchen-Design-Tips-to-Maximize-Functionality.jpg"
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
                                    <h3 class="mt-3 text-md font-semibold leading-6 text-primary group-hover:text-gray-600">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            The Evolution of Commercial Kitchen Trends
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-4 text-sm leading-6 text-black font-medium">
                                        Setting up a restaurant can be an exciting endeavor, but it often comes with
                                        significant financial challenges. However, with the right budget-friendly
                                        strategies, aspiring restaurant owners can turn their dreams into reality without
                                        breaking the bank. In this blog post, we will explore a range of practical tips and
                                        cost-saving measures to help you set up a restaurant on a budget.
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article
                            class="transform transition hover:scale-95 duration-700 ease-in-out hover:cursor-pointer flex flex-col items-start justify-between">
                            <div class="relative w-full">
                                <img src="https://www.cadpro.com/wp-content/uploads/2013/08/Restaurant-Floor-Plan.png"
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
                                    <h3 class="mt-3 text-md font-semibold leading-6 text-primary group-hover:text-gray-600">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Trends in Commercial Kitchen Designs
                                        </a>
                                    </h3>
                                    <p class="mt-5 line-clamp-4 text-sm leading-6 text-black font-medium">
                                        Commercial kitchen design plays a crucial role in the success of any foodservice
                                        establishment. From restaurants and hotels to catering companies and ghost kitchens,
                                        a well-designed kitchen can significantly impact efficiency, productivity, and
                                        customer satisfaction.
                                    </p>
                                </div>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>

            <div class="bg-white sm:pb-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-7xl lg:mx-0 text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl text-primary">Latest News
                        </h2>
                        <p class="mt-2 text-lg leading-8 text-gray-600">
                            Get the lastest industry insight and news
                        </p>
                    </div>
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Aug 16, 2023</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Food</a>
                            </div>
                            <div class="group relative">
                                <h3
                                    class="text-primary mt-3 text-md capitalize font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        The premier international exihibition for food
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-4 text-sm leading-6 text-gray-600">
                                    he Kenyan Hospitality Event (KHE) is the biggest exhibition serving the hospitality
                                    industry across East Africa. With its next edition taking place in September 2023 at the
                                    Sarit Centre in Nairobi, Kenya
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <div class="text-sm leading-6">
                                    <p class="text-md hover:text-primary font-semibold text-gray-900">
                                        <a href="https://www.kenyanfoodevent.com/kenyan-hospitality-event" target="_blank">
                                            <span class="absolute inset-0"></span>
                                            Read news article <i class="ml-2 fas fa-up-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Aug 22, 2023</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Hospitality</a>
                            </div>
                            <div class="group relative">
                                <h3
                                    class="text-primary mt-3 text-md capitalize font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#" target="_blank">
                                        <span class="absolute inset-0"></span>
                                        Kenya's hospitality recovery in 2022
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-4 text-sm leading-6 text-gray-600">
                                    Kenya’s hospitality sector is recovering steadily despite the many challenges
                                    experienced in the last 12 months, including inflationary pressures and stiff
                                    competition.
                                    Several factors have helped to cushion the sector against challenges since the start of
                                    the Covid-19 pandemic in 2020.
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <div class="text-sm leading-6">
                                    <p class="text-md hover:text-primary font-semibold text-gray-900">
                                        <a href="https://www.businessdailyafrica.com/bd/opinion-analysis/columnists/kenya-s-hospitality-rides-out-storm-to-recovery-in-2022--4053846"
                                            target="_blank">
                                            <span class="absolute inset-0"></span>
                                            Read news article <i class="ml-2 fas fa-up-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Sept 2, 2023</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Places</a>
                            </div>
                            <div class="group relative">
                                <h3
                                    class="text-primary mt-3 text-md capitalize font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        The best restaurants and bars in Nairobi
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-4 text-sm leading-6 text-gray-600">
                                    50 Best Discovery, an exciting database for eating and drinking, operates as an
                                    extension of the annual 50 Best rankings of restaurants and bars. The venues featured on
                                    50 Best Discovery have all received votes from the experts who create the rankings
                                </p>
                            </div>
                            <div class="relative mt-8 flex items-center gap-x-4">
                                <div class="text-sm leading-6">
                                    <p class="text-md hover:text-primary font-semibold text-gray-900">
                                        <a href="https://www.theworlds50best.com/discovery/sitemap/kenya/nairobi"
                                            target="_blank">
                                            <span class="absolute inset-0"></span>
                                            Read news article <i class="ml-2 fas fa-up-right"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>


        </div>
</ClientLayout></template>