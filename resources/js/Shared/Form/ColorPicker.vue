<script setup>
import {ref} from "vue";

let color = ref('#3acb50')


</script>

<template>
    <div
        class="flex flex-col w-fit"
    >
        <input
            class="h-16 w-44"
            type="color"
            v-model="color"
        />
        <input
            type="text"
            v-model="color"
            class="w-44"
        >
    </div>
</template>
