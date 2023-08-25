<script setup>
import Navigation from "@/Components/Client/Navigation.vue";
import Footer from "@/Components/Client/Footer.vue";
import { onMounted } from 'vue';
import WOW from 'wow.js';


onMounted(()=>{
    new WOW().init();
})


</script>

<template>
<Navigation />
<slot />

<Footer />

</template>

<style>

</style>