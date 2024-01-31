<script setup>
defineProps({
    active: Boolean,
    text: String
})
</script>

<template>
    <button
        @click="$emit('click')"
        class="text-2xl px-2 py-1 rounded hover:bg-slate-50 transition-all duration-200 flex items-center group"
    >
        <span class="transition-opacity duration-500"
              :class="active ? 'block' : 'hidden group-hover:block'"
        >
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                <path d="M504-480 320-664l56-56 240 240-240 240-56-56 184-184Z"/>
            </svg>
        </span>
        {{ text }}
    </button>
</template>
