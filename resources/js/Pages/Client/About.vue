<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';
import { Carousel, Slide } from 'vue3-carousel';
import 'vue3-carousel/dist/carousel.css';
import { ref } from 'vue';

const settings = ref({
    itemsToShow: 1,
    snapAlign: 'center',
},)

const breakpoints = ref({
    // 700px and up
    700: {
        itemsToShow: 3.5,
        snapAlign: 'center',
    },
    // 1024 and up
    1024: {
        itemsToShow: 4,
        snapAlign: 'start',
    },
},)

const clients = ref([
    {
        name: 'Mpesa Foundation',
        image: '/img/mpesa.png'
    },
    {
        name: 'Acacia Residence',
        image: '/img/ac.jpg'
    },
    {
        name: 'Nostro Pizza',
        image: '/img/nostro.jpg'
    },
    {
        name: 'Icon Gardens',
        image: '/img/icon.jpg'
    },
    {
        name: 'Dohn Bistro',
        image: '/img/db.jpg'
    },
    {
        name: 'Golden Stool',
        image: '/img/golden.svg'
    },
    {
        name: 'Adrian Kenya',
        image: '/img/adrian.jfif'
    },
    {
        name: 'Nandi\'s Kitchen',
        image: '/img/nandi.jpg'
    },
    {
        name: 'Saffron Grill',
        image: '/img/safron.png'
    },
    {
        name: 'Limpopo Suites',
        image: '/img/limp.png'
    },
    {
        name: 'Tangaza University',
        image: '/img/tang.png'
    },
])


</script>

<template>
    <ClientLayout>

        <Head title="Our Story" />

        <div class="bg-white">

            <main class="relative isolate">
                <!-- Background -->
                <div class="absolute inset-x-0 top-4 -z-10 flex transform-gpu justify-center overflow-hidden blur-3xl"
                    aria-hidden="true">
                    <div class="aspect-[1108/632] w-[69.25rem] flex-none bg-gradient-to-r from-[#000] to-primary opacity-25"
                        style="clip-path: polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
                    </div>
                </div>

                <!-- Header section -->
                <div class="px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl pt-10 sm:pt-20 text-center">
                        <h2 class="wow animate__rubberBand text-4xl font-bold tracking-tight text-primary sm:text-6xl">Who
                            We
                            Are</h2>
                        <!-- <h6 class="mt-6 text-lg leading-8 text-white font-bold">
                            Commercial Kitchen Consultants
                        </h6> -->
                    </div>
                </div>

                <!-- Content section -->
                <div class="mx-auto mt-10 sm:mt-20 max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl lg:mx-0 lg:max-w-none">
                        <div
                            class="grid max-w-xl grid-cols-1 gap-8 text-sm sm:text-base leading-6 sm:leading-10 text-black font-semibold lg:max-w-none lg:grid-cols-1">
                            <div data-wow-duration="1.5s" data-wow-delay="2s" class="wow animate__lightSpeedInLeft">
                                <p> We are a team of passionate professionals who share a common vision: to revolutionize
                                    the commercial kitchen experience. Our journey began with a collective drive to address
                                    the challenges faced by clients when setting up their dream culinary spaces. <br> <br>
                                    Drawing
                                    from our diverse backgrounds in the hospitality industry, we recognized that many
                                    clients, especially first-time purchasers, lacked the knowledge and guidance required to
                                    navigate the complexities of commercial kitchen design and equipment selection. We were
                                    determined to make a difference. <br> <br>
                                </p>

                                <p>
                                    Together, we formed Commercial Kitchens Consultants with a singular mission: to empower
                                    our clients and ensure a seamless journey in creating their ideal commercial kitchens.
                                    We believe that no client should endure the frustration of unmet timelines or fall prey
                                    to suppliers who prioritize their own interests. <br> <br>

                                    Our team is committed to providing expert guidance and support throughout every step of
                                    the process.
                                    From designing innovative kitchen layouts to selecting the perfect equipment from
                                    trusted suppliers, we
                                    leverage our industry expertise and rigorous supplier qualification process to ensure
                                    that our clients
                                    make informed decisions that align with their needs and budgets.

                                    <br><br>

                                    With a meticulous approach to procurement and project management, we orchestrate the
                                    entire
                                    process, sparing our clients the stress of constant supervision. Our goal is to deliver
                                    on time and exceed
                                    expectations, leaving our clients with a kitchen that is fully functional, aesthetically
                                    pleasing, and
                                    optimized for productivity.


                                    <br> <br> Join us on this exciting
                                    journey as we
                                    redefine culinary spaces and elevate the dining experience for your guests. Together,
                                    let's create exceptional culinary spaces that inspire, captivate, and drive success.

                                    <br><br>

                                    Welcome to Commercial Kitchens Consultants, where we elevate culinary spaces, together.
                                </p>

                            </div>

                        </div>
                        <dl
                            class="mt-16 grid grid-cols-1 gap-x-8 gap-y-5 sm:mt-20 sm:grid-cols-2 sm:gap-y-16 lg:mt-28 lg:grid-cols-4">
                            <div data-wow-duration="1.5s" data-wow-delay=""
                                class="wow animate__backInUp flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
                                <dt class="text-base leading-7 text-black font-bold">Business was founded</dt>
                                <dd class="text-3xl font-semibold tracking-tight text-primary">2021</dd>
                            </div>
                            <div data-wow-duration="1.5s" data-wow-delay="0.5"
                                class="wow animate__backInUp flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
                                <dt class="text-base leading-7 text-black font-bold">People on the team</dt>
                                <dd class="text-3xl font-semibold tracking-tight text-primary">7+</dd>
                            </div>

                            <div data-wow-duration="1.5s" data-wow-delay="1.5s"
                                class="wow animate__backInUp flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
                                <dt class="text-base leading-7 text-black font-bold">Projects completed</dt>
                                <dd class="text-3xl font-semibold tracking-tight text-primary">20+</dd>
                            </div>
                            <div data-wow-duration="1.5s" data-wow-delay="1s"
                                class="wow animate__backInUp flex flex-col-reverse gap-y-3 border-l border-white/20 pl-6">
                                <dt class="text-base leading-7 text-black font-bold">Happy clients</dt>
                                <dd class="text-3xl font-semibold tracking-tight text-primary">18+</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Image section -->
                <div class="mx-2 rounded-lg mt-16 sm:mt-40 xl:mx-auto xl:max-w-7xl xl:px-8">
                    <img src="/img/fist.jpg" alt="" class="aspect-[9/9] sm:aspect-[9/4] w-full object-cover xl:rounded-3xl">
                </div>

                <!-- Values section -->
                <div class="mx-auto mt-16 max-w-7xl px-6 sm:mt-40 lg:px-8">
                    <div class="mx-auto max-w-7xl lg:mx-0 text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-primary sm:text-4xl">Our values</h2>
                        <p class="mt-6 text-md sm:text-lg leading-6 sm:leading-8 text-black font-semibold text-center sm:px-28">At Commercial
                            Kitchens Consultants, our
                            values guide
                            our every action, decision, and interaction. They are the foundation upon which we build trust,
                            deliver excellence, and achieve success for our clients.
                        </p>
                    </div>

                    <dl
                        class="sm:mx-auto mt-16 grid max-w-2xl grid-cols-1 gap-10 text-base leading-7 text-gray-300 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:gap-x-16">
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-sharp fa-light fa-user-chef fa-2x mb-5"></i>
                                Expertise <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">We are committed to staying at the forefront
                                of the commercial
                                kitchen
                                industry, continuously expanding our knowledge and expertise to provide the best solutions
                                for our clients.</dd>
                        </div>
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-regular fa-gavel fa-2x mb-5"></i>
                                Integrity <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">
                                We uphold the highest ethical standards, ensuring transparency, honesty, and fairness in all
                                our dealings.
                            </dd>
                        </div>
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-sharp fa-solid fa-user-tie fa-2x mb-5"></i>
                                Client-Centric <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">
                                Our clients are at the heart of everything we do. We listen, understand, and prioritize
                                their unique needs to deliver tailored solutions.
                            </dd>
                        </div>
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-sharp fa-regular fa-business-time fa-2x mb-5"></i>
                                Reliability <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">We are unwavering in our commitment to
                                meeting deadlines,
                                delivering on
                                promises, and providing dependable services.</dd>
                        </div>
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-sharp fa-solid fa-thumbs-up fa-2x mb-5"></i>
                                Quality <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">We hold ourselves to the highest standards
                                of quality, ensuring
                                that every
                                project we undertake reflects our dedication to excellence.</dd>
                        </div>
                        <div class="relative sm:pl-9">
                            <dt class="inline font-semibold text-primary">
                                <i class="fa-solid fa-gears fa-2x mb-5"></i>
                                Innovation <br>
                            </dt>
                            <dd class="text-sm sm:text-md inline font-semibold">We embrace innovation and creativity to find
                                unique solutions
                                that drive
                                efficiency and exceed expectations.</dd>
                        </div>
                    </dl>
                </div>

                <!-- Team section -->
                <div class="mx-auto mt-32 max-w-7xl px-6 sm:mt-40 lg:px-8">
                    <div class="mx-auto max-w-7xl lg:mx-0 text-center mb-10">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Our Clients</h2>
                        <p class="mt-6 text-lg leading-8 text-black font-bold">Who we've worked with</p>
                    </div>

                    <div>

                        <Carousel :autoplay="2000" :wrap-around="true" v-bind="settings" :breakpoints="breakpoints">
                            <Slide v-for="(client, index) in clients" :key="index">
                                <li class="mr-5">
                                    <img class="carousel__item aspect-[14/13] w-full rounded-2xl object-cover"
                                        :src="client.image" alt="">
                                    <h3 class="mb-20 mt-6 text-lg font-semibold leading-8 tracking-tight text-white">
                                        {{ client.name }}
                                    </h3>
                                </li>
                            </Slide>
                        </Carousel>
                    </div>

                </div>

            </main>

        <div></div>
    </div>

</ClientLayout></template>