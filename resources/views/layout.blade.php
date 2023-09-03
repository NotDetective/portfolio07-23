<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Portfolio Micha</title>
</head>
<body class="font-inter overflow-x-hidden">

    <header class="px-[5%] w-full h-24 drop-shadow-lg bg-white flex justify-between items-center">
        <a href="home">
            <x-logo></x-logo>
        </a>
        <div class="w-[500px]">
            <nav class="flex justify-between w-full">
                <x-nav-button href="about-me">About Me</x-nav-button>
                <x-nav-button href="blog">Blog</x-nav-button>
                <x-nav-button href="my-work">My Work</x-nav-button>
            </nav>
        </div>
    </header>

    @yield('content') 
      
</body>
</html>