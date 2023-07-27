<template>
    <div class="flex flex-col w-full h-screen fixed overflow-hidden">
        <Appbar/>
        <div class="flex w-full h-full">
            <div class="sm:block hidden">
                <Sidebar/>
            </div>
            <div class="w-full p-4 overflow-auto mb-20">
                <slot/>
            </div>
        </div>
    </div>
</template>

<script setup>

import Sidebar from "@/Shared/Sidebar/Sidebar.vue";
import Appbar from "@/Shared/Appbar.vue";
</script>
