<script setup>
import DashboardPagesLayout from "@/Shared/DashboardPagesLayout.vue";
import ColorPicker from "@/Shared/Form/ColorPicker.vue";

</script>

<template>
    <DashboardPagesLayout
        title="Add a skill"
    >
        <main
            class="w-full grid grid-cols-2 gap-x-9"
        >
            <ColorPicker/>
        </main>

        <template
            v-slot:footer
        >
            <!-- place save buttons here -->
        </template>
    </DashboardPagesLayout>
</template>
