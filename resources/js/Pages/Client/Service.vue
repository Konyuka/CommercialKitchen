<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';
import Service from '@/Components/Client/Services.vue';

</script>

<template>
    <Head title="Services" />
    <ClientLayout>
        <Service />
    </ClientLayout>
</template>