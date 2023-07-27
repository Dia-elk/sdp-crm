<template>
    <Head title="Dashboard"/>

    <div class="h-full flex justify-center items-center">
        Dashboard
    </div>

</template>

<script>
import AdminLayout from "@/Layouts/AdminLayout.vue";

export default {
    layout: AdminLayout
}
</script>

<script setup>
import {Head, Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
import AdminLayout from "@/Layouts/AdminLayout.vue";
</script>
