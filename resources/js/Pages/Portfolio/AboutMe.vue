<script setup>
import {Head} from "@inertiajs/vue3";
import {ref} from "vue";

const calculateAge = () => {
    const today = new Date();
    const birthDate = new Date("2006-03-09");

    let age = today.getFullYear() - birthDate.getFullYear();
    const monthDiff = today.getMonth() - birthDate.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }

    return age;
}
</script>

<template>
    <Head title="About me" />


    <div
        class="w-full h-full flex justify-between py-7"
    >
        <section class="h-full w-1/4 flex justify-center">
            <div class="w-fit h-fit px-5 py-8 bg-white shadow-md rounded-lg flex flex-col items-center gap-5 text-3xl">
                <h1 class="text-4xl text-center">Micha</h1>
                <img
                    class="rounded-full w-60 h-60"
                    :src=" 'images/profile-photo/me.jpeg'"
                    alt="profile picture"
                >
                <div class="border-gradient border-b-4 w-80"/>
                <p>Age {{ calculateAge() }}</p>
                <div class="text-center gap-2">
                    <p>Languages:</p>
                    <p>Dutch & English</p>
                </div>
            </div>
        </section>

        <section class="h-full w-4/6 flex-col flex gap-y-56 items-end">
            <div class="w-10/12 px-5 py-8 bg-white shadow-md rounded-lg flex flex-col gap-5 text-3xl">
                <h1 class="text-4xl text-left">Skills</h1>
                <div class="border-gradient border-b-4 self-center w-full"/>

                <div class="grid grid-cols-3 gap-4">

                        <div
                            v-for="i in 8"
                        >
                            <div class="flex gap-3">
                                <div class="w-9 h-9 bg-[#E44B23] rounded-full" />
                                <p>HTML</p>
                            </div>
                            <p class="text-xl">
                                Used to make websites
                            </p>
                        </div>

                </div>

            </div>

            <div class="w-9/12 px-5 py-3 bg-white shadow-md rounded-lg flex flex-col items-center gap-6 text-2xl">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis lorem vitae ante tempor, eu auctor mi mattis. Pellentesque eget dui sed nisi ullamcorper dapibus sit amet vel justo
                </p>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sagittis lorem vitae ante tempor, eu auctor mi mattis. Pellentesque eget dui sed nisi ullamcorper dapibus sit amet vel justo
                </p>
            </div>
        </section>
    </div>
</template>
