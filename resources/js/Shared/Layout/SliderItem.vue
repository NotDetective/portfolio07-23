<script setup>

defineProps({
    text: {
        type: String,
        required: true,
    },
    path: {
        type: String,
        required: true,
    },
    extended: {
        type: Boolean,
        required: true,
    },
})

</script>

<template>

    <Link
        :href="path ? route(path) : '#'"
        class="w-full h-full flex flex-col items-center justify-center"
    >

        {{ text }}
    </Link>
</template>
