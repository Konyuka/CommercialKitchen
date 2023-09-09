<template>
    <QuillEditor :modules="modules" v-model:content="content" toolbar="full" theme="snow" contentType="html"
        @textChange="pop" />
    <!-- <QuillEditor
    :modules="module1"
    v-model:content="content1"
    :toolbar="[
      ['bold', 'italic', 'underline', 'strike'],
      ['link', 'image', 'video'],
      [{ list: 'ordered' }, { list: 'bullet' }],
      ['clean'],
    ]"
    theme="snow"
    contentType="html"
    @textChange="pop"
  >
    <template #toolbar>
      <div id="my-toolbar">
        <button class="ql-bold">test</button>
      </div>
    </template>
  </QuillEditor> -->
    <!-- <button @click="pop" >pop</button> -->
</template>

<script setup>
import axios from "axios";
import { reactive, ref } from "vue";
import { QuillEditor, Quill } from "@vueup/vue-quill";
import "@vueup/vue-quill/dist/vue-quill.snow.css";
import "@vueup/vue-quill/dist/vue-quill.bubble.css";
import ImageUploader from "quill-image-uploader";
import QuillBetterTable from "quill-better-table";

Quill.register(
    {
        "modules/better-table": QuillBetterTable,
    },
    true
);

const content1 = ref(null);
const content = ref("test");
const module1 = {
    // table: false,
    name: "imageUploader",
    module: {
        ImageUploader,
        // table: false, // disable table module
        // "better-table": {
        //   operationMenu: {
        //     items: {
        //       unmergeCells: {
        //         text: "Another unmerge cells name",
        //       },
        //     },
        //   },
        // },
    },
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
const pop = ({ quill, html, text }) => {
    // console.log(event);
    console.log(content.value);
    console.log(content1.value);
};
</script>
<style>
h2 {
    color: aqua;
}
</style>