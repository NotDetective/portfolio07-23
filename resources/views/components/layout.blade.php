<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Portfolio Micha</title>

    @vite('resources/css/app.css')
</head>
<body class="font-sofia-sans text-custom_dark max-w-screen min-h-screen">
<div class="w-full h-full">


    <div class="w-20 h-screen border-r-2 border-custom_dark p-2">
        <div class="w-full h-full flex flex-col items-center">

            <div class="h-1/6">
                <img src="https://avatars.githubusercontent.com/u/56188780?v=4" alt="Micha"
                     class="rounded-full w-14 h-14">
            </div>

            <div class="h-2/6 flex flex-col items-center justify-between">

                <x-nav-element
                    route="homepage"
                >
                    <svg
                        class="w-12 h-12"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 34" fill="none">
                        <path
                            d="M3.99967 29.8333H9.49967V18.8333H20.4997V29.8333H25.9997V13.3333L14.9997 5.08333L3.99967 13.3333V29.8333ZM0.333008 33.5V11.5L14.9997 0.5L29.6663 11.5V33.5H16.833V22.5H13.1663V33.5H0.333008Z"
                            fill="url(#paint0_linear_265_116)"/>
                        <defs>
                            <linearGradient id="paint0_linear_265_116" x1="14.9997" y1="0.5" x2="14.9997" y2="33.5"
                                            gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0FA3E2"/>
                                <stop offset="0.677083" stop-color="#6366F1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </x-nav-element>

                <x-nav-element
                    route="about-me"
                >
                    <svg
                        class="w-12 h-12"
                        xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path
                            d="M14.9997 15C12.983 15 11.2566 14.2819 9.82051 12.8458C8.3844 11.4097 7.66634 9.68331 7.66634 7.66665C7.66634 5.64998 8.3844 3.92359 9.82051 2.48748C11.2566 1.05137 12.983 0.333313 14.9997 0.333313C17.0163 0.333313 18.7427 1.05137 20.1788 2.48748C21.615 3.92359 22.333 5.64998 22.333 7.66665C22.333 9.68331 21.615 11.4097 20.1788 12.8458C18.7427 14.2819 17.0163 15 14.9997 15ZM0.333008 29.6666V24.5333C0.333008 23.4944 0.600369 22.5396 1.13509 21.6687C1.66981 20.7979 2.38023 20.1333 3.26634 19.675C5.16079 18.7278 7.08578 18.0173 9.04134 17.5437C10.9969 17.0701 12.983 16.8333 14.9997 16.8333C17.0163 16.8333 19.0025 17.0701 20.958 17.5437C22.9136 18.0173 24.8386 18.7278 26.733 19.675C27.6191 20.1333 28.3295 20.7979 28.8643 21.6687C29.399 22.5396 29.6663 23.4944 29.6663 24.5333V29.6666H0.333008ZM3.99967 26H25.9997V24.5333C25.9997 24.1972 25.9156 23.8916 25.7476 23.6166C25.5795 23.3416 25.358 23.1278 25.083 22.975C23.433 22.15 21.7677 21.5312 20.0872 21.1187C18.4066 20.7062 16.7108 20.5 14.9997 20.5C13.2886 20.5 11.5927 20.7062 9.91217 21.1187C8.23162 21.5312 6.56634 22.15 4.91634 22.975C4.64134 23.1278 4.41981 23.3416 4.25176 23.6166C4.0837 23.8916 3.99967 24.1972 3.99967 24.5333V26ZM14.9997 11.3333C16.008 11.3333 16.8712 10.9743 17.5893 10.2562C18.3073 9.53817 18.6663 8.67498 18.6663 7.66665C18.6663 6.65831 18.3073 5.79512 17.5893 5.07706C16.8712 4.35901 16.008 3.99998 14.9997 3.99998C13.9913 3.99998 13.1281 4.35901 12.4101 5.07706C11.692 5.79512 11.333 6.65831 11.333 7.66665C11.333 8.67498 11.692 9.53817 12.4101 10.2562C13.1281 10.9743 13.9913 11.3333 14.9997 11.3333Z"
                            fill="url(#paint0_linear_265_118)"/>
                        <defs>
                            <linearGradient id="paint0_linear_265_118" x1="14.9997" y1="0.333313" x2="14.9997"
                                            y2="29.6666" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0FA3E2"/>
                                <stop offset="0.677083" stop-color="#6366F1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </x-nav-element>

                <x-nav-element
                    route="my-work"
                >
                    <svg
                        class="w-12 h-12"
                        xmlns="http://www.w3.org/2000/svg" width="38" height="36" viewBox="0 0 38 36"
                        fill="none">
                        <path
                            d="M4.33366 35.5C3.32533 35.5 2.46213 35.141 1.74408 34.4229C1.02602 33.7049 0.666992 32.8417 0.666992 31.8334V11.6667C0.666992 10.6584 1.02602 9.79516 1.74408 9.0771C2.46213 8.35905 3.32533 8.00002 4.33366 8.00002H11.667V4.33335C11.667 3.32502 12.026 2.46183 12.7441 1.74377C13.4621 1.02571 14.3253 0.666687 15.3337 0.666687H22.667C23.6753 0.666687 24.5385 1.02571 25.2566 1.74377C25.9746 2.46183 26.3337 3.32502 26.3337 4.33335V8.00002H33.667C34.6753 8.00002 35.5385 8.35905 36.2566 9.0771C36.9746 9.79516 37.3337 10.6584 37.3337 11.6667V31.8334C37.3337 32.8417 36.9746 33.7049 36.2566 34.4229C35.5385 35.141 34.6753 35.5 33.667 35.5H4.33366ZM4.33366 31.8334H33.667V11.6667H4.33366V31.8334ZM15.3337 8.00002H22.667V4.33335H15.3337V8.00002Z"
                            fill="url(#paint0_linear_265_122)"/>
                        <defs>
                            <linearGradient id="paint0_linear_265_122" x1="19.0003" y1="0.666687" x2="19.0003"
                                            y2="35.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0FA3E2"/>
                                <stop offset="0.677083" stop-color="#6366F1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </x-nav-element>

                <x-nav-element
                    route="contact"
                >
                    <svg
                        class="w-12 h-12"
                        xmlns="http://www.w3.org/2000/svg" width="38" height="30" viewBox="0 0 38 30"
                        fill="none">
                        <path
                            d="M4.33366 29.6666C3.32533 29.6666 2.46213 29.3076 1.74408 28.5896C1.02602 27.8715 0.666992 27.0083 0.666992 26V3.99998C0.666992 2.99165 1.02602 2.12845 1.74408 1.4104C2.46213 0.692341 3.32533 0.333313 4.33366 0.333313H33.667C34.6753 0.333313 35.5385 0.692341 36.2566 1.4104C36.9746 2.12845 37.3337 2.99165 37.3337 3.99998V26C37.3337 27.0083 36.9746 27.8715 36.2566 28.5896C35.5385 29.3076 34.6753 29.6666 33.667 29.6666H4.33366ZM19.0003 16.8333L4.33366 7.66665V26H33.667V7.66665L19.0003 16.8333ZM19.0003 13.1666L33.667 3.99998H4.33366L19.0003 13.1666ZM4.33366 7.66665V3.99998V26V7.66665Z"
                            fill="url(#paint0_linear_265_120)"/>
                        <defs>
                            <linearGradient id="paint0_linear_265_120" x1="19.0003" y1="0.333313" x2="19.0003"
                                            y2="29.6666" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0FA3E2"/>
                                <stop offset="0.677083" stop-color="#6366F1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </x-nav-element>
            </div>

            <div class="flex-1 h-full w-full flex flex-col">
                <div class="flex-1">
                    {{-- space for socials --}}
                </div>
                <button class="flex items-center justify-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M10.0313 27.5L7.8125 25.2812L18.0938 15L7.8125 4.71875L10.0313 2.5L22.5313 15L10.0313 27.5Z" fill="url(#paint0_linear_281_329)"/>
                        <defs>
                            <linearGradient id="paint0_linear_281_329" x1="15.1719" y1="2.5" x2="15.1719" y2="27.5" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0FA3E2"/>
                                <stop offset="0.677083" stop-color="#6366F1"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </button>
            </div>

            <main>
                {{ $slot }}
            </main>

        </div>
@vite('resources/js/app.js')
</body>
</html>
