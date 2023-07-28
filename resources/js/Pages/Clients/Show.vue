<template>
    <AdminLayout>
        {{client.name}}
    </AdminLayout>
</template>

<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";

defineProps({
    client : Object,
})
</script>

