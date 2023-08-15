<template>
    <div class="h-6 w-20 flex justify-center items-center gap-2 rounded-full border-[0.6px]"
         :class="'border-'+ colorStatut"
    >
        <div class="w-[5px] h-[5px]  rounded-full"
             :class="'bg-'+ colorStatut"
        >

        </div>
        <p class="text-[8px]   font-bold "
           :class="'text-'+ colorStatut"
        >
            {{statut.name}}
        </p>
    </div>
</template>

<script setup>
import {ref} from "vue";

defineProps({
    statut :Object
})
let colorStatut = ref('red-400')

</script>
