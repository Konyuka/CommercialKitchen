<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import ImportLeadsModal from '@/Components/Admin/ImportLeadsModal.vue';
import ConvoSlide from '@/Components/Admin/ConvoSlide.vue';
import { onMounted, ref } from "vue";
import axios from "axios";

onMounted(() => {
    getLeads()
});

const leadModal = ref(false);
const showConvos = ref(true);
const leads = ref([]);

const statuses =
    [
        { id: 0, name: 'Unrated' },
        { id: 1, name: 'Negotiations' },
        { id: 2, name: 'Willing' },
        { id: 3, name: 'Almost' },
        { id: 4, name: 'Ready' },
        { id: 5, name: 'We are on' }
    ]

const getLeads = () => {
    axios.get('/api/get-leads')
        .then((res) => {
            leads.value = res.data;
        })
        .catch((err) => {
            console.log(err);
        })
}

const closeLeadModal = () => {
    leadModal.value = false;
    getLeads();
}

const formatPhoneNumber = (number) => {
    const phoneNumber = number.substring(2);
    let formattedPhoneNumber = phoneNumber.substr(0, 4) + ' ' + phoneNumber.substr(4, 3) + ' ' + phoneNumber.substr(7, 3) + ' ' + phoneNumber.substr(10, 3);
    return formattedPhoneNumber;
}

const closeConvoSlide = () => {
    showConvos.value = false;
}




</script>

<template>
    <AdminLayout>
        <div>

            <div class="px-4 sm:px-6 lg:px-8">
                <div class="sm:flex sm:items-center">
                    <div class="sm:flex-auto">
                        <h1 class="text-base font-bold leading-6 text-gray-900">Leads</h1>
                        <p class="mt-2 text-sm text-black font-semibold">Upload FB Leads</p>
                        <button v-if="leads.length" type="button"
                            class="mt-2 block rounded-md bg-black hover:bg-primary px-2 py-1 text-center text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            <i class="fa-solid fa-arrow-up-9-1 mr-2"></i>
                            Refine Table Data
                        </button>
                    </div>
                    <div class="mt-4 sm:ml-16 sm:mt-0 flex gap-3">

                        <button @click="leadModal = true" type="button"
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
                                            Phone</th>
                                        <th scope="col" class="px-4 py-3.5 text-left text-sm font-semibold text-gray-900">
                                            Email</th>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-0">
                                            Probability</th>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-0">
                                            Timelines</th>
                                        <th scope="col"
                                            class="py-3.5 pl-4 pr-4 text-left text-sm font-semibold text-gray-900 sm:pr-0">
                                            Conversation</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 bg-white">
                                    <tr v-for="(lead, index) in leads" class="divide-x divide-gray-200">
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-4 text-sm font-medium text-gray-900 sm:pl-0">
                                            {{ lead.full_name }}
                                        </td>
                                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                            {{ formatPhoneNumber(lead.phone_number) }}
                                        </td>
                                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                            {{ lead.email }}
                                        </td>
                                        <td
                                            class="text-center whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-0">

                                            <div class="px-5">
                                                <select id="location" name="location"
                                                    class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-5 text-black ring-1 ring-inset ring-black focus:ring-2 focus:ring-primary text-xs">
                                                    <option v-for="(status, index) in statuses" :key="index"
                                                        :value="status.id">{{ status.name }}</option>
                                                </select>
                                            </div>

                                        </td>
                                        <td class="whitespace-nowrap p-4 text-sm text-gray-500">
                                            {{ lead.how_soon }}
                                        </td>
                                        <td
                                            class="text-center whitespace-nowrap py-4 pl-4 pr-4 text-sm text-gray-500 sm:pr-0">
                                            <i  @click="showConvos=true"
                                                class="fa-solid fa-messages text-black hover:text-primary fa-xl transform transition hover:scale-125 duration-700 ease-in-out hover:cursor-pointer"></i>
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
            <ImportLeadsModal v-if="leadModal" @close="closeLeadModal" />
            
            <!-- slide-over -->
            <ConvoSlide v-if="showConvos" @close="closeConvoSlide" />

        </div>

    </AdminLayout>
</template>