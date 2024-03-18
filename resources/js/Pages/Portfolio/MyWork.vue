<script setup>
import MyWorkButton from "@/Shared/Buttons/MyWorkButton.vue";
import GithubReposCard from "@/Shared/MyWork/GithubReposCard.vue";
import {onMounted, ref, watch} from "vue";
import ProjectCard from "@/Shared/MyWork/ProjectCard.vue";
import {Head} from "@inertiajs/vue3";

defineProps({
    'projects': Object,
    'repository': Object,
})


// get show out of url params
const params = new URLSearchParams(window.location.search)

let selected = ref(params.get('show') || 'repositories')

const changeParams = (value) => {
    selected.value = value
    params.set('show', value)
    window.history.replaceState({}, '', `${location.pathname}?${params}`)
}

let githubData = ref({});

const getGithubData = async () => {
    try {
        // Check if data exists in local storage and if it's not older than 2 days
        const storedData = localStorage.getItem('githubData');
        const storedTimestamp = localStorage.getItem('githubDataTimestamp');
        const currentTime = new Date().getTime();
        if (storedData && storedTimestamp) {
            if (currentTime - parseInt(storedTimestamp) < 2 * 24 * 60 * 60 * 1000) {
                // Data is fresh, use it
                githubData.value = JSON.parse(storedData);
                return;
            }
        }

        // If data is not in local storage or is older than 2 days, fetch new data
        const response = await fetch('https://api.github.com/users/NotDetective');
        const newData = await response.json();
        // Update the local storage with new data and timestamp
        localStorage.setItem('githubData', JSON.stringify(newData));
        localStorage.setItem('githubDataTimestamp', currentTime.toString());
        githubData.value = newData;
    } catch (error) {
        console.error('Error fetching github data:', error);
    }
}

onMounted(() => {
    getGithubData();
})
</script>

<template>
    <Head title="My work" />

    <main
        class="flex justify-between w-full h-full"
    >

        <section class="flex flex-col w-1/4 items-center gap-5 py-3">
            <a :href="githubData.html_url" target="_blank">
                <div class="w-fit h-fit px-5 py-8 bg-white shadow-md rounded-lg flex flex-col items-center gap-5 text-3xl">
                    <h1 class="text-4xl text-center">Github</h1>
                    <div class="border-gradient border-b-4 w-80"/>

                    <img
                        class="rounded-full w-52 h-52"
                        :src="githubData.avatar_url"
                        alt="github profile picture"
                    >
                    <p class="flex flex-col items-center">
                        {{ githubData.login }}
                        <span class="text-xl text-custom-gray-200">
                            ({{ githubData.name }})
                        </span>
                    </p>
                    <p>
                        {{ githubData.company }}
                    </p>
                    <p>
                        Public Repos: {{ githubData.public_repos }}
                    </p>
                </div>
            </a>

            <div class="flex flex-col items-start gap-5 w-[22.5rem]">
                <MyWorkButton
                    @click="changeParams('repositories')"
                    :active="selected === 'repositories'"
                    :text="'Repositories (' + Object.keys(repository).length + ')'"
                />

                <MyWorkButton
                    @click="changeParams('projects')"
                    :active="selected === 'projects'"
                    :text="'Projects Worked On (' + Object.keys(projects).length + ')'"
                />
            </div>
        </section>

        <section
            v-if="selected === 'repositories'"
            class="w-3/4 h-full grid grid-cols-3 gap-5 p-5 overflow-y-scroll"
        >
            <GithubReposCard
                v-for="repo in repository"
                :key="repo.id"
                :repository="repo"
            />
        </section>

        <section
            v-else-if="selected === 'projects'"
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
