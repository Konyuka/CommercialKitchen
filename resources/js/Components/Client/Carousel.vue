<script setup>

</script>

<template>
    <div>


        <div id="controls-carousel" class="relative w-full" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-96 overflow-hidden md:h-[600px]">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="img/concept.jpg"
                        class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                    <div class="absolute z-10 flex flex-col items-center justify-center h-full w-full">
                        <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>

                        <h2 class="text-5xl font-bold text-white z-20 mb-10">From Concept to Completion</h2>
                        <p class="text-lg text-white z-20 px-96 text-center mb-10 leading-8">
                            Transform your food service vision into reality with our
                            expert
                            consultancy
                            services. We provide
                            comprehensive guidance and support, ensuring a seamless transition from concept to a
                            remarkable
                            culinary space.</p>

                        <button type="button"
                            data-wow-delay="6s"
                            class="wow animate__rubberBand z-20 mt-5 border-2 border-primary hover:bg-primary hover:text-black px-5 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Learn More <i class="ml-2 fas fa-up-right"></i>
                        </button>
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="img/design.jpg"
                        class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="img/equipment.jpg"
                        class="object-cover absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                        alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                data-wow-duration="2s"
                data-wow-delay="3s"
                class="wow animate__lightSpeedInLeft absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-primary dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <i class="fas fa-angle-left fa-2xl text-white"></i>
                    <span class="sr-only">Previous</span>
                </span>
            </button>

            <button type="button"
                data-wow-duration="2s"
                data-wow-delay="2s"
                class="wow animate__lightSpeedInRight absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-14 h-14 rounded-full bg-primary dark:bg-gray-800/30 group-hover:bg-black dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <i class="fas fa-angle-right fa-2xl text-white"></i>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
</template>
