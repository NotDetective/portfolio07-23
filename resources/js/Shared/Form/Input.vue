<script setup>

import {ref} from "vue";
import Error from "@/Shared/Form/Error.vue";

defineProps({
    placeholder: String,
    type: {
        type: String,
        default: 'text',
    },
    name: String,
    modalValue: String,
    label: String,
    required: {
        type: Boolean,
        default: false,
    },
    error: {
        required: false,
        type: String,
    }

});

let emit = defineEmits(['update:modelValue']);

let showPassword = ref(false)
</script>

<template>

    <div class="mb-4">
        <label
            class="block text-gray-700 text-sm font-bold mb-2"
            :for="name"
        >
            {{ label }}
        </label>
        <div
            class="w-full relative"
        >
            <input
                :type="type === 'password' && showPassword ? 'text' : type"
                :name="name"
                :placeholder="placeholder"
                @input="emit('update:modelValue', $event.target.value)"
                :required="required"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            >
            <button
                v-if="type === 'password'"
                @click="showPassword = !showPassword"
                type="button"
                class="absolute top-2 right-2 h-7 w-7"
            >
                <svg
                    class="fill-current text-black hover:text-blue/80 transition duration-200"
                    :class="{ 'text-blue': showPassword }"
                    xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Zm0-300Zm0 220q113 0 207.5-59.5T832-500q-50-101-144.5-160.5T480-720q-113 0-207.5 59.5T128-500q50 101 144.5 160.5T480-280Z"/>
                </svg>
            </button>
        </div>
    </div>
    <Error
        class="mb-2"
        :error="error" v-if="error"
    />
</template>
