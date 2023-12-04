<script setup>

let text = `<?php echo $text; ?>`;

</script>

<template>
    <div class="w-full h-full flex p-5">
        <div class="w-full h-full flex">
            <section class="h-5/6 w-1/2 flex items-center justify-center">

                <div class="flex flex-col">
                    <h1 class="text-7xl text-gradient">
                        Hi,
                        <br>
                        I'm Micha,
                        <br>
                        A software dev,
                        <br>
                        From the Netherlands.
                    </h1>

                    <p class="text-4xl text-purpleDark/60">Software Developer student</p>
                </div>

            </section>

            <section class="h-full w-1/2 flex items-center text-right mr-5">
                <pre class="h-11/12">
                    <code class="text-2xl text-gradient w-full">
                        {{ text }}
                    </code>
                </pre>
            </section>
        </div>
    </div>
</template>
