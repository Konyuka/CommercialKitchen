<script setup>
const emits = defineEmits([
    'createBlog'
]);
</script>

<template>
    <div>
        <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
            <h3 class="text-2xl font-semibold leading-6 text-gray-900">Blog List</h3>
            <div class="mt-3 sm:ml-4 sm:mt-0">
                <button @click="$emit('createBlog')" type="button"
                    class="inline-flex items-center rounded-md bg-black hover:bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Create Blog
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
                                class="hidden px-3 py-3.5 text-right text-sm font-semibold text-gray-900 sm:table-cell">
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
                        <tr class="border-b border-gray-200">
                            <td class="max-w-0 py-5 pl-4 pr-3 text-sm sm:pl-0">
                                <div class="font-semibold text-gray-900">Logo redesign</div>
                                <div class="mt-1 truncate text-gray-500">New logo and digital asset playbook.</div>
                            </td>
                            <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">
                                <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                                <button type="button"
                                    class="bg-black relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2"
                                    role="switch" aria-checked="false">
                                    <span class="sr-only">Use setting</span>
                                    <!-- Enabled: "translate-x-5", Not Enabled: "translate-x-0" -->
                                    <span aria-hidden="true"
                                        class="translate-x-0 pointer-events-none inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out"></span>
                                </button>

                            </td>
                            <td class="hidden px-3 py-5 text-right text-sm text-gray-500 sm:table-cell">28th July 11:30 hrs</td>
                            <td class="py-5 pl-3 pr-4 text-right text-sm text-gray-500 sm:pr-0">
                                <div>
                                    <i class="fas fa-edit text-black fa-xl hover:text-primary mr-5"></i>
                                    <i class="fas fa-trash text-black fa-xl hover:text-primary"></i>
                                </div>
                            </td>
                        </tr>

                        <!-- More projects... -->
                    </tbody>

                </table>
            </div>
        </div>


</div></template>