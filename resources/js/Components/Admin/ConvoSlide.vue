<script setup>

const emit = defineEmits([
    'close'
])
</script>

<template>
    <div>

        <div class="relative z-10" aria-labelledby="slide-over-title" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0"></div>

            <div class="fixed inset-0 overflow-hidden">
                <div class="absolute inset-0 overflow-hidden">
                    <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10 sm:pl-16">

                        <div class="pointer-events-auto w-screen max-w-2xl">
                            <form class=" flex h-full flex-col overflow-y-hidden bg-black shadow-xl">
                                <div class="flex-1">
                                    <!-- Header -->
                                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                        <div class="flex items-start justify-between space-x-3">
                                            <div class="space-y-1">
                                                <h2 class="text-base font-semibold leading-6 text-white"
                                                    id="slide-over-title">Lead Conversation</h2>
                                                <p class="text-sm text-white">This is were you log your conversation with
                                                    client. Not on an excel file</p>
                                            </div>
                                            <div class="flex h-7 items-center">
                                                <button @click="$emit('close')" type="button"
                                                    class="relative text-white hover:text-white">
                                                    <span class="absolute -inset-2.5"></span>
                                                    <span class="sr-only">Close panel</span>
                                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                        stroke="currentColor" aria-hidden="true">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Divider container -->
                                    <div class="space-y-6 py-6 sm:space-y-0 sm:divide-y sm:divide-gray-200 sm:py-0">


                                        <!-- Project description -->
                                        <div
                                            class="space-y-2 px-4 sm:grid sm:grid-cols-4 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-5">
                                            <div>
                                                <label for="project-description"
                                                    class="block text-sm font-medium leading-6 text-white sm:mt-1.5">New
                                                    notes</label>
                                            </div>
                                            <div class="relative sm:col-span-3">
                                                <textarea id="project-description" name="project-description" rows="3"
                                                    class="block w-full border-0 py-1.5 text-black font-semibold italic shadow-sm ring-1 ring-inset ring-black placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>

                                            </div>

                                        </div>

                                        <!-- Project name -->
                                        <div
                                            class="relative space-y-2 px-4 sm:grid sm:grid-cols-2 sm:gap-4 sm:space-y-0 sm:px-6 sm:py-2">
                                            <div>
                                                <label for="project-name"
                                                    class="block text-sm font-medium leading-6 text-white sm:mt-1.5">
                                                    Next Call Date
                                                </label>
                                                <input type="text" name="project-name" id="project-name"
                                                    class="mt-2 block w-full  border-0 py-1.5 text-white shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            </div>
                                            <div>
                                                <button type="button"
                                                    class="absolute right-7 mt-9 rounded bg-white px-3 py-2 text-sm font-semibold text-black shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">
                                                    Log Lead Conversation
                                                </button>
                                            </div>
                                        </div>

                                        <div class="bg-white ">
                                            <div
                                                class="mx-auto max-w-7xl divide-y divide-gray-900/10 px-6 py-6">
                                                <h2 class="text-xl font-bold leading-10 tracking-tight text-gray-900">
                                                    Previous Notes</h2>
                                                <dl class="min-h- overflow-y-scroll  mt-10 space-y-8 divide-y divide-gray-900/10">
                                                    <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                                                        <dt
                                                            class="text-base font-semibold leading-7 text-gray-900 lg:col-span-5">
                                                            What&#039;s the best thing about Switzerland?</dt>
                                                        <dd class="mt-4 lg:col-span-7 lg:mt-0">
                                                            <p class="text-base leading-7 text-gray-600">I don&#039;t know,
                                                                but the flag is a big plus. Lorem ipsum dolor sit amet
                                                                consectetur adipisicing elit. Quas cupiditate laboriosam
                                                                fugiat.</p>
                                                        </dd>
                                                    </div>

                                                    <!-- More questions... -->
                                                </dl>
                                            </div>
                                        </div>


                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
            </div>
        </div>
    </div>

</div></template>