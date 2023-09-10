<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';
import Carousel from '@/Components/Client/Carousel.vue';
import Choose from '@/Components/Client/Choose.vue';
import Who from '@/Components/Client/Who.vue';
import Process from '@/Components/Client/Process.vue';
import Testimonial from '@/Components/Client/Testimonial.vue';


defineProps({
    // canLogin: Boolean,
});
</script>

<template>
    <Head title="Karibu Sana" />

    <ClientLayout>
        <Carousel />
        <Who />
        <Choose />
        <Process />
        <Testimonial />
    </ClientLayout>
</template>

<style>

</style>
