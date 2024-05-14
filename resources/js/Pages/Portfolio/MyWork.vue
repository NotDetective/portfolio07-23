<script setup>
import MyWorkButton from "@/Shared/Buttons/MyWorkButton.vue";
import GithubReposCard from "@/Shared/MyWork/GithubReposCard.vue";
import {onMounted, ref, watch} from "vue";
import ProjectCard from "@/Shared/MyWork/ProjectCard.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    'projects': Object,
    'repository': Object,
    'github': Object,
    type: String,
})
</script>

<template>
    <Head title="My work"/>

    <main
        class="flex justify-between w-full h-full"
    >

        <section class="flex flex-col w-1/4 items-center gap-5 py-3">
            <a :href="github.html_url" target="_blank">
                <div
                    class="w-fit h-fit px-5 py-8 bg-white shadow-md rounded-lg flex flex-col items-center gap-5 text-3xl">
                    <h1 class="text-4xl text-center">Github</h1>
                    <div class="border-gradient border-b-4 w-80"/>

                    <img
                        class="rounded-full w-52 h-52"
                        :src="github.avatar_url"
                        alt="github profile picture"
                    >
                    <p class="flex flex-col items-center">
                        {{ github.login }}
                        <span class="text-xl text-custom-gray-200">
                            ({{ github.name }})
                        </span>
                    </p>
                    <p>
                        {{ github.company }}
                    </p>
                    <p>
                        Public Repos: {{ github.public_repos }}
                    </p>
                </div>
            </a>

            <div class="flex flex-col items-start gap-5 w-[22.5rem]">
                <Link
                    :href="route('work', 'repositories')"
                    class="w-full"
                >
                    <MyWorkButton
                        :active="type === 'repositories'"
                        :text="'Repositories (' + Object.keys(repository).length + ')'"
                    />
                </Link>

                <Link
                    :href="route('work', 'projects')"
                    class="w-full"
                >
                    <MyWorkButton
                        @click="changeParams('projects')"
                        :active="type === 'projects'"
                        :text="'Projects Worked On (' + Object.keys(projects).length + ')'"
                    />
                </Link>
            </div>
        </section>

        <section
            v-if="type === 'repositories'"
            class="w-3/4 h-full grid grid-cols-3 gap-5 p-5 overflow-y-scroll"
        >
            <GithubReposCard
                v-for="repo in repository"
                :key="repo.id"
                :repository="repo"
            />
        </section>

        <section
            v-else-if="type === 'projects'"
            class="w-3/4 h-full grid grid-cols-3 gap-7 p-5 overflow-y-scroll"
        >
            <ProjectCard
                v-for="project in projects"
                :key="project.id"
                :project="project"
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
