<template>
    <div class="flex justify-center items-center h-screen">

        <Head title="Welcome"/>

        <Link href="/logout" method="delete">
            <Button>Log Out</Button>
        </Link>
    </div>
</template>

<script setup>
import {Head, Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";
</script>
