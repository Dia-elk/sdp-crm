<template>
    <div class="flex justify-between items-center p-4 h-[60px] border-b-[0.6px] border-black border-opacity-20">
        <!-- logo -->
       <Logo/>
        <!-- end of logo -->
        <p class="text-xs font-bold">
            Welcome back ,
            <span class="text-blue-600 text-sm">
                {{$page.props.auth.user.name}}
            </span>
        </p>
    </div>
</template>

<script setup>

import {Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
import Logo from "@/Icons/Logo.vue";
</script>
