<script setup>
import { computed } from 'vue';

const currentYear = computed(() => {
    const currentDate = new Date();
    return currentDate.getFullYear();
})
</script>

<template>
    <div>

        <footer class="bg-black" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <img class="h-20 w-18" src="/img/logo.jpg" alt="Commercial Kitchen">
                    <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                        <div class="md:grid md:grid-cols-2 md:gap-8">

                        </div>
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="text-sm font-semibold leading-6 text-primary">Quick Links</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Services</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Products</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Contact Us</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> About Us</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-10 md:mt-0">
                                <h3 class="text-sm font-semibold leading-6 text-primary">Helper Links</h3>
                                <ul role="list" class="mt-6 space-y-4">
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Blogs</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Gallery</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Careers</a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-sm leading-6 text-white hover:text-primary"><i class="mr-2 fas fa-caret-right"></i> Policies</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mt-16 border-t border-white/10 pt-8 sm:mt-20 lg:mt-24 lg:flex lg:items-center lg:justify-between">
                    <div>
                        <h3 class="text-sm font-semibold leading-6 text-primary">Subscribe to our newsletter</h3>
                        <p class="mt-2 text-sm leading-6 text-white">The latest news, articles, and resources, sent to
                            your inbox weekly.</p>
                    </div>
                    <form class="mt-6 sm:flex sm:max-w-md lg:mt-0">
                        <label for="email-address" class="sr-only">Email address</label>
                        <input type="email" name="email-address" id="email-address" autocomplete="email" required
                            class="w-full min-w-0 appearance-none rounded-md border-0 bg-white/5 px-3 py-1.5 text-base font-medium text-white shadow-sm ring-1 ring-inset ring-white placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-primary sm:w-56 sm:text-sm sm:leading-6"
                            placeholder="Enter your email">
                        <div class="mt-4 sm:ml-4 sm:mt-0 sm:flex-shrink-0">
                            <button type="submit"
                                class="flex w-full items-center justify-center rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-primary hover:bg-primary hover:text-black hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Subscribe</button>
                        </div>
                    </form>
                </div>
                <div class="mt-8 border-t border-white/10 pt-8 md:flex md:items-center md:justify-between">
                    <div class="flex space-x-6 md:order-2">

                        <div class="flex gap-16 mt-2">
                            <a href="https://www.instagram.com/commercialkitchensconsultants/" target="_blank">
                                <img src="/img/fb.svg" alt="" class="h-8 w-8">
                            </a>
                            <a href="https://www.instagram.com/commercialkitchensconsultants/" target="_blank">
                                <img src="/img/ig.svg" alt="" class="h-8 w-8">
                            </a>
                            <a href="https://www.instagram.com/commercialkitchensconsultants/" target="_blank">
                                <img src="/img/linkedin.svg" alt="" class="h-8 w-8">
                            </a>
                        </div>
                    </div>
                    <p class="mt-8 text-xs leading-5 text-white md:order-1 md:mt-0">&copy; {{ currentYear }} Commercial
                        Kitchen Equipment
                    </p>
                    <p class="mt-8 text-xs leading-5 text-white md:order-1 md:mt-0">Designed by <a
                            href="https://www.linkedin.com/in/michaelsaiba/" target="_blank"
                            class="text-primary underline">Michael Saiba</a> </p>
                </div>
            </div>
        </footer>

    </div>
</template>