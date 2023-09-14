<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import BlogList from '@/Components/Admin/BlogList.vue';
import CreateBlog from '@/Components/Admin/CreateBlog.vue';
import ImportBlogs from '@/Components/Admin/ImportBlogs.vue';
import { ref, onMounted, watch } from "vue";
import axios from 'axios';
import { router } from '@inertiajs/vue3';


onMounted(() => {
    getBlogs();
})

const defaultView = ref(1);
const blogs = ref([]);
const blogToEdit = ref(null);
watch(blogToEdit, (newX) => {
    if(newX){
        defaultView.value = 2 
    }
})

const importBlogs = () => {
    defaultView.value = 3;
}
const createPage = () => {
    blogToEdit.value = null
    defaultView.value = 2;
}
const listPage = () => {
    defaultView.value = 1;
    getBlogs();
}

const publishBlog = (blog) => {
    
    axios.post(route('publish.blog', blog))
    .then((res)=>{
        getBlogs();
    })
}

const featureBlog = (blog) => {
    axios.post(route('feature.blog', blog))
    .then((res)=>{
        getBlogs();
    })
}

const editBlog = (blog) => { 
    blogToEdit.value = blog
}



const getBlogs = () => {
    axios.get('/api/get-blogs')
        .then((res) => {
            blogs.value = res.data;
        })
        .catch((err) => {
            console.log(err);
        })
}
</script>

<template>
    <AdminLayout>
        <BlogList :blogs="blogs" v-show="defaultView == 1" @createBlog="createPage" @importBlogs="importBlogs" @publishBlog="publishBlog" @featureBlog="featureBlog" @editBlog="editBlog" @getBlogs="getBlogs" />
        <CreateBlog :blogToEdit="blogToEdit" v-show="defaultView == 2" @listBlogs="listPage" />
        <ImportBlogs  v-show="defaultView == 3" />
    </AdminLayout>
</template>