<script setup>
// import mericanBlogs from "@/JsonBlogs/mericanblogs.json";
import { router } from "@inertiajs/vue3";
import { ref } from "vue";

const emit = defineEmits([
    'close'
]);


const websiteName = ref(null); 
const websiteFile = ref(null);
const blogsData = ref([]);

const uploadData = (e) => {
    const jsonFile = e.target.files[0];
    websiteFile.value = jsonFile;
    const reader = new FileReader();
    reader.onload = () => {
        const jsonData = JSON.parse(reader.result);
        for (let index = 0; index < jsonData.length; index++) { 
            const element = jsonData[index];
            const dataObject = {
                title: element.title.rendered,
                excerpt: element.excerpt.rendered,
                content: element.content.rendered,
                link: element.link,
            }
            blogsData.value.push(dataObject);
        }
    };
    reader.readAsText(jsonFile);
};

const scrapBlogs = () => {
    if(websiteName.value != null && websiteFile.value != null){
        router.post(route('imported.blogs'), {
            data: blogsData.value,
            websiteName: websiteName.value, 
        },
        {
            onSuccess: () => {
                    emit('close');
                }
        });
    }else{
        alert('Populate everything my friend...😏')
    }

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
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">
                                    Add wordpress site details
                                </h3>
                                <div class="mt-5">

                                    <div class="text-left mb-3">
                                        <label for="email" class="block text-sm font-semibold leading-6 text-black">Website
                                            Name</label>
                                        <div class="mt-2">
                                            <input v-model="websiteName" type="text" name="site" id="site"
                                                class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                                placeholder="kitchens kenya" aria-describedby="email-description">
                                        </div>
                                    </div>

                                    <div class="space-y-12">
                                        <div class="border-b border-gray-900/10 pb-12">

                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                                                <div class="col-span-full">
                                                    <label for="cover-photo"
                                                        class="block text-sm font-semibold leading-6 text-black">
                                                        Upload JSON file
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
                                                                        name="file-upload" type="file" class="item-center ring-1 ring-primary">
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
                            <button @click="scrapBlogs()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                We deserve their blogs
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