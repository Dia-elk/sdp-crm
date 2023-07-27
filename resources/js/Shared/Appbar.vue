<template>
    <div
        class="flex justify-between items-center p-4 h-[60px]  border-b-[0.6px] border-black border-opacity-20 relative">
        <!-- logo -->
        <Logo/>
        <!-- end of logo -->

        <!-- welcome message -->
        <p class="text-xs font-bold sm:block hidden">
            Welcome back ,
            <span class="text-blue-600 text-sm">
                {{ $page.props.auth.user.name }}
            </span>
        </p>
        <!-- end of welcome message -->

        <!-- Drawer open icon -->
        <div class="sm:hidden" v-show="!isOpen" @click="drawerToggle">
            <Drawer/>
        </div>
        <!-- End of Drawer open icon -->

        <!-- Drawer close icon -->
        <div class="sm:hidden z-40" v-show="isOpen" @click="drawerToggle">
            <Close/>
        </div>
        <!-- End of Drawer close icon -->

        <!-- Drawer -->

        <MyDrawer :is-open="isOpen" :drawer-toggle="drawerToggle"/>

        <!-- End of Drawer -->

    </div>
</template>

<script setup>

import Logo from "@/Icons/Logo.vue";
import Drawer from "@/Icons/Drawer/Drawer.vue";
import Close from "@/Icons/Drawer/Close.vue";
import MyDrawer from "@/Shared/MyDrawer.vue";
import {ref} from "vue";

let isOpen = ref(false)
function drawerToggle()
{
    isOpen.value = !isOpen.value
}
</script>
