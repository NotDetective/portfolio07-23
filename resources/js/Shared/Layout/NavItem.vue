<script setup>

defineProps({
    route: {
        type: String,
        required: true,
    },
    details: {
        type: String,
    },
})

</script>

<template>
    <div class="group relative">
        <Link
            class=""
            :class="{ '': true }"
        >
            <div class="group-hover:scale-125 group-hover:rotate-6 transform transition-all duration-300">
                <slot/>
            </div>
        </Link>
    </div>
</template>
