<template>
    <Link :href="href" :method="method">
    <div class="h-[41px]  flex items-center transition-all duration-700   gap-4  cursor-pointer"

         @mouseenter="hoverToggle"
         @mouseleave="hoverToggle"
         :class="(isHover || active ? 'bg-neutral-100' : 'bg-transparent') , (isBigSideBar? 'pl-[40px]':'justify-center')">
        <!-- icon -->
        <div v-show=" !isHover && !active">
            <slot name="icon"/>
        </div>
        <!-- end of icon -->

        <!-- hover/focus icon -->
        <div v-show="isHover || active">
            <slot name="HoverIcon"/>
        </div>
        <!-- end of hove/focus icon -->

        <!-- title -->
        <div v-show="isBigSideBar">
           <h2 class="text-sm" :class="isHover || active ? 'text-blue-600 font-semibold' : 'font-medium text-neutral-800'" >
               <slot name="title"/>
           </h2>
        </div>
        <!-- end of title -->
    </div>
    </Link>
</template>

<script setup>

import {ref} from "vue";
import {Link} from "@inertiajs/vue3";
defineProps({
    active:Boolean,
    isBigSideBar:Boolean,
    href:String,
    method:{
        type:String,
        default:"get"
    }
})
let isHover = ref(false);


function hoverToggle()
{
    isHover.value = !isHover.value
}

</script>
