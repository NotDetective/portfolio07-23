<script setup>

import DashboardPrimaryButton from "@/Shared/Buttons/DashboardPrimaryButton.vue";

defineProps({
    programmingLanguages: Object
})

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
                        <h1>
                            <span class="text-4xl text-custom-dark-purple">All Skills</span>
                            <span class="text-4xl text-custom-gray"> ({{ programmingLanguages.length }})</span>
                        </h1>
                    </div>
                    <div>
                        <p class="text-custom-gray">Here are all the programming languages (and frameworks) I have experience with.</p>

                    </div>
                </div>

                <div class="w-fit">

                    <DashboardPrimaryButton
                        text="Add Skill"
                    />
                </div>
            </div>
        </section>

        <section>
            <div
                class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4"
            >
                <template v-for="skill in programmingLanguages">
                    <div
                        class="w-full bg-white p-4 rounded-lg shadow-lg flex items-center gap-2 cursor-pointer transition-all duration-200 hover:shadow-xl"
                        :style="{
                            'border-left': `10px solid ${skill.color}`
                        }"
                    >
                        <h2
                            class="text-2xl text-custom-dark-purple"
                        >
                            {{ skill.name }}
                        </h2>
                    </div>
                </template>
            </div>
        </section>

        <section>
            <!--            footer -->
        </section>
    </main>

</template>
