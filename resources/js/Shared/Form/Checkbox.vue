<script setup>
import Input from "@/Shared/Form/Input.vue";
import Error from "@/Shared/Form/Error.vue";

defineProps({
    name: {
        type: String,
        required: true,
    },
    label: {
        type: String,
        required: true,
    },
    required: {
        type: Boolean,
        default: false,
    },
    modelValue: Boolean,
    error: {
        type: String,
        required: false,
    }
});

let emit = defineEmits(['update:modelValue']);

</script>

<template>

    <div class="mb-6">
        <label
            class="block text-gray-700 text-sm font-bold mb-2"
        >
            <input
                type="checkbox"
                :name="name"
                @click="emit('update:modelValue', !modelValue)"
                :required="required"
                :checked="modelValue"

                class="mr-2 leading-tight"
            />
            <span class="text-sm">
                {{ label }}
            </span>
        </label>

        <Error :error="error" v-if="error" />
    </div>

</template>
