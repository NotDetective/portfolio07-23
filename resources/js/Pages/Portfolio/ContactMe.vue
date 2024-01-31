<script setup>
import PrimaryButton from "@/Shared/Buttons/PrimaryButton.vue";
import SimpleInput from "@/Shared/Form/SimpleInput.vue";
import {useForm} from "@inertiajs/vue3";
import SimpleTextarea from "@/Shared/Form/SimpleTextarea.vue";
import {ref} from "vue";

let form = useForm({
    name: '',
    email: '',
    message: '',
})

const submit = () => {
    alert('submitted')
}

const getRandomJoke = async () => {
    try {
        const response = await fetch('https://v2.jokeapi.dev/joke/Programming');
        const data = await response.json();

        if (data.type === 'single') {
            joke.value = data.joke;
        } else {
            joke.value = `${data.setup} ${data.delivery}`;
        }
    } catch (error) {
        console.error('Error fetching random joke:', error);
    }
};

let joke = ref(getRandomJoke())

</script>

<template>

    <main
        class="flex justify-between h-full w-full "
    >
        <section class="w-1/3 h-2/3 p-8 space-y-4 flex flex-col  justify-center">
            <h1 class="text-4xl mb-4">Random Joke About Programming:</h1>

            <h1 class="text-4xl">
                <span class="text-gradient">
                  {{ joke }}
                </span>
            </h1>

            <div class="w-2/4">
                <PrimaryButton
                    text="Tell me another joke!"
                    @click="getRandomJoke"
                />
            </div>
        </section>

        <section class="w-1/3 h-2/3 flex items-center justify-center">
            <div class="w-fit h-fit grid grid-cols-2 gap-7">
                <div
                    v-for="i in 5"
                    class="bg-white shadow p-5 w-fit h-fit flex items-center gap-4 rounded">
                    <div>
                        <img
                            class="w-16 h-16 rounded-full"
                            src="https://placehold.co/65"
                            alt=""
                        >
                    </div>
                    <div>
                        <h1 class="text-3xl border-gradient border-b-3 w-40">
                            LinkedIn
                        </h1>
                        <p class="text-xl">
                            Micha Elmans
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-1/3 h-2/3 flex justify-center items-center">
            <div class="bg-white shadow w-fit h-fit p-5 rounded">
                <div class="flex justify-between">
                    <h1 class="text-4xl">Contact Me</h1>
                </div>
                <div class="border-gradient border-b-4 w-96"/>

                <form
                    @submit.prevent="submit"
                    @keydown.enter.prevent="submit"
                    class="mt-6 flex flex-col gap-6"
                >
                    <SimpleInput
                        name="name"
                        placeholder="Name"
                        v-model="form.name"
                        :error="form.errors.name"
                    />

                    <SimpleInput
                        name="email"
                        placeholder="Email"
                        v-model="form.email"
                        :error="form.errors.email"
                    />

                    <SimpleTextarea
                        name="message"
                        placeholder="Message"
                        v-model="form.message"
                        :error="form.errors.message"
                    />

                    <div class="w-2/5">
                        <PrimaryButton
                            text="Send"
                            @click="submit"
                        />
                    </div>
                    <p class="w-96 text-gray-500">
                        If you want to contact me, you can fill in the form above and I will get back to you as soon as
                        possible. You can also contact me <a class="text-blue hover:border-b-2 hover:border-blue"
                                                             href="https://www.linkedin.com/in/micha-elmans-801144273/"
                                                             target="_blank">on LinkedIn</a> . I am looking forward to
                        hearing from you!
                    </p>
                </form>
            </div>
        </section>

    </main>

</template>
