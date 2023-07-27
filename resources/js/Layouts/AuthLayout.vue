<template>
    <div class="flex w-full h-screen">
        <!-- form section -->
        <div class="w-full flex flex-col justify-between p-6 sm:p-10">
            <!-- logo -->
            <div class="">
                <Logo/>
            </div>
            <!-- form  -->
                <slot/>
            <!-- footer-->
            <div class="flex justify-center">
                <p class="text-neutral-400 text-[10px]">
                    Copyright © {{ currentYear }} | Created by
                    <span class="text-blue-600 font-bold text-xs">
                        <a href="https://diaelk.dev/" target="_blank">diaelk.dev</a>
                    </span>
                </p>
            </div>
        </div>
        <!-- end of form section -->

        <!-- picture section -->
        <div class="w-fit hidden lg:flex  justify-end items-center  p-2">
            <img src="images/loginBg.jpg" class="h-[calc(100vh-10px)]  hidden md:block w-[900px] object-cover">
        </div>
        <!-- end of picture section -->
    </div>
</template>

<script setup>
import Logo from "@/Icons/Logo.vue";
let currentYear = new Date().getFullYear();

</script>

