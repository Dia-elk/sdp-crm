<template>

        {{client.name}}

</template>

<script setup>

import AdminLayout from "@/Layouts/AdminLayout.vue";

defineProps({
    client : Object,
})
</script>


<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

