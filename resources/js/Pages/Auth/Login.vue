<template>
    <Head title="Login"/>
    <AuthLayout>
        <div class="flex flex-col gap-10 items-center justify-center">
            <!-- Welcome message -->
            <div class="flex flex-col justify-center items-center gap-1 sm:gap-4">
                <Wave/>
                <h1 class="text-xl sm:text-3xl font-bold">
                    Welcome Back
                </h1>
                <h6 class="text-neutral-400 text-[10px] sm:text-sm">
                    Enter your login details below
                </h6>
            </div>

            <!-- End of Welcome message -->

            <!-- Login Form -->
            <form @submit.prevent="form.post(route('login.store'))">
                <div class="flex flex-col gap-4 sm:gap-6">
                    <!-- Email Input -->
                    <div>
                        <input type="email"
                               placeholder="E-mail"
                               v-model="form.email"
                               class="w-full rounded-lg bg-transparent border-neutral-400 placeholder-neutral-400 focus:border-blue-600"
                               :class="form.errors.email? 'focus:border-red-600 border-red-600' : 'focus:border-blue-600 border-neutral-400' "
                        >
                        <!-- error msg -->
                        <div v-show="form.errors.email" class="mt-1">
                            <p class="text-red-600 text-xs">
                                {{ form.errors.email }}
                            </p>
                        </div>
                    </div>

                    <!-- Password Input -->
                    <div>
                        <input type="password"
                               placeholder="Password"
                               v-model="form.password"
                               class="w-full rounded-lg bg-transparent  placeholder-neutral-400 "
                               :class="form.errors.password? 'focus:border-red-600 border-red-600' : 'focus:border-blue-600 border-neutral-400' "

                        >
                        <!-- error msg -->
                        <div v-show="form.errors.password" class="mt-1">
                            <p class="text-red-600 text-xs">
                                {{ form.errors.password }}
                            </p>
                        </div>
                    </div>

                    <!-- btn -->
                    <div class="mt-6">
                        <button type="submit" :disabled="form.processing">
                            <Button :class="form.processing? ' bg-neutral-500 hover:bg-neutral-500' : '' ">
                                Login
                            </Button>
                        </button>
                    </div>
                </div>
            </form>
            <!-- End of Login Form -->

        </div>
    </AuthLayout>
</template>

<script setup>

import {Head, Link, useForm} from "@inertiajs/vue3";
import AuthLayout from "@/Layouts/AuthLayout.vue";
import Button from "@/Shared/Button.vue";
import Wave from "@/Icons/Wave.vue";
import {ref} from "vue";

let form = useForm({
    email: ref(),
    password: ref()
})


</script>


