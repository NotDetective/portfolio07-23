<script setup>

defineProps({
    modelValue: String,
    placeholder: String,
    name: String,
    type: {
        type: String,
        default: 'text',
    },
    error: {
        required: false,
    },
})

</script>

<template>

    <div class="w-full">
        <input
            class="shadow text-xl px-2 w-full py-0.5 rounded cursor-not-allowed"
            :type="type"
            :name="name"
            :placeholder="placeholder"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        >
        <p class="text-red-500">{{ error }}</p>
    </div>


</template>
