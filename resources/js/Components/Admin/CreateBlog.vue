<script setup>
import { QuillEditor } from '@vueup/vue-quill'
import '@vueup/vue-quill/dist/vue-quill.snow.css';
import ImageUploader from 'quill-image-uploader';
import axios from 'axios';
import { useForm, router } from "@inertiajs/vue3";
import { ref } from "vue";


const blog = useForm({
    title: null,
    category: null,
    excerpt: null,
    cover: null,
    content: null,
})

const uploadedImage = ref(null);
const imagePreview = ref(null);
const showPreview = ref(false);

const modules = {
    name: 'imageUploader',
    module: ImageUploader,
    options: {
        placeholder: 'I believe you are creative enough to fill this space with content...',
        upload: file => {
            return new Promise((resolve, reject) => {
                const formData = new FormData();
                formData.append("image", file);

                axios.post('/upload-image', formData)
                    .then(res => {
                        console.log(res)
                        resolve(res.data.url);
                    })
                    .catch(err => {
                        reject("Upload failed");
                        console.error("Error:", err)
                    })
            })
        }
    }
}

const updateContent = (content) => {
    blog.content = content;
    console.log(content)
}

const postBlog = () => {

    router.post('/post-blog', blog, {
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
                            class="font-semibold block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-black placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-primary sm:text-sm sm:leading-6"
                            placeholder="Commercial Kitchen Tables">
                    </div>
                </div>

                <div>
                    <div>
                        <div class="flex justify-between">
                            <label for="location" class="block text-sm font-bold leading-6 text-gray-900">Category</label>
                            <button type="button"
                                class="rounded bg-black px-2 py-1 text-xs font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                Add Category
                            </button>
                        </div>
                        <select v-model="blog.category" id="location" name="location"
                            class="font-semibold mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                            <option selected value="'General'">General</option>
                            <option value="Table">Tables</option>
                            <option value="Kitchen">Kitchen</option>
                            <option value="Food">Food</option>
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
                    </div>
                </div>

            </div>

            <div class="my-10">
                <img :src="imagePreview" class="min-h-[500px] max-h-[500px]  w-full object-cover rounded-lg" v-show="showPreview" />
            </div>

            <div class="mt-10 h-60">
                <QuillEditor v-model="blog.content"  :modules="modules" toolbar="full" theme="snow" />
            </div>


            <div class="mt-20">
                <button @click="postBlog" type="button"
                    class="rounded-md bg-black hover:bg-primary px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Publish blog <i class="fas fa-check"></i>
                </button>
            </div>



        </div>

    </div>
</template>