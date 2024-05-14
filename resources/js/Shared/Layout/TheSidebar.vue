<script setup>

import {ref, watch} from "vue";
import SliderItem from "@/Shared/Layout/SliderItem.vue";
import {router} from "@inertiajs/vue3";

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

            <Link
                as="button"
                method="POST"
                :href="route('logout')"
                class="flex justify-center items-center transition-all duration-100 text-purpleDark transform hover:text-blue"
                :class="extended ? 'gap-4 mb-5' : 'flex-col'"
            >
                <svg class="fill-current h-7 w-7" xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" ><path d="M200-120q-33 0-56.5-23.5T120-200v-560q0-33 23.5-56.5T200-840h280v80H200v560h280v80H200Zm440-160-55-58 102-102H360v-80h327L585-622l55-58 200 200-200 200Z"/></svg>

                <p
                    class="text-xl transition-all duration-100 transform"
                    :class="extended ? 'opacity-100 w-fit' : 'opacity-0 w-0'"
                >
                    Logout
                </p>
            </Link>


            <div class="w-full flex justify-end">
                <button
                    @click="extended = !extended"
                >
                    <svg
                        class="fill-current text-purpleDark transition-all duration-500 transform hover:text-blue"
                        :class="!extended ? 'rotate-180' : 'text-custom-gray-500'"
                        width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path id="Vector" d="M3.825 9L9.425 14.6L8 16L0 8L8 0L9.425 1.4L3.825 7H16V9H3.825Z"/>
                    </svg>

                </button>
            </div>

        </div>
    </div>
</template>
