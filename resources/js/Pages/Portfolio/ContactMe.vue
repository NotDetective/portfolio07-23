<script setup>
import PrimaryButton from "@/Shared/Buttons/PrimaryButton.vue";
import SimpleInput from "@/Shared/Form/SimpleInput.vue";
import {Head, useForm} from "@inertiajs/vue3";
import SimpleTextarea from "@/Shared/Form/SimpleTextarea.vue";
import {ref} from "vue";

defineProps({
    'socials': Object,
})

let form = useForm({
    name: '',
    email: '',
    message: '',
})

const submit = () => {
    alert('submitted')
}
</script>

<template>
    <Head title="Contact" />

    <main
        class="flex justify-between h-full w-full "
    >
        <section class="w-2/3 h-2/3 flex items-center justify-center">
            <div class="w-fit h-fit grid grid-cols-4 gap-7">
                <div
                    v-for="social in socials"
                    class="bg-white shadow p-5 w-fit h-fit flex items-center gap-4 rounded">
                    <div>
                        <a :href="social.link" target="_blank">
                            <img
                                class="w-16 h-16 rounded-full"
                                src="https://placehold.co/65"
                                alt=""
                            >
                        </a>
                    </div>
                    <div>
                        <h1 class="text-3xl border-gradient border-b-3 w-40">
                            {{ social.platform_name }}
                        </h1>
                        <p class="text-xl">
                            {{ social.username }}
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-1/3 h-2/3 flex justify-center items-center grayscale">
            <div class="bg-white shadow w-fit h-fit p-5 rounded">
                <div class="flex justify-between">
                    <h1 class="text-4xl">Contact Me</h1>
                </div>
                <div class="border-gradient border-b-4 w-96"/>

                <p
                    class="text-red-700 mt-2 text-2xl"
                >
                    Comming soon...
                </p>

                <form
                    @submit.prev ent="submit"
                    @keydown.enter.prevent="submit"
                    class="mt-6 flex flex-col gap-6 cursor-not-allowed"
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
                            disabled
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
