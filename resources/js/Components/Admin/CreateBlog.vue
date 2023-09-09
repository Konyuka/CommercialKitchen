<script setup>
import { QuillEditor, Quill } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import "@vueup/vue-quill/dist/vue-quill.bubble.css";
import ImageUploader from "quill-image-uploader";
import axios from 'axios';
import { useForm, router } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";



const blog = useForm({
    title: null,
    category: null,
    excerpt: null,
    cover: null,
    content: null,
})

const category = useForm({
    name: null
})

const uploadedImage = ref(null);
const imagePreview = ref(null);
const showPreview = ref(false);
const categoryModal = ref(false);
const categoryList = ref([]);

const modules = {
    name: "imageUploader",
    module: ImageUploader,
    options: {
        upload: (file) => {
            return new Promise((resolve, reject) => {
                const formData = new FormData();
                formData.append("image", file);

                axios
                    .post("/upload-image", formData)
                    .then((res) => {
                        console.log(res);
                        resolve(res.data.url);
                    })
                    .catch((err) => {
                        reject("Upload failed");
                        console.error("Error:", err);
                    });
            });
        },
    },
};

const saveCategory = () => {
    category.post(route('add.category'), {
        preserveScroll: true,
        preserveState: true,
        onSuccess: () => {
            getCategories();
            category.reset();
        }
    })
}

const pop = ({ quill, html, text }) => {
    // console.log(blog.content);
};

const postBlog = () => {
    blog.post('/store-blog', {
        forceFormData: true,
        preserveState: true,
        onSuccess: () => {
            alert('hi');
        }
    });

    // await axios.post('/formSubmit', blog.cover, config)
    //     .then(function (response) {
    //         currentObj.success = response.data.success;
    //     })
    //     .catch(function (error) {
    //         currentObj.output = error;
    //     });

}

const uploadImage = (e) => {
    const image = e.target.files[0];
    uploadedImage.value = image.name
    imagePreview.value = URL.createObjectURL(image);
    showPreview.value = true;
    blog.cover = image;
}

const getCategories = () => {
    axios.get('/api/get-categories')
        .then((res) => {
            categoryList.value = res.data;
        })
        .catch((err) => {
            console.log(err);
        })
}


onMounted(() => {
    getCategories()
});

</script>

<template>
    <div>

        <div class="border-b border-gray-200 pb-5 sm:flex sm:items-center sm:justify-between">
            <div class="flex justify-between w-full">
                <div>
                    <h3 class="text-2xl font-semibold leading-6 text-gray-900">Create new blog</h3>
                </div>
                <div>
                    <button type="button"
                        class="rounded bg-black hover:bg-primary px-2 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        <i class="fas fa-arrow-left fa-xl mr-2 text-white"></i> Blog List
                    </button>
                </div>

            </div>
        </div>

        <div class="my-10">

            <div class="grid grid-cols-3 gap-5">

                <div class="col-span-2">
                    <label for="email" class="block text-sm font-bold leading-6 text-black">Blog Title</label>
                    <div class="mt-2">
                        <input v-model="blog.title" type="text" name="email" id="email"
                            class="capitalize font-semibold block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                            placeholder="Commercial Kitchen Tables">
                        <div>
                        <p v-if="blog.errors.title" class="text-black mt-5 text-xs"><i
                                class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                            {{ blog.errors.title }}</p>
                    </div>    
                    </div>
                </div>

                <div>
                    <div>
                        <div class="flex justify-between">
                            <label for="location" class="block text-sm font-bold leading-6 text-gray-900">Category</label>
                            <button @click="categoryModal = true" type="button"
                                class="rounded bg-black px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add Category
                            </button>
                        </div>
                        <select v-model="blog.category" id="location" name="location"
                            class="font-semibold mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-black focus:ring-2 focus:ring-primary sm:text-sm sm:leading-6">
                            <option v-for="category in categoryList" :value="parseInt(category.id)">{{ category.name }}</option>
                        </select>
                    </div>

                </div>

            </div>

            <div class="grid grid-cols-3 gap-5 mt-10">

                <div class="col-span-2">
                    <label for="comment" class="block text-sm font-bold leading-6 text-gray-900">
                        Add blog excerpt
                    </label>
                    <div class="mt-2">
                        <textarea v-model="blog.excerpt" rows="4" name="comment" id="comment"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"></textarea>
                            <div>
                        <p v-if="blog.errors.excerpt" class="text-black mt-5 text-xs"><i
                                class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                            {{ blog.errors.excerpt }}</p>
                    </div>
                    </div>
                </div>

                <div>
                    <div class="col-span-full">
                        <div class="flex justify-between">
                            <label for="cover-photo" class="block text-sm font-bold leading-6 text-gray-900">
                                Cover
                            </label>
                            <label for="cover-photo" class="block text-sm font-semibold leading-6 text-green">
                                {{ uploadedImage }}
                            </label>
                        </div>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-2">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                    <label for="file-upload"
                                        class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                        <span>Upload a file</span>
                                        <input @change="uploadImage" id="file-upload" name="file-upload" type="file"
                                            class="focus-ring-primary sr-only">
                                    </label>
                                    <p class="pl-1">or drag and drop</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p v-if="blog.errors.cover" class="text-black mt-5 text-xs"><i
                                    class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                                {{ blog.errors.cover }}</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="my-10">
                <img :src="imagePreview" class="min-h-[500px] max-h-[500px]  w-full object-cover rounded-lg"
                    v-show="showPreview" />
            </div>

            <div class="mt-10 h-screen">
                <QuillEditor @textChange="pop" v-model:content="blog.content" :modules="modules" toolbar="full" theme="snow"
                    contentType="html" />
                <div>
                    <p v-if="blog.errors.content" class="text-black mt-5 text-xs"><i
                            class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                        {{ blog.errors.content }}</p>
                </div>
            </div>


            <div class="mt-40">
                <button @click="postBlog" type="button"
                    class="rounded-md bg-black hover:bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Publish blog <i class="fas fa-check"></i>
                </button>
            </div>



        </div>

        <div v-show="categoryModal" class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">

            <div class="fixed inset-0 bg-black bg-opacity-75 transition-opacity"></div>

            <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">

                    <div
                        class="relative transform overflow-hidden rounded-lg bg-white px-4 pb-4 pt-5 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6">
                        <div>
                            <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-green-100">
                                <i class="fas fa-list text-primary fa-2x my-5"></i>
                            </div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Enter category
                                    name</h3>
                                <div class="m-10">

                                    <div>
                                        <label for="email" class="sr-only">Email</label>
                                        <input v-model="category.name" type="text" name="text" id="text"
                                            class="py-2 capitalize text-center font-bold block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                                            placeholder="Stainless Steel">
                                        <div>
                                            <p v-if="category.errors.name" class="text-black mt-5 text-xs"><i
                                                    class="fa-regular fa-circle-exclamation fa-xl mr-2 text-primary font-semibold"></i>
                                                {{ category.errors.name }}</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3">
                            <button @click="saveCategory" type="button"
                                class="inline-flex w-full justify-center rounded-md hover:bg-primary bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black sm:col-start-2">
                                Save
                            </button>
                            <button @click="categoryModal = false" type="button"
                                class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 hover:text-white shadow-sm ring-1 ring-inset ring-black hover:bg-black sm:col-start-1 sm:mt-0">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</template>