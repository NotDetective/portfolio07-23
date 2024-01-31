<script setup></script>

<template>
    <div class="bg-white shadow rounded h-fit p-5">
        <div class="flex justify-between">
            <h1 class="text-2xl">Learning Laravel</h1>
        </div>
        <div class="border-gradient border-t-4 w-full"/>
        <main class="w-full p-3">
            <img
                class="w-full h-60 rounded-lg"
                src="https://placehold.co/400x200"
                alt=""
            >
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis lorem vitae ante tempor,
                eu auctor mi mattis. Pellentesque eget dui sed nisi ullamcorper dapibus sit amet vel justo
            </p>
        </main>
        <div class="flex gap-2">
            <div
                v-for="i in 3"
                class="flex gap-1 bg-sky-300 rounded-xl w-fit h-fit px-3 py-1"
            >
                <p class="text-white">Vue 3</p>
            </div>
        </div>
    </div>
</template>
