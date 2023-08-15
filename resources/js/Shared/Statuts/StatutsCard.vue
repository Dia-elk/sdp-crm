<template>
    <div class="h-6 w-20 flex justify-center items-center gap-2 rounded-full border-[0.6px]"
         :class="'border-'+ statut.color"
    >
        <div class="w-[5px] h-[5px]  rounded-full"
             :class="'bg-'+ statut.color"
        >

        </div>
        <p class="text-[8px]   font-bold "
           :class="'text-'+ statut.color"
        >
            {{statut.name}}
        </p>
    </div>
</template>

<script setup>

defineProps({
    statut :Object
})


</script>
