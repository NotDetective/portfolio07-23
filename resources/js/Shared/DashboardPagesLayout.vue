<script setup>
import {useSlots} from "vue";

defineProps({
    title: String,
    subTitle: String,
    text: String,
})

const slot = useSlots();
</script>

<template>

    <main
        class="bg-background w-full h-full flex flex-col items-center gap-4 mt-6 p-4"
    >
        <section
            class="w-full border-b-2 border-custom-light-gray">
            <div class="flex justify-between items-center px-5">
                <div class="mb-4">
                    <div
                        class="w-full flex justify-between items-center"
                    >
                        <!-- header title -->
                        <h1>
                            <span class="text-4xl text-custom-dark-purple">{{ title }}</span>
                            <span
                                v-if="subTitle != null && subTitle !== ''"
                                class="text-4xl text-custom-gray"> ({{ subTitle }})</span>
                        </h1>
                    </div>
                    <div>
                        <!-- header text -->
                        <p class="text-custom-gray">{{ text }}</p>
                    </div>
                </div>

                <div class="w-fit flex gap-4">
                    <!-- Buttons -->
                    <slot name="buttons" />
                </div>
            </div>
        </section>

        <section class="w-full">
            <slot/>
        </section>

        <section
            v-if="slot.footer"
            class="w-full border-t-2 border-custom-light-gray p-5">
            <slot name="footer" />
        </section>
    </main>

</template>
