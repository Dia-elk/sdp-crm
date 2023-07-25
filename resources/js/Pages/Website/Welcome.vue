<template>
    <Head title="Welcome"/>
    <div class="flex justify-center items-center h-screen">

        <Link :href="route('login.index')">
            <Button>Log In</Button>
        </Link>
    </div>
</template>

<script setup>

import {Head, Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
</script>

