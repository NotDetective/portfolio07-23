<script setup>
import TheSidebar from "@/Shared/Layout/TheSidebar.vue";
</script>

<template>
    <main class="min-h-screen max-h-fit w-screen flex bg-slate-100">
        <section>
            <TheSidebar />
        </section>

        <section class="w-full h-full flex flex-col">
            <main class="w-full flex-1 mb-8 px-8">
                <slot/>
            </main>
        </section>

    </main>
</template>
