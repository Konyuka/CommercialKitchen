<script setup>
import AdminLayout from '@/Layouts/AdminLayout.vue';
import BlogList from '@/Components/Admin/BlogList.vue';
import CreateBlog from '@/Components/Admin/CreateBlog.vue';
import { ref } from "vue";

const defaultView = ref(1);

const createPage = ()=>{
    defaultView.value = 2;
}

</script>

<template>
    <AdminLayout>
        <BlogList v-show="defaultView==1" @createBlog="createPage" />
        <CreateBlog v-show="defaultView == 2" />
    </AdminLayout>
</template>