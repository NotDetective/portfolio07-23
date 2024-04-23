<script>
    export default {
        layout: null,
    };
</script>

<script setup>

    import {useForm} from "@inertiajs/vue3";

    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = () => {
        form.post(route('login.post'));
    }

</script>

<template>



</template>
