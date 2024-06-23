<script setup>

import DashboardPrimaryButton from "@/Shared/Buttons/DashboardPrimaryButton.vue";
import DashboardPagesLayout from "@/Shared/DashboardPagesLayout.vue";

defineProps({
    programmingLanguages: Object
})

</script>

<template>


    <DashboardPagesLayout
        title="All Skills"
        :sub-title="programmingLanguages.length"
        text="Here are all the programming languages (and frameworks) I have experience with."
    >
        <template
            v-slot:buttons
        >
            <Link
                :href="route('skills.create')"
            >
                <DashboardPrimaryButton
                    text="Add Skill"
                />
            </Link>
        </template>

        <div
            class="w-full grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-4"
        >
            <template v-for="skill in programmingLanguages">
                <Link
                    :href="route('skills.edit', skill.id)"
                    class="w-full h-full"
                >
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
                </Link>
            </template>
        </div>
    </DashboardPagesLayout>
</template>
