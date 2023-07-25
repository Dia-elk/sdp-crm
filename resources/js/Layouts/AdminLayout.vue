<template>
    <div class="flex flex-col h-screen">
        <Appbar/>
        <div class="flex w-full h-full">
            <AdminSidebar/>
            <div class="w-full p-4">
                <slot/>
            </div>
        </div>
    </div>
</template>

<script setup>

import AdminSidebar from "@/Shared/Sidebar/AdminSidebar.vue";
import Appbar from "@/Shared/Appbar.vue";
</script>
