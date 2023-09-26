<script setup>
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css'
import { useForm } from "@inertiajs/vue3";
import { computed } from 'vue';
import moment from "moment";

const props = defineProps({
    leadData: Object
})

const parsedMessage = computed(()=>{
    return JSON.parse(props.leadData.notes);
});

const emit = defineEmits([
    'close'
])

const convo = useForm({
    notes:{
        message:null,
        logged_at: Date.now()
    },
    call_date:null,
})

const submitConvo = () => {
    convo.post(route('save.convo', props.leadData.id), {
        onSuccess: () => {
            emit('close')
        }
    });
}

const formatDate = (date) => {
    return moment(date).format("llll");
}



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
                            <form class=" flex h-full flex-col overflow-y-auto bg-black shadow-xl">
                                <div class="flex-1">
                                    <!-- Header -->
                                    <div class="bg-gray-50 px-4 py-6 sm:px-6">
                                        <div class="flex items-start justify-between space-x-3">
                                            <div class="space-y-1">
                                                <h2 class="text-base font-semibold leading-6 text-white"
                                                    id="slide-over-title">Lead Conversation</h2>
                                                <p class="text-sm text-white">This is were you log your conversation with
                                                    client.</p>
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
                                                <textarea v-model="convo.notes.message" id="project-description" name="project-description" rows="3"
                                                    class="block w-full border-0 py-1.5 text-black font-semibold italic shadow-sm ring-1 ring-inset ring-black placeholder:text-white focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>

                                            </div>

                                        </div>

                                        <!-- Project name -->
                                        <div
                                            class="space-y-2 px-4 sm:grid sm:grid-cols-4 sm:gap-4 sm:space-y-0 sm:px-6 sm:pb-5">
                                            <div>

                                            </div>
                                            <div class="sm:col-span-3">
                                                <label for="project-name"
                                                    class="mb-2 block text-sm font-medium leading-6 text-white sm:mt-1.5">
                                                    Next Call Date
                                                </label>

                                                <VueDatePicker v-model="convo.call_date" ></VueDatePicker>
                                                <div>
                                                    <button @click="submitConvo()" type="button"
                                                        class=" right-7 mt-9 rounded bg-white px-3 py-2 text-sm font-semibold text-black shadow-sm ring-1 ring-inset ring-black hover:bg-primary">
                                                        Save Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="bg-white h-full overflow-y-scroll">
                                            <div
                                                class="mx-auto max-w-7xl divide-y divide-gray-900/10 px-6 py-6">
                                                <h2 class="text-xl font-bold leading-10 tracking-tight text-gray-900">
                                                    Previous Notes</h2>

                                                <dl v-if="leadData.notes != null" class="space-y-2 divide-y divide-gray-900/10">

                                                    <div v-for="message in parsedMessage " class="pt-2 lg:grid lg:grid-cols-12 lg:gap-4">
                                                        <dt
                                                            class="text-sm font-semibold leading-7 text-gray-900 lg:col-span-5">
                                                            {{ formatDate(message?.logged_at) }}
                                                        </dt>
                                                        <dd class="mt-4 lg:col-span-7 lg:mt-0">
                                                            <p class="text-xs leading-7 text-black">
                                                                {{ message?.message }}
                                                            </p>
                                                        </dd>
                                                    </div>

                                                </dl>

                                                <div v-else class="h-full w-full flex justify-around">
                                                    <P class="my-28 font-semibold">There are no notes for this lead</P>
                                                </div>


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