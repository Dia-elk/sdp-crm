<template>
    <div class="w-full flex justify-center items-center h-32 border-[0.6px] border-black border-opacity-20 ">
        <div class="flex flex-col justify-between h-full w-full p-4">
            <h3 class="font-semibold text-opacity-60 text-black text-md">{{ title }}</h3>
            <div class="flex gap-1">
                <h1 class="font-bold  text-4xl">{{ price }}</h1>
                <p class="text-sm">Dh</p>
            </div>
            <div class="flex justify-between items-center"
                 v-show="!(subTitle == null)"
            >
                <p class="text-[10px] text-opacity-60 text-black">{{subTitle}}</p>
                <div class=" flex items-center">
                    <div>
                        <PlusIcon v-show="positive"/>
                        <MinusIcon v-show="!positive"/>
                    </div>
                    <p class="text-[10px] text-opacity-60 font-semibold"
                       :class="positive? 'text-[#05C19C]':'text-[#E80026]'">
                        {{percentage}} %
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>

import PlusIcon from "@/Shared/Overview/PlusIcon.vue";
import MinusIcon from "@/Shared/Overview/MinusIcon.vue";

defineProps({
    title : String,
    price : String,
    subTitle : String,
    percentage : String,
    positive : Boolean
})
</script>
