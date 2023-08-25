<script setup>
import { Head } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';

</script>

<template>
    <Head title="Contact Us" />

    <ClientLayout>
        <div class="bg-white py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 ">
                    <h2 data-wow-duration="1.5s" data-wow-delay="1s" class="wow animate__lightSpeedInLeft text-3xl font-bold tracking-tight text-primary">Get in touch, we are here to help</h2>
                    <p data-wow-duration="1.5s" data-wow-delay="1.5s" class="wow animate__lightSpeedInLeft mt-6 text-lg leading-8 text-black font-medium">Looking to start your food service business?
                        Take the
                        first step by contacting us today. Fill in the form below and let our expert team guide you towards
                        achieving your dreams. Together, we'll bring your vision to life. Get started now!</p>
                </div>

                <div class="mt-12 flex justify-between divide-primary divide-x-4">

                    <a href="tel:+254717269050"
                        data-wow-delay="1.5s"
                        data-wow-duration="1.5s"
                        class="wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-phone flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-5">
                            <div class="">
                                <h1 class="font-bold text-2xl leading-10 text-primary">Phone Number</h1>
                                <h5 class="font-bold leading-10 text-2xl"> +254 717 269 050</h5>
                            </div>
                        </div>
                    </a>

                    <a href="mailto:info@commercialkitchen.co.ke"
                        data-wow-delay="2s"
                        data-wow-duration="1.5s"
                        class="wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-envelope flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-5">
                            <div class="">
                                <h1 class="font-bold text-2xl leading-10 text-primary">Email Address</h1>
                                <h5 class="font-bold leading-10 text-xl"> info@commercialkitchen.co.ke</h5>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.google.com/maps/dir//commodore+suites/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x182f109ec56d4431:0xdee2bf2039412201?sa=X&ved=2ahUKEwibpu2ftPeAAxULLsAKHY8IAK4Q9Rd6BAhSEAA&ved=2ahUKEwibpu2ftPeAAxULLsAKHY8IAK4Q9Rd6BAhiEAM"
                        target="_blank"
                        data-wow-delay="2.5s"
                            data-wow-duration="1.5s"
                            class="wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-map-location-dot flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-5">
                            <div class="">
                                <h1 class="font-bold text-2xl leading-10 text-primary">Physical Address</h1>
                                <h5 class="font-bold leading-10 text-xl"> Kindaruma Rd, Nairobi</h5>
                            </div>
                        </div>
                    </a>

                </div>
            </div>
           
            <div class="relative isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
                
                <div class="mx-auto max-w-7xl">
                    <h2 class="wow animate__rubberBand text-4xl font-bold tracking-tight text-primary">Let’s talk about your project</h2>
                    <p class="mt-2 text-lg leading-8 text-black font-medium">We help companies and individuals build out their dream.</p>
                    <div class="mt-16 flex flex-col gap-16 sm:gap-y-20 lg:flex-row">
                        <form action="#" method="POST" class="lg:flex-auto">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="first-name"
                                        class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                                        name</label>
                                    <div class="mt-2.5">
                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="budget"
                                        class="block text-sm font-semibold leading-6 text-gray-900">Phone Number</label>
                                    <div class="mt-2.5">
                                        <input id="budget" name="budget" type="number"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="website"
                                        class="block text-sm font-semibold leading-6 text-gray-900">Email Address</label>
                                    <div class="mt-2.5">
                                        <input type="url" name="website" id="website"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message"
                                        class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                                    <div class="mt-2.5">
                                        <textarea id="message" name="message" rows="4"
                                            class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button type="submit"
                                    class="group transform transition hover:scale-95 duration-700 ease-out block w-full rounded-md bg-primary hover:bg-black px-3.5 py-2.5 text-center text-sm font-semibold text-black hover:text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let’s
                                    talk <i class="fas fa-message-captions ml-2 hover:text-primary fa-xl"></i> </button>
                            </div>
                        </form>
                        <div class="lg:mt-6 lg:w-80 lg:flex-none">
                            <img data-wow-duration="1.5s" data-wow-delay="0.5s" class="wow animate__lightSpeedInRight h-20 w-auto" src="/android-chrome-192x192.png"
                                alt="">
                            <figure class="mt-10">
                            <blockquote data-wow-duration="1.5s" data-wow-delay="1s" class="wow animate__lightSpeedInRight text-lg font-semibold leading-8 text-gray-900">
                                <p>“Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo expedita voluptas
                                    culpa sapiente alias molestiae. Numquam corrupti in laborum sed rerum et corporis.”
                                </p>
                            </blockquote>
                            <a href="https://linkedin.com/in/lynnkimeto" class="tranform transition hover: mt-10 flex gap-x-6">
                                <img src="https://media.licdn.com/dms/image/C4D03AQGn1tn6Yt-9tw/profile-displayphoto-shrink_400_400/0/1660966861926?e=1698278400&v=beta&t=Ic79gjIeWBpMVS-cSlHGidQ5ag1VWd33wP2HPQi38fo"
                                    alt="" data-wow-duration="1.5s" data-wow-delay="1s" class="wow animate__lightSpeedInRight h-20 w-20 flex-none rounded-full bg-gray-50">
                                <div>
                                    <div data-wow-duration="1.5s" data-wow-delay="2s"  class="wow animate__lightSpeedInRight text-base font-semibold text-gray-900">Lynn Kimeto</div>
                                    <div data-wow-duration="1.5s" data-wow-delay="2.5s" class="wow animate__lightSpeedInRight text-sm leading-6 text-gray-600 font-medium">Managing Director</div>
                                </div>
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

    </div>

</ClientLayout></template>