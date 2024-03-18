<script setup>

defineProps({
    'project': Object,
})

</script>

<template>

    <div class="bg-white shadow rounded h-fit p-5">
        <div class="flex justify-between">
            <h1 class="text-2xl">{{ project.name }}</h1>
        </div>
        <div class="border-gradient border-t-4 w-full"/>
        <main class="w-full p-3">
            <img
                class="w-full h-60 rounded-lg"
                src="https://placehold.co/400x200"
                alt=""
            >
            <p>
                {{
                    project.description
                        ? project.description
                        : 'No description available'
                }}
            </p>
        </main>
        <div class="flex gap-2">
            <div
                v-for="tag in project.tags"
                class="flex gap-1 bg-sky-300 rounded-xl w-fit h-fit px-3 py-1"
            >
                <p class="text-white">{{ tag.name }}</p>
            </div>
        </div>
    </div>
</template>
