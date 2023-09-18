<script setup>
import { onMounted, ref } from "vue";
import CreateBlog from '@/Components/Admin/CreateBlog.vue';
import ImportBlogModal from '@/Components/Admin/ImportBlogModal.vue';
import { router } from "@inertiajs/vue3";
import axios from "axios";

onMounted(() => {
    getImportedBlogs();
});

const addBlogFeedModal = ref(false);
const defaultView = ref(1);
const importedBlogs = ref([]);
const blogToEdit = ref(null);

const closeBlogModal = () => {
    addBlogFeedModal.value = false;
    getImportedBlogs();
}

const getImportedBlogs = () => {
    axios.get(route('get.imported.blogs'))
        .then((res) => {
            importedBlogs.value = res.data;
        })
        .catch((err) => {
            console.log(err)
        })
}

const listPage = () => {
    defaultView.value = 1;
    getImportedBlogs();
}

const editBlog = (blog) => {
    blogToEdit.value = blog;
    defaultView.value = 2;
}


</script>

<template>
    <div>

        <!-- Main Component -->
        <div v-show="defaultView == 1" class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold leading-6 text-gray-900">Import Blogs</h1>
                </div>
                <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                    <button @click="addBlogFeedModal = true" type="button"
                        class="block rounded-md bg-black px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <i class="fas fa-add fa-xl"></i> Add new blog feed
                    </button>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                        Status
                                    </th>
                                    <th scope="col"
                                        class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                        Website Name
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Website Title
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        Blog Link
                                    </th>
                                    <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                                <tr v-for="blog in importedBlogs">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                        <span
                                            v-if="blog.published"
                                            class="inline-flex items-center gap-x-1.5 rounded-md px-2 py-1 text-xs font-medium text-black ring-1 ring-inset ring-black">
                                            <svg class="h-1.5 w-1.5 fill-primary" viewBox="0 0 6 6" aria-hidden="true">
                                                <circle cx="3" cy="3" r="3" />
                                            </svg>
                                            Posted
                                        </span>
                                    </td>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                        {{ blog.website }}
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ blog.title }}
                                    </td>
                                    <td class="text-center whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <a :href="blog.link" target="_blank">
                                            <i class="fa-sharp fa-solid fa-square-arrow-up-right fa-xl"></i>
                                        </a>
                                    </td>
                                    <td
                                        class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-0">
                                        <button @click="editBlog(blog)"
                                            class="transform transition hover:scale-125 duration-600 ease-in-out text-black font-bold hover:text-indigo-900">
                                            <i class="fas fa-edit fa-xl"></i> Edit Me
                                        </button>
                                    </td>
                                </tr>

                                <!-- More people... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <ImportBlogModal v-if="addBlogFeedModal" @close="closeBlogModal" />
        <CreateBlog :uploadedPost="true" :blogToEdit="blogToEdit" v-show="defaultView == 2" @listBlogs="listPage()" />


    </div>
</template>