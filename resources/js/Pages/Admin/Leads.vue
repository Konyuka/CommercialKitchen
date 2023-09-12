<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import ImportLeadsModal from '@/Components/Admin/ImportLeadsModal.vue';
import { ref } from "vue";

const leadModal = ref(false);



</script>

<template>
    <AdminLayout>
        <div>

            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-bold leading-6 text-gray-900">Leads</h1>
                        <p class="mt-2 text-sm text-black font-semibold">Upload Facebook Leads</p>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                        <button @click="leadModal=true" type="button"
                            class="block rounded-md bg-black hover:bg-primary px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <i class="fa-solid fa-file-arrow-up mr-2 "></i>
                            Upload Leads
                        </button>
                    </div>
                </div>
                <div class="mt-8 flow-root">
                    <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead>
                                    <tr class="divide-x divide-gray-200">
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                            Name</th>
                                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Title</th>
                                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Email</th>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-0">
                                            Role</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr class="divide-x divide-gray-200">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-0">
                                            Lindsay Walton</td>
                                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">Front-end Developer</td>
                                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">lindsay.walton@example.com
                                        </td>
                                        <td class="whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-0">Member
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
            <ImportLeadsModal v-if="leadModal" @close="leadModal=false" />

        </div>

    </AdminLayout>
</template>