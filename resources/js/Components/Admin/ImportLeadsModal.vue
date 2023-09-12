<script setup>
import { router } from "@inertiajs/vue3";
import axios from "axios"
import { ref } from "vue";

const emit = defineProps([
    'close'
])

const excelFile = ref(null);

const uploadData = (event) => {
    let formData = new FormData();
    formData.append('file', event.target.files[0]);

};

const letsLead = () => {

    router.post(route('import.leads'), excelFile.value, {
        onSuccess: () => {
            alert('done')
        }
    });


    // axios.post(route('import-lead-file'), excelFile)
    //     .then(response => {
    //         console.log(response.data.message);
    //     })
    //     .catch(error => {
    //         console.log(error);
    //     });
}



</script>

<template>
    <div>
        <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                        <div>
                            <div class="mt-2 text-center sm:mt-5">

                                <div class="mt-3">

                                    <div class="space-y-12">
                                        <div class="border-b border-gray-900/10 pb-12">

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="col-span-full">
                                                    <label for="cover-photo"
                                                        class="block text-sm font-semibold leading-6 text-black">
                                                        Upload Lead File
                                                    </label>
                                                    <div
                                                        class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                                        <div class="text-center">
                                                            <i></i>
                                                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                                                <label for="file-upload"
                                                                    class="relative cursor-pointer rounded-md bg-white font-semibold text-primary-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-primary-200 focus-within:ring-offset-2 hover:text-primary-200">
                                                                    <!-- <span>Upload a file</span> -->
                                                                    <input @change="uploadData" id="file-upload"
                                                                        name="file-upload" type="file"
                                                                        class="item-center ring-1 ring-primary">
                                                                </label>
                                                                <!-- <p class="pl-1">or drag and drop</p> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <button @click="letsLead()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                Lead thy way...
                            </button>
                            <button @click="$emit('close')" type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-black hover:text-white shadow-sm ring-1 ring-inset ring-black hover:bg-black sm:col-start-1 sm:mt-0">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>