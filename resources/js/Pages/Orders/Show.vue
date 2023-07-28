<template>
    <Head title="Order"/>

       Order {{order.id}}

</template>

<script setup>
import AdminLayout from "@/Layouts/AdminLayout.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    order :Object,
})
</script>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>
