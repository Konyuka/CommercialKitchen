<script setup>
// import mericanBlogs from "@/JsonBlogs/mericanblogs.json";
import { router } from "@inertiajs/vue3";
import { ref, computed } from "vue";

const emit = defineEmits([
    'close'
]);

const props = defineProps({
    modalType: String
});


const websiteName = ref(null);
const websiteLink = ref(null);
const websiteFile = ref(null);
const blogsData = ref([]);
const foundBlogs = ref(null)
const processingBlogs = ref(false);

const numberOfImports = computed(()=>{
    return foundBlogs.value?.length
})

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

const saveLinkedBlogs = () => {
    for (let index = 0; index < foundBlogs.value.length; index++) {
        const element = foundBlogs.value[index];
        const dataObject = {
            title: element.title.rendered,
            excerpt: element.excerpt.rendered.replace(/<[^>]+>/g, ''),
            content: element.content.rendered,
            link: element.link,
        }
        blogsData.value.push(dataObject);
    }
    scrapBlogs()
}

const scrapBlogs = () => {
    if (websiteName.value != null) {
        router.post(route('imported.blogs'), {
            data: blogsData.value,
            websiteName: websiteName.value,
        },
            {
                onSuccess: () => {
                    emit('close');
                }
            });
    } else {
        alert('Populate everything my friend...😏')
    }

}

const linkBlogs = async (pages) => {
    processingBlogs.value = true;
    const baseUrl = websiteLink.value+'/wp-json/wp/v2/posts';
    let currentPage = 1;
    let allPosts = [];

    while (true) {
        const url = `${baseUrl}?page=${currentPage}`;
        foundBlogs.value = allPosts;
        const response = await fetch(url);
        if (response.ok) {
            const posts = await response.json();
            if (posts.length === 0) {
                // If no more posts are returned, you've reached the end of pagination
                break;
            } else {
                // Add the posts from the current page to the overall result
                allPosts = allPosts.concat(posts);
                currentPage++;
            }
        } else if (response.status === 404) {
            // Handle a 404 Not Found response for a non-existent page
            console.warn(`Page ${currentPage} does not exist. Stopping pagination.`);
            processingBlogs.value = false;
            break;
        } else {
            processingBlogs.value = false;
            throw new Error(`Error fetching page ${currentPage}: ${response.statusText}`);
        }
    }

    // Process allPosts as needed
    console.log(allPosts);
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
                                    Wordpress Site Posts
                                </h3>
                                <div class="mt-5">

                                    <div class="text-left mb-3">
                                        <label for="email" class="block text-sm font-bold leading-6 text-black">Website
                                            Name</label>
                                        <div class="mt-2">
                                            <input v-model="websiteName" type="text" name="site" id="site"
                                                class="font-semibold block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                                placeholder="" aria-describedby="email-description">
                                        </div>
                                    </div>

                                    <div v-if="modalType=='link'" class="text-left mb-3">
                                        <label for="email" class="block text-sm font-bold leading-6 text-black">Website
                                            Link</label>
                                        <div class="mt-2">
                                            <input v-model="websiteLink" type="text" name="site" id="site"
                                                class="font-semibold block w-full rounded-md border-0 py-5 text-black shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                                placeholder="" aria-describedby="email-description">
                                        </div>
                                    </div>

                                    <div v-if="modalType == 'file'" class="space-y-12">
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
                            <button v-if="modalType == 'file'" @click="scrapBlogs()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                We deserve their blogs
                            </button>
                            <button v-if="modalType == 'link' && foundBlogs == null" @click="linkBlogs()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                Let's Link Up 
                            </button>
                            <button v-if="modalType == 'link' && foundBlogs != null" @click="saveLinkedBlogs()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                <span class="mr-1" v-if="processingBlogs">Processing</span> <span class="mr-1" v-if="!processingBlogs">Save</span> Blogs <span class="text-sm ml-2"><i class="fas fa-caret-right"></i> {{ numberOfImports }}</span> 
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