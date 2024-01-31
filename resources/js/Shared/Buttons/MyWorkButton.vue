<script setup>
defineProps({
    active: Boolean,
    text: String
})
</script>

<template>
    <button
        @click="$emit('click')"
        class="text-2xl px-2 py-1 rounded hover:bg-slate-100 transition-all duration-200"
        :class=" active ? 'bg-slate-100' : 'hover:bg-slate-100'"
    >
        {{ text }}
    </button>
</template>
