<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed, ref } from 'vue'

const page = usePage();

const currentRoute = computed(() => {
    const pathName = window.location.pathname;
    return pathName;
})

const hasAuth = computed(() => {
    return page.props.auth.user ? true : false
});

const openMobileMenu = ref(false);



</script>

<template>
    <nav class="bg-black min-h-[120px] border-gray-200 dark:bg-gray-900 px-2">
        <div class="max-w-screen-2xl flex-wrap hidden sm:flex justify-between mx-auto items-center px-4 pt-4">

            <div class="flex gap-2">

                <Link :href="route('admin.dashboard')" v-if="hasAuth" type="button" data-wow-duration="3s"
                    class="wow animate__zoomInDown border-2 border-primary hover:bg-primary hover:text-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Dashboard
                </Link>
                <!-- <button type="button"
                        data-wow-duration="3s"
                        class="wow animate__zoomInDown border-2 border-primary hover:bg-primary hover:text-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Partners
                    </button>
                    <button type="button"
                    data-wow-duration="3.5s"
                        class="wow animate__zoomInDown border-2 border-primary hover:bg-primary hover:text-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Agents
                    </button> -->
            </div>

            <div class="flex justify-between">
                <a href="tel:+254717269050"
                    class="text-white tranform transition hover:scale-110 duration-700 ease-in-out text-md mr-10 wow animate__zoomInDown"
                    data-wow-duration="2s">
                    <i class="fas fa-phone-volume text-primary fa-xl mr-2"></i>
                    +254 115 511 079
                </a>
                <a href="tel:+254717269050"
                    class="text-white tranform transition hover:scale-110 duration-700 ease-in-out text-md wow animate__zoomInDown"
                    data-wow-duration="2.5s">
                    <i class="fas fa-envelope-dot text-primary fa-xl mr-2"></i>
                    info@commercialkitchen.co.ke
                </a>
            </div>

        </div>

        <div class="max-w-screen-2xl flex flex-wrap items-center justify-between mx-auto px-4">

            <div class="flex justify-between h-full">
                <Link to="/" class="flex items-center mr-6 mt-2">
                <img src="/img/logo.jpg" class="h-20 mr-3 wow animate__lightSpeedInLeft fadein mb-2" data-wow-duration="1s"
                    data-wow-delay="2s" alt="Flowbite Logo" />
                </Link>

                <!-- mobile button -->
                <button @click="openMobileMenu = !openMobileMenu" data-collapse-toggle="navbar-default" type="button"
                    class="mt-5 bg-white inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border rounded-lg  md:flex-row md:space-x-1 md:mt-0 md:border-0">
                    <li>
                        <Link href="/" :class="[currentRoute == '/' ? 'text-primary font-bold' : 'text-white']"
                            data-wow-duration="2s"
                            class="tranform transition hover:scale-125 duration-700 ease-in-out wow animate__lightSpeedInRight block py-2 pl-3 pr-4 text-xl rounded md:bg-transparent"
                            aria-current="page">
                        <i v-if="currentRoute == '/'" class="fas fa-caret-right"></i> Home
                        </Link>
                    </li>
                    <li>
                        <Link href="/commercial-kitchen-services"
                            :class="[currentRoute == '/commercial-kitchen-services' ? 'text-primary font-bold' : 'text-white']"
                            data-wow-duration="2.5s"
                            class="tranform transition hover:scale-125 duration-700 ease-in-out wow animate__lightSpeedInRight block py-2 pl-3 pr-4 text-xl rounded md:bg-transparent"
                            aria-current="page">
                        <i v-if="currentRoute == '/commercial-kitchen-services'" class="fas fa-caret-right"></i> Services
                        </Link>
                    </li>
                    <li>
                        <Link href="/commercial-kitchen-about"
                            :class="[currentRoute == '/commercial-kitchen-about' ? 'text-primary font-bold' : 'text-white']"
                            data-wow-duration="3s"
                            class="tranform transition hover:scale-125 duration-700 ease-in-out wow animate__lightSpeedInRight block py-2 pl-3 pr-4  text-xl rounded md:bg-transparent"
                            aria-current="page">
                        <i v-if="currentRoute == '/commercial-kitchen-about'" class="fas fa-caret-right"></i> Our Story
                        </Link>
                    </li>
                    <li>
                        <Link href="/commercial-kitchen-media"
                            :class="[currentRoute == '/commercial-kitchen-media' ? 'text-primary font-bold' : 'text-white']"
                            data-wow-duration="3.5s"
                            class="tranform transition hover:scale-125 duration-700 ease-in-out wow animate__lightSpeedInRight block py-2 pl-3 pr-4  text-xl rounded md:bg-transparent"
                            aria-current="page">
                        <i v-if="currentRoute == '/commercial-kitchen-media'" class="fas fa-caret-right"></i> Media
                        </Link>
                    </li>
                    <li>
                        <Link href="/commercial-kitchen-contact"
                            :class="[currentRoute == '/commercial-kitchen-contact' ? 'text-primary font-bold' : 'text-white']"
                            class="tranform transition hover:scale-125 duration-700 ease-in-out wow animate__lightSpeedInRight block py-2 pl-3 pr-4 text-xl rounded md:bg-transparent"
                            aria-current="page">
                        <i v-if="currentRoute == '/commercial-kitchen-contact'" class="fas fa-caret-right"></i> Get in Touch
                        </Link>
                    </li>




                </ul>
            </div>

            <div v-if="openMobileMenu" data-wow-duration="2s"
                class="overflow-hidden z-[1000] sm:hidden h-screen w-screen bg-black">

                <div class="grid grid-rows-5 grid-flow-col gap-5 my-20 mx-10">

                    <Link href="/" type="button"
                        :class="[currentRoute == '/' ? 'text-white bg-primary' : 'bg-white text-black']"
                        data-wow-duration="1s"
                        class="wow animate__lightSpeedInLeft text-center font-semibold rounded-md  px-2.5 py-1.5 text-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Home
                    </Link>
                    <Link href="/commercial-kitchen-services" type="button"
                        :class="[currentRoute == '/commercial-kitchen-services' ? 'text-white bg-primary' : 'bg-white text-black']"
                        data-wow-duration="1.3s"
                        class="wow animate__lightSpeedInLeft text-center font-semibold rounded-md  px-2.5 py-1.5 text-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Services
                    </Link>
                    <Link href="/commercial-kitchen-about" type="button"
                        :class="[currentRoute == '/commercial-kitchen-about' ? 'text-white bg-primary' : 'bg-white text-black']"
                        data-wow-duration="1.6s"
                        class="wow animate__lightSpeedInLeft text-center font-semibold rounded-md  px-2.5 py-1.5 text-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Our Story
                    </Link>
                    <Link href="/commercial-kitchen-media" type="button"
                        :class="[currentRoute == '/commercial-kitchen-media' ? 'text-white bg-primary' : 'bg-white text-black']"
                        data-wow-duration="1.9s"
                        class="wow animate__lightSpeedInLeft text-center font-semibold rounded-md  px-2.5 py-1.5 text-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Media
                    </Link>
                    <Link href="/commercial-kitchen-contact" type="button"
                        :class="[currentRoute == '/commercial-kitchen-contact' ? 'text-white bg-primary' : 'bg-white text-black']"
                        data-wow-duration="2.2s"
                        class="wow animate__lightSpeedInLeft text-center font-semibold rounded-md  px-2.5 py-1.5 text-md shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Get in Touch
                    </Link>

                </div>

                <div class="mx-10 mt-10">
                    <div class="grid grid-rows-2 grid-flow-col gap-5">

                        <a href="tel:+254717269050" class="text-white text-md font-semibold">
                            <i class="fas fa-envelope-dot text-primary fa-xl mr-2 mb-4"></i> <br>
                            info@commercialkitchen.co.ke
                        </a>
                        <a href="tel:+254717269050" class="text-white text-md font-semibold">
                            <i class="fas fa-phone-volume text-primary fa-xl mr-2 mb-4"></i> <br>
                            +254 115 511 079
                        </a>
                    </div>

                </div>
            </div>
        </div>
</nav></template>