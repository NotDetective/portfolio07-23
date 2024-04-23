<script setup>

import {ref, watch} from "vue";
import SliderItem from "@/Shared/Layout/SliderItem.vue";

let extended = ref(localStorage.getItem('extended') === 'true');
watch(extended, newVal => localStorage.setItem('extended', newVal.toString()));
</script>

<template>
    <div class="transition-all duration-500" :class="extended ? 'w-80' : 'w-28'">
        <div
            class="fixed inset-0 flex flex-col items-center h-screen bg-white transition-all duration-500 px-3.5 py-8 shadow-lg"
            :class="extended ? 'w-80' : 'w-28'"
        >

            <div class="w-fit flex-1 flex flex-col gap-7">
                <nav
                    class="w-full flex flex-col gap-3"
                    :class="{
                'items-start': extended,
                'items-center': !extended,
            }"
                >

                    <SliderItem
                        :extended="extended"
                        path="dashboard"
                        text="Dashboard"
                    />

                </nav>

            </div>


            <div class="w-full flex justify-end">
                <button
                    @click="extended = !extended"
                >
                    <svg
                        class="fill-current text-custom-gray-200 transition-all duration-500 transform hover:text-secondary-blue/80"
                        :class="!extended ? 'rotate-180' : 'text-custom-gray-500'"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M3.825 9L9.425 14.6L8 16L0 8L8 0L9.425 1.4L3.825 7H16V9H3.825Z"/>
                    </svg>

                </button>
            </div>

        </div>
    </div>
</template>
