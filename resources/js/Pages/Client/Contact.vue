<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import ClientLayout from '@/Layouts/ClientLayout.vue';

const form = useForm({
    fname: null,
    lname: null,
    number: null,
    email: null,
    message: null,
})

const submitForm = () => {
    form.post(route('submit-contact-form'), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            form.reset();
        }
    })
}


</script>

<template>
    <Head title="Commercial Kitchen Appliances" />

    <ClientLayout>
        <div class="bg-white py-10 sm:py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0 ">
                    <h2 data-wow-duration="1.5s" data-wow-delay="1s"
                        class="wow animate__lightSpeedInLeft text-4xl font-bold tracking-tight text-primary">Get in touch,
                        we are here to help</h2>
                    <p data-wow-duration="1.5s" data-wow-delay="1.5s"
                        class="wow animate__lightSpeedInLeft mt-6 text-lg leading-8 text-black font-medium">
                        Looking to start
                        your food service business?
                        Take the
                        first step by contacting us today.</p>
                </div>

                <div class="mt-12  sm:flex sm:justify-between ">

                    <a href="tel:+254717269050" data-wow-delay="1.5s" data-wow-duration="1.5s"
                        class="mb-5 wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-phone flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-1 sm:ml-5">
                            <div class="">
                                <h1 class="font-bold text-xl sm:text-2xl leading-10 text-primary">Phone Number</h1>
                                <h5 class="font-bold  leading-10  sm:text-2xl"> +254 115 511 079</h5>
                            </div>
                        </div>
                    </a>

                    <a href="mailto:info@commercialkitchen.co.ke" data-wow-delay="2s" data-wow-duration="1.5s"
                        class="mb-5 wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-envelope flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-1 sm:ml-5">
                            <div class="">
                                <h1 class="font-bold text-xl sm:text-2xl leading-10 text-primary">Email Address</h1>
                                <h5 class=" font-bold  leading-10  text-sm sm:text-xl"> info@commercialkitchen.co.ke</h5>
                            </div>
                        </div>
                    </a>

                    <a href="https://www.google.com/maps/dir//commodore+suites/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x182f109ec56d4431:0xdee2bf2039412201?sa=X&ved=2ahUKEwibpu2ftPeAAxULLsAKHY8IAK4Q9Rd6BAhSEAA&ved=2ahUKEwibpu2ftPeAAxULLsAKHY8IAK4Q9Rd6BAhiEAM"
                        target="_blank" data-wow-delay="2.5s" data-wow-duration="1.5s"
                        class="mb-5 wow animate__backInUp group transform transition hover:scale-95 duration-700 ease-out hover:cursor-pointer flex">
                        <div class="h-20 w-20 bg-white rounded group-hover:bg-primary">
                            <i
                                class="fas fa-map-location-dot flex w-full h-full justify-center items-center fa-2xl text-black group-hover:text-white"></i>
                        </div>

                        <div class="ml-1 sm:ml-5">
                            <div class="">
                                <h1 class="font-bold text-xl sm:text-2xl leading-10 text-primary">Physical Address</h1>
                                <h5 class="font-bold  leading-10  sm:text-xl"> Kindaruma Rd, Nairobi</h5>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="bg-white py-10 sm:py-20 mt-10">
                <div class="mx-auto max-w-7xl px-6 lg:px-8">
                    <div class="mx-auto  lg:mx-0 text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900 text-primary">Founder's
                            Perspective</h2>
                        <p class="text-left text-black font-medium mt-6 text-md leading-6 sm:leading-8 text-gray-600">
                            <i class="fa-solid fa-quote-left mr-1 text-primary"></i>
                            I am proud to lead a team of dedicated professionals who are passionate about helping our
                            clients succeed in the food service industry. Our journey began with a simple but powerful idea:
                            to provide expert guidance and support in setting up commercial kitchens that truly reflect our
                            clients' visions.

                            Over the years, we've grown, learned, and adapted to the ever-changing landscape of this
                            industry. Today, our commitment to expertise, integrity, and client satisfaction remains
                            unwavering. We understand that the success of your food service establishment relies on the
                            functionality and efficiency of your kitchen, and we are here to ensure you achieve just that.

                            Our values define who we are and how we work. We prioritize your needs, uphold the highest
                            ethical standards, and strive for excellence in everything we do. With a focus on quality,
                            reliability, and innovation, we aim to redefine culinary spaces and make a difference in your
                            journey.

                            Thank you for considering us as your trusted partner. We look forward to being a part of your
                            success story.
                            <i class="fa-solid fa-quote-right ml-1 text-primary"></i>
                        </p>
                    </div>

                    <div class="mt-10 sm:mt-0 flex w-full h-full justify-center item-center ">
                        <div>
                            <!-- <img class="mx-auto h-24 w-24 rounded-full object-cover" src="/img/lynn.jpg" alt=""> -->
                            <!-- <h3 class="mt-6 text-base font-semibold leading-7 tracking-tight text-gray-900">Lynn Kimeto
                            </h3> -->
                            <!-- <p class="text-sm text-center leading-6 text-gray-600">Founder</p> -->
                        </div>
                        <div class="ml-6 mt-6">
                            <!-- <div data-wow-duration="1.5s" data-wow-delay="2s"
                                class="wow animate__lightSpeedInRight text-base font-bold text-gray-900">
                                Lynn Kimeto</div> -->
                            <!-- <div data-wow-duration="1.5s" data-wow-delay="2.5s"
                                class="wow animate__lightSpeedInRight text-sm leading-6 text-gray-600 font-medium">
                                Founder</div> -->
                        </div>
                    </div>

                </div>
            </div>


            <div class="relative isolate bg-white px-6  lg:px-8">

                <div class="mx-auto max-w-7xl">
                    <div>
                        <div>
                            <h2 class="wow animate__rubberBand text-3xl font-bold tracking-tight text-primary">Let’s talk
                                about your
                                next project</h2>
                            <p class="mt-2 text-lg leading-8 text-black font-medium">Fill in the form and one of our agents
                                will get
                                in touch. </p>
                        </div>
                    </div>
                    <div class="mt-10 sm:mt-16 flex flex-col gap-20 sm:gap-y-20 lg:flex-row">
                        <div  class="lg:flex-auto">
                            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                                <div>
                                    <label for="first-name"
                                        class="block text-sm font-semibold leading-6 text-gray-900">First name</label>
                                    <div class="mt-2.5">
                                        <input v-model="form.fname" type="text" name="first-name" id="first-name" autocomplete="given-name"
                                            class="font-semibold block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                                        name</label>
                                    <div class="mt-2.5">
                                        <input v-model="form.lname" type="text" name="last-name" id="last-name" autocomplete="family-name"
                                            class="font-semibold block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                                <div>
                                    <label for="budget" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                                        Number</label>
                                    <div class="mt-2.5">
                                        <input  v-model="form.number" id="budget" name="budget" type="number"
                                            class="font-semibold block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                    <p v-if="form.errors.number" class="text-black mt-5 text-xs"><i
                                        class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                                    {{ form.errors.number }}</p>
                                </div>
                                <div>
                                    <label for="website" class="block text-sm font-semibold leading-6 text-gray-900">Email
                                        Address</label>
                                    <div class="mt-2.5">
                                        <input v-model="form.email" type="email" name="website" id="website"
                                            class="font-semibold block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6">
                                    </div>
                                    <p v-if="form.errors.email" class="text-black mt-5 text-xs"><i
                                        class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                                    {{ form.errors.email }}</p>
                                </div>
                                <div class="sm:col-span-2">
                                    <label for="message"
                                        class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                                    <div class="mt-2.5">
                                        <textarea v-model="form.message" id="message" name="message" rows="4"
                                            class="font-semibold block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-10">
                                <button @click.prevent="submitForm" type="submit"
                                    class="group transform transition hover:scale-95 duration-700 ease-out block w-full rounded-md bg-primary hover:bg-black px-3.5 py-2.5 text-center text-sm font-semibold text-black hover:text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let’s
                                    talk <i class="fas fa-message-captions ml-2 hover:text-primary fa-xl"></i> </button>
                            </div>
                        </div>
                        <div class="lg:mt-6 lg:w-96  lg:flex-none">

                            <img class="float-left transform translate-x-20 scale-150 aspect-[3/2] w-[220px] h-full right-0 rounded-2xl object-fit"
                                src="/img/net.svg" alt="">

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </ClientLayout>
</template>