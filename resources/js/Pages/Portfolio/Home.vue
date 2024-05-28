<template>
    <div class="w-full h-full flex p-5">
        <div class="w-full h-full flex">
            <section class="h-5/6 w-full flex items-center justify-center">

                <div class="flex flex-col items-center">
                    <h1 class="text-8xl text-gradient flex flex-col items-center">
                        Hi, I'm Micha.
                        <span>Nice to meet ya!</span>
                    </h1>

                    <p class="text-5xl text-custom-dark-purple/60">
                        I'm a full-stack developer from The Netherlands.
                    </p>
                    <p
                        class="text-2xl text-custom-dark-purple/60"
                    >
                        {{ message }}
                    </p>
                </div>
            </section>
        </div>
    </div>
</template>

<script setup>

let possibleMessages = [
    'This website is personalised for you. (that why you see this message)',
    'Websites are cool, right? I made this one myself. (with Laravel, vue 3 and TailwindCSS)',
    'This is a 2 part message. (part 2)',
    'Some people call me a nerd. I don\'t know why.',
    'Some of messages are random. (like this one)',
    'And some of them are not. (like this one)',
    'I like to learn new things.',
    'I like to work on projects.',
    'I like to work on projects with other people.',
    'I like to work on projects with other people that are also passionate about the project.',
    'I like to work on projects with other people that are also passionate about the project and are also passionate about learning new things.',
    'Why do these messages keep getting longer?',
    'O wait, I already said that.',
    'sometimes I like to repeat myself.',
    'some of these messages are not true.',
    'some of these messages I have never even seen before.',
    'Did you know your not the first person to see this message?',
    'Did you know your not the second person to see this message?',
    ':)',
    'The head of a jellyfish is called the "Bell".',
    'Did you know that if you that if you press the "F12" key on your keyboard you can see the code of this website?',
    'Did you know that if you that if you press the "Alt + F4" key on your keyboard you get a free cookie?',
    'Fun fact: The first oranges weren\'t orange.',
    'Fun fact: A strawberry isn\'t a berry but a banana is.',
    'Fun fact: The lighter was invented before the match.',
    'Are you still reading these messages?',
    'I hope you are having a good day.',
    'I hope you are having a good day and if you are not, I hope it gets better.',
    'If you are curious about me, you can find more information on the other pages.',
    'if you are called "Wout" Can you please stop reading these messages?',
    'I think I\'m running out of messages.',
    'I have way to much free time.',
    'I wonder how many messages there are.',
    'Had to google how to spell "wonder".',
    'I\'m not a native English speaker.',
    'Never gone give you up, never gone let you down, never gone run around and desert you.',
    'Never gone make you cry, never gone say goodbye, never gone tell a lie and hurt you.',
    'I\'m sorry for the rick roll. (not really)',
    'What is your favorite color? Mine is #0FA3E2',
    'Some say that a website is never finished. And I agree.',
    'QUIT READING THESE MESSAGES!',
    'Boo!',
    'Tequila',
    'I\'m not a robot.',
    'You are the 1524 Visitor of this website.',
    'Crazy? I was crazy once. They put me in a room. A rubber room. A rubber room with rats. And rats make me crazy.',
    'If (you === "Wout") { leave(); }',
]

possibleMessages.push('So there are ' + possibleMessages.length + 1 + ' messages.');

let message = possibleMessages[Math.floor(Math.random() * possibleMessages.length)]

</script>
