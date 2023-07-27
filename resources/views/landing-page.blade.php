@extends('layout')

@section('content')
    <section class="h-screen flex flex-row justify-evenly items-center ">
    
        <div>
            <p class="text-[30px] drop-shadow-md text-primary vor">Software Developer</p>
            <h1 class="w-[800px] text-[40px] drop-shadow-md text-primary font-bold " >Hi, my name is Micha and I am a software developer from the Netherlands.</h1>
        </div>

        <img src="images/cherry-blossom-tree.PNG" alt="cherry blossum tree image" class="w-[740px] h-[460px] rounded-[20px] bg-white drop-shadow-md">

    </section>

    <dialog open="true" class="bottom-9">
        <div class="bg-red text-white w-80 h-40 flex flex-col items-center justify-center blur-none">
            <h1 class="text-2xl">alpha version of website</h1>
            <p class="text-2xl">work in progress</p>
            <a href="beta-build">
                <p class="underline">more infomation? click here</p>
            </a>
        </div>
    </dialog>
@endsection