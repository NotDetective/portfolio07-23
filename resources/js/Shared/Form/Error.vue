<script setup>

    defineProps({
        error: {
            type: String,
            required: true,
        }
    });

</script>

<template>

    <p class="text-red-500 italic">{{ error }}</p>

</template>
