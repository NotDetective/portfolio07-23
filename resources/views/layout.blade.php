<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Portfolio Micha</title>
</head>
<body class="font-inter ">
    
    <header class="px-[5%] w-full h-24 drop-shadow-md bg-white flex justify-between items-center">
        <x-logo></x-logo>
        <nav class="flex justify-between w-1/4">
            <a href="about-me">
                <h1 class="text-4xl drop-shadow-md text-primary font-bold">About Me</h1>
            </a>
            <a href="my-work">
                <h1 class="text-4xl drop-shadow-md text-primary font-bold" >My Work</h1>
            </a>
        </nav>
    </header>

    <main class="h-screen">
        @yield('content') 
    </main>
    
    
    <footer class="w-full h-24 border-t-4 border-primary flex justify-evenly items-center text-primary">
        <div class="w-64 flex items-center justify-between">
            <a href="https://www.linkedin.com/in/micha-elmans-801144273/" target="_blank">
                <img src="images/LI-In-Bug.png" alt="linkedin logo" class="h-11 w-12 hover:scale-125 duration-300">
            </a>
            <a href="https://github.com/NotDetective" target="_blank">
                <img src="images/github-mark.svg" alt="github mark" class="h-12 w-12 hover:scale-125 duration-300">
            </a>
            <a href="404">
                <img src="images/email-icon.svg" alt="mail icon" class="h-12 w-12 hover:scale-125 duration-300">
            </a>
        </div>
        <div class="flex w-96 h-auto justify-between">
            <a href="about-website">
                <p>About this website</p>
            </a>
            <p>© 2023 Micha Elmans</p>
        </div>
    </footer>
</body>
</html>