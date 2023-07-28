<template>
    <Head title="Welcome"/>
    <div class="flex myBg bg-cover justify-center items-center h-screen ">
        <div class="bg-white justify-center items-center flex flex-col gap-16 bg-opacity-20 backdrop-blur-md rounded-lg p-6">
            <div class="text-2xl font-bold ">
                Login Information:
            </div>

            <div class="flex gap-6">
                <!-- user -->
                <div>
                    <h1 class="font-bold">For a User:</h1>
                    <p>E-mail : {{user.email}}</p>
                    <p>Password : password</p>
                </div>
                <!-- admin -->
                <div>
                    <h1 class="font-bold">For an Admin:</h1>
                    <p>E-mail : {{admin.email}}</p>
                    <p>Password : password</p>
                </div>
            </div>

            <Link :href="route('login.index')">
                <Button>
                    Login
                </Button>
            </Link>
        </div>
    </div>

</template>

<script setup>

import {Head, Link} from "@inertiajs/vue3";
import Button from "@/Shared/Button.vue";

defineProps({
    user: Object,
    admin : Object,
})
</script>

<style>
.myBg{
    background-image: url("/images/welcomeBg.jpg");
}
</style>

