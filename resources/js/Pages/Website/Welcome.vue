<template>
    <Head title="Welcome"/>
    <div class="flex myBg bg-cover text-white justify-center items-center h-screen ">
        <div class="bg-white justify-center items-center flex flex-col gap-10 bg-opacity-20 backdrop-blur-sm rounded-lg p-6">
            <div class="text-2xl font-bold ">
                Login Information:
            </div>

            <div class="flex flex-col  text-white md:flex-row gap-6">
                <!-- user -->
                <div>
                    <h1 class="font-bold text-white  ">For a User:</h1>
                    <p class="text-sm text-opacity-60 text-white">E-mail : {{user.email}}</p>
                    <p class="text-sm text-opacity-60 text-white">Password : password</p>
                </div>
                <div class="md:w-[1px] md:h-[80px] bg-white ">

                </div>
                <!-- admin -->
                <div>
                    <h1 class="font-bold text-white ">For an Admin:</h1>
                    <p class="text-sm text-opacity-60 text-white">E-mail : {{admin.email}}</p>
                    <p class="text-sm text-opacity-60 text-white">Password : password</p>
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

