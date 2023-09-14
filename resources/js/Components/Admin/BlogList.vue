<script setup>
import { onMounted, ref } from "vue";
import { router } from "@inertiajs/vue3";
import axios from "axios";
import moment from "moment";

const props = defineProps({
    blogs: Array
})

const blogToDelete = ref(null)
const deleteModal = ref(false)

const emits = defineEmits([ 
    'createBlog',
    'publishBlog',
    'featureBlog',
    'editBlog',
    'getBlogs',
    'importBlogs'
]);


const publishClass = (blogStatus) => {
    if (blogStatus == 1) {
        return true;
    } else {
        return false;
    }
}

const featureClass = (blogStatus) => {
    if (blogStatus == 1) {
        return true;
    } else {
        return false;
    }
}

const formatDate = (date) => {
    return moment(date).format("MMM Do YY, h:mm a");
}

const deleteBlog = (blog) => {
    blogToDelete.value = blog;
    deleteModal.value = true;
}

const confirmDelete = () => {
    // console.log(blogToDelete.id)
    router.delete(route('delete.blog', blogToDelete.value.id), {
        onSuccess: () => {
            emits('getBlogs')
            deleteModal.value = false;
        }
    });
}


</script>

<template>
    <div>
        <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
            <h3 class="text-2xl font-semibold leading-6 text-gray-900">Blog List</h3>
            <div class="mt-3 sm:ml-4 sm:mt-0 gap-5 flex">
                <button @click="$emit('createBlog')" type="button"
                    class="inline-flex items-center rounded-md bg-black hover:bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <i class="fas fa-add fa-xl mr-2 text-white"></i> Create Blog
                </button>

                <button @click="$emit('importBlogs')" type="button"
                    class=" inline-flex items-center rounded-md bg-black hover:bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <i class="fa-solid fa-cloud-arrow-up fa-xl mr-2 text-white"></i>
                    Import Blogs
                </button>
            </div>
        </div>

        <div class="px-4 sm:px-6 lg:px-8">
            <div class="-mx-4 mt-8 flow-root sm:mx-0">
                <table class="min-w-full">
                    <colgroup>
                        <col class="w-full sm:w-1/2">
                        <col class="sm:w-1/6">
                        <col class="sm:w-1/6">
                        <col class="sm:w-1/6">
                    </colgroup>
                    <thead class="border-b border-gray-300 text-gray-900">
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                Blog Details</th>
                            <th scope="col"
                                class="hidden px-1 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">
                                Published</th>
                            <th scope="col"
                                class="hidden px-1 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">
                                Featured</th>
                            <th scope="col"
                                class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">Date
                                Posted
                            </th>
                            <th scope="col" class="py-3.5 pl-3 pr-4 text-right text-sm font-semibold text-gray-900 sm:pr-0">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="(blog, index) in blogs" :key="blog.id" class="border-b border-gray-200">
                            <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                                <div class="font-semibold text-gray-900">{{ blog.title }}</div>
                                <div class="mt-1 truncate text-gray-500">{{ blog.excerpt }}</div>
                            </td>
                            <td class="hidden px-1 py-5 text-right text-sm text-gray-500 sm:table-cell">
                                <button @click="$emit('publishBlog', blog.id)" type="button"
                                    :class="[publishClass(blog.published) ? 'bg-primary' : 'bg-black']"
                                    class=" relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2"
                                    role="switch" aria-checked="false">
                                    <span aria-hidden="true"
                                        :class="[publishClass(blog.published) ? 'translate-x-5' : 'translate-x-0']"
                                        class="pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                </button>
                            </td>
                            <td class="hidden px-1 py-5 text-right text-sm text-gray-500 sm:table-cell">
                                <button @click="$emit('featureBlog', blog.id)" type="button"
                                    :class="[featureClass(blog.featured) ? 'bg-primary' : 'bg-black']"
                                    class="bg-black relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2"
                                    role="switch" aria-checked="false">
                                    <span aria-hidden="true"
                                        :class="[featureClass(blog.featured) ? 'translate-x-5' : 'translate-x-0']"
                                        class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                </button>

                            </td>
                            <td class="hidden font-medium px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">{{
                                formatDate(blog.created_at) }}</td>
                            <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">
                                <div>
                                    <i @click="$emit('editBlog', blog)"
                                        class="transform transtion hover:scale-125 duration-600 hover:cursor-pointer ease-in-out fas fa-edit text-black fa-xl hover:text-primary mr-2"></i>
                                    <i @click="deleteBlog(blog)"
                                        class="transform transtion hover:scale-125 duration-600 hover:cursor-pointer ease-in-out fas fa-trash text-black fa-xl hover:text-primary"></i>
                                </div>
                            </td>
                        </tr>

                        <!-- More projects... -->
                    </tbody>

                </table>
            </div>
        </div>


        <!-- Modals -->
        <div v-if="deleteModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
            <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                <i class="fa-solid fa-trash-can-clock fa-2x text-primary"></i>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-sm font-medium leading-6 text-gray-900" id="modal-title">
                                    Are you sure you want to delete this blog?
                                </h3>
                                <div class="mt-2">
                                    <p class="text-md text-black font-semibold">
                                        {{ blogToDelete.title }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <button @click="confirmDelete()" type="button"
                                class="inline-flex w-full justify-center rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 sm:col-start-2">
                                Confirm
                            </button>
                            <button @click="deleteModal = !deleteModal" type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-black hover:text-white shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-black sm:col-start-1 sm:mt-0">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</template>