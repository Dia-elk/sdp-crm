<template>
    <Head title="Order"/>
   <AdminLayout>
       Order {{order.id}}
   </AdminLayout>
</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    order :Object,
})
</script>
