<script setup>
defineProps({
    'repository': Object,
})
</script>

<template>

    <div class="bg-white shadow rounded w-fit h-fit p-5">
        <div class="flex justify-between">
            <a :href="repository.link" target="_blank">
                <h1 class="text-2xl">{{ repository.name }}</h1>
            </a>

            <div class="flex items-center gap-1">
                <div class="w-7 h-7 rounded-full"
                     :style="{ backgroundColor: repository.programming_language.color }"
                />
                <p class="text-xl"> {{ repository.programming_language.name }} </p>
            </div>
        </div>
        <div class="border-gradient border-b-4 w-full"/>
        <div class="flex pt-2 justify-between">
            <p>last update: {{ repository.last_update }}</p>
            <div
                v-if="repository.archived"
            >
                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24">
                    <path
                        d="M200-80q-33 0-56.5-23.5T120-160v-451q-18-11-29-28.5T80-680v-120q0-33 23.5-56.5T160-880h640q33 0 56.5 23.5T880-800v120q0 23-11 40.5T840-611v451q0 33-23.5 56.5T760-80H200Zm0-520v440h560v-440H200Zm-40-80h640v-120H160v120Zm200 280h240v-80H360v80Zm120 20Z"/>
                </svg>
            </div>
        </div>
        <main class="w-96">
            <img
                class="w-full h-60 rounded-lg"
                src="https://placehold.co/300x150"
                alt=""
            >
            <p>
                {{
                    repository.description
                }}
            </p>
        </main>
    </div>

</template>
