<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';
import Service from '@/Components/Client/Services.vue';
import { ref, computed } from "vue";

const props = defineProps({
    blog: Object,
})

const blogUrl = computed(() => {
    const title = props.blog.title;
    const slug = title.toLowerCase().replace(/[^a-z0-9]+/g, '-');
    const trimmedSlug = slug.replace(/^-+|-+$/g, '');
    const finalSlug = trimmedSlug.replace(/-{2,}/g, '-');
    return 'https://commercialkitchen.co.ke/commercial-kitchen-blog/' + finalSlug;
});

const blogImage = computed(() => {
    const imagePath = props.blog.cover;
    const escapedImage = imagePath.replace(/\\\//g, '/');
    return 'https://commercialkitchen.co.ke/commercial-kitchen-blog/' + escapedImage;
})



</script>

<template>
    <!-- Linkedin -->
    <meta property="og:article:author" content="https://www.linkedin.com/in/lynnkimeto/">
    <meta property="og:article:published_time" :content="blog.created_at">
    <meta property="og:article:section" :content="blog.excerpt">
    <meta property="og:article:tag" :content="blog.title">
    <meta property="company:id" content="Your LinkedIn Company Page ID">

    <!-- Facebook Open Graph (OG) Tags -->
    <meta property="og:type" content="website">
    <meta property="og:title" :content="blog.title">
    <meta property="og:description" :content="blog.excerpt">
    <meta property="og:url" :content="blogUrl">
    <meta property="og:image" :content="blogImage">
    <meta property="og:image:width" content="1080px">
    <meta property="og:image:height" content="1350px">

    

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image"> <!-- Choose an appropriate card type -->

    <!-- Twitter Site and Creator -->
    <meta name="twitter:site" content="@commercialkitchensconsultants"> <!-- Your site's Twitter handle -->
    <meta name="twitter:creator" content="@commercialkitchensconsultants"> <!-- Content creator's Twitter handle -->

    <!-- Twitter Title, Description, and Image -->
    <meta name="twitter:title" :content="blog.title">
    <meta name="twitter:description" :content="blog.excerpt">
    <meta name="twitter:image" :content="blogImage">
    <meta name="twitter:image:alt" content="https://commercialkitchen.co.ke/img/logo.jpg">

    <Head title="Commercial Kitchen Consultancy Kenya Article" />
    <ClientLayout>
        <div>

            <div class="bg-white">
                <div aria-hidden="true" class="relative">
                    <img :src="blog.cover" alt="" class="h-96 w-full object-cover object-center">
                    <div class="absolute inset-0 bg-gradient-to-t from-white"></div>
                </div>

                <div class="relative mx-auto -mt-12 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
                    <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                        <p class="font-semibold mb-4 text-2xl">{{ blog.categories.name }}</p>
                        <h2 data-wow-duration="1.5"
                            class="wow animate__rubberBand text-3xl font-bold tracking-tight text-primary sm:text-4xl">
                            {{ blog.title }}
                        </h2>
                    </div>

                </div>
            </div>


            <div class="bg-white mb-20">
                <div class="mx-auto max-w-5xl px-4 py-2 sm:px-6 sm:py-2 lg:max-w-7xl lg:px-8">

                    <div class="bg-white px-6 lg:px-8">
                        <div class="mx-auto max-w-5xl text-base leading-7 text-gray-700">
                            <div class="mt-2 max-w-5xl" v-html="blog.content">

                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="bg-white py-10 mb-20">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0">
                        <h2 class="text-primary text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Related blogs
                        </h2>
                    </div>
                    <div
                        class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                        <article class="flex max-w-xl flex-col items-start justify-between">
                            <div class="flex items-center gap-x-4 text-xs">
                                <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                                <a href="#"
                                    class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Tables</a>
                            </div>
                            <div class="group relative">
                                <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Stainless Steel Tables
                                    </a>
                                </h3>
                                <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">
                                    When it comes to stainless steel work tables & prep tables, the options are practically
                                    endless. With thousands of variations available, you can customize them to fit your
                                    kitchen's exact requirements. These tables can come with additional features like back
                                    or side panels, extra shelves, drawers, racks, caster wheels. Create functional,
                                    top-notch, and long-lasting spaces for food prep and storage with our diverse collection
                                    of commercial kitchen tables. Our tables are designed to make your life easier in the
                                    kitchen. They're not only practical, but they also offer high quality and durability,
                                    ensuring they can withstand the demands of a bustling kitchen. Easy to clean, they
                                    maintain maximum hygiene standards, which is essential in any culinary environment. From
                                    different sizes to various features, you can choose the perfect table that suits your
                                    specific venture.
                                </p>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>





        </div>
    </ClientLayout>
</template>