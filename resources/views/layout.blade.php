<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <title>Portfolio Micha</title>
</head>
<body>
    
    <header class="px-[5%] w-full h-24 drop-shadow-md bg-white flex justify-between items-center">
        <div class="flex flex-col h-auto justify-center items-center">
            <h1 class="text-4xl font-inter drop-shadow-md text-lightblue font-bold">マイカ</h1>
            <div class="h-2 w-40 bg-lightblue"></div>
            <h1 class="text-4xl font-inter drop-shadow-md text-lightblue font-bold">Micha</h1>
        </div>
        <nav class="flex justify-between w-1/4">
            <a href="/#">
                <h1 class="text-4xl font-inter drop-shadow-md text-lightblue font-bold">About Me</h1>
            </a>
            <a href="/#">
                <h1 class="text-4xl font-inter drop-shadow-md text-lightblue font-bold" >My Work</h1>
            </a>
        </nav>
    </header>

    @yield('content')
    

    <footer>
        <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class=" fill-lightblue fixed bottom-3 right-2/4 hover:cursor-pointer">
            <path d="M480-80 200-360l42-42 208 208v-686h60v686l208-208 42 42L480-80Z"/>
        </svg>
        <div class=" h-24 w-24 rounded-full flex justify-center items-center border-4 border-lightblue fill-lightblue fixed bottom-3 right-3 hover:bg-lightblue hover:fill-white hover:cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" class="rotate-180">
                <path d="M480-80 200-360l42-42 208 208v-686h60v686l208-208 42 42L480-80Z"/>
            </svg>
        </div>
    </footer>

</body>
</html>