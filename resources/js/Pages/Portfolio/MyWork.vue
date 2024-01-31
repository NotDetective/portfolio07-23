<script setup>
import MyWorkButton from "@/Shared/Buttons/MyWorkButton.vue";
import GithubReposCard from "@/Shared/MyWork/GithubReposCard.vue";
import {ref} from "vue";
import ProjectCard from "@/Shared/MyWork/ProjectCard.vue";

// get show out of url params
const params = new URLSearchParams(window.location.search)

let selected = ref(params.get('show') || 'repositories')

const changeParams = (value) => {
    selected.value = value
    params.set('show', value)
    window.history.replaceState({}, '', `${location.pathname}?${params}`)
}
</script>

<template>
    <main
        class="flex justify-between w-full h-full"
    >

        <section class="flex flex-col w-1/4 items-center gap-5 py-3">
            <div class="w-fit h-fit px-5 py-8 bg-white shadow-md rounded-lg flex flex-col items-center gap-5 text-3xl">
                <h1 class="text-4xl text-center">Github</h1>
                <div class="border-gradient border-b-4 w-80"/>

                <img
                    class="rounded-full w-52 h-52"
                    src="https://placehold.co/300"
                >
                <p>
                    NotDetective
                </p>
                <p>
                    Student ROC Nijmgen
                </p>
                <p>
                    Public Repos: 5
                </p>
            </div>

            <div class="flex flex-col items-start gap-5 w-[22.5rem]">
                <MyWorkButton
                    @click="changeParams('repositories')"
                    :active="selected === 'repositories'"
                    :text="'Repositories (5)'"
                />

                <MyWorkButton
                    @click="changeParams('projects')"
                    :active="selected === 'projects'"
                    :text="'Projects Worked On (3)'"
                />
            </div>
        </section>

        <section
            v-if="selected === 'repositories'"
            class="w-3/4 h-full grid grid-cols-3 gap-5 p-5 overflow-y-scroll"
        >
            <GithubReposCard
                v-for="i in 5"
            />
        </section>

        <section
            v-else-if="selected === 'projects'"
            class="w-3/4 h-full grid grid-cols-3 gap-7 p-5 overflow-y-scroll"
        >
            <ProjectCard
                v-for="i in 8"
            />

        </section>

        <section
            v-else
            class="w-3/4 h-full"
        >
            <h1 class="text-4xl text-center">
                Error
            </h1>
            <p class="text-xl text-center">Show type not supported</p>

            <p class="text-xl text-center">
                <Link
                    as="button"
                    :href="route('work')"
                >
                    go back to work
                </Link>
            </p>
        </section>

    </main>

</template>
