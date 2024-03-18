<script setup>

defineProps({
    modelValue: String,
    placeholder: String,
    name: String,
    error: {
        required: false,
    },
})

</script>

<template>
    <div class="w-full">
        <textarea
            class="shadow text-xl px-2 py-0.5 w-full rounded cursor-not-allowed"
            :name="name"
            :placeholder="placeholder"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
            rows="4"
            maxlength="20"
        />
        <p class="text-red-500">{{ error }}</p>
    </div>
</template>
