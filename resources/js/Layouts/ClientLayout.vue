<script setup>
import Navigation from "@/Components/Client/Navigation.vue";
import Footer from "@/Components/Client/Footer.vue";
import { onMounted, ref, watch, computed } from 'vue';
import WOW from 'wow.js';
import { usePage } from "@inertiajs/vue3";


const page = usePage();
const message = computed(() => {
    return page.props.message;
})

const launchToaster = ref(false)
const scrollTopButton = ref(false)

watch(message, (newX) => {
    if (newX) {
        launchToaster.value = true
    }
})

window.onscroll = function () {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        scrollTopButton.value = true;
    } else {
        scrollTopButton.value = false;
    }
}

const scrollToTop = () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}




onMounted(() => {
    new WOW().init();
});
</script>

<template>
    <Transition enter-active-class="transform ease-out duration-400 transition"
        enter-from-class="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        enter-to-class="translate-y-0 opacity-100 sm:translate-x-0" leave-from-class="opacity-100"
        leave-to-class="opacity-0" leave-active-class="transition ease-in duration-100">
        <div v-if="launchToaster" aria-live="assertive"
            class="z-[1000] pointer-events-none fixed inset-0 flex items-end px-4 py-6 sm:items-start sm:p-6">
            <div class="flex w-full flex-col items-center space-y-4 sm:items-end">

                <div
                    class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-black shadow-lg ring-1 ring-black ring-opacity-5">
                    <div class="p-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <svg class="h-6 w-6 text-primary" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div class="ml-3 w-0 flex-1 pt-0.5">
                                <p class="text-sm font-medium text-white">{{ message }}</p>
                            </div>
                            <div class="ml-4 flex flex-shrink-0">
                                <button @click="launchToaster = false" type="button"
                                    class="inline-flex rounded-md bg-black text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    <span class="sr-only">Close</span>
                                    <svg class="h-5 w-5 text-primary" viewBox="0 0 20 20" fill="currentColor"
                                        aria-hidden="true">
                                        <path
                                            d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </Transition>



    <Navigation />

    <slot />

    <Footer />

    <button @click="scrollToTop" v-show="scrollTopButton" type="button" data-te-ripple-init data-te-ripple-color="light"
        class="tranform transition hover:scale-125 duration-700 ease-in-out !fixed bottom-5 right-3 rounded-full bg-primary p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
        id="btn-back-to-top">
        <svg aria-hidden="true" focusable="false" data-prefix="fas" class="h-4 w-4" role="img"
            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
            <path fill="currentColor"
                d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z">
            </path>
        </svg>
    </button>
</template>

<style></style>