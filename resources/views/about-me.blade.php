@extends('layout')

@section('content')

    <section class="h-screen flex justify-evenly items-center">
    
        <div class="h-[775px] w-[550px] bg-white drop-shadow-md flex flex-col items-center justify-between p-7">
            <div class="flex flex-col items-center justify-around h-96">
                <h1 class="font-bold text-4xl">Micha</h1>
                <img src="images/1682059021436.jpg" alt="linkedin-profile-photo" class="rounded-full w-[300px] h-[300px] drop-shadow-md">
            </div>
            <div class="flex flex-col items-center h-80 w-[500px] justify-evenly border-t-4 border-lightpsecondary">
                <div class="flex items-center">
                    <h1 class="text-4xl">age</h1>
                    <h1 class="m-3 text-5xl">17</h1>
                </div>
                <div class="flex flex-col items-center">
                    <p class="text-4xl">Languages</p>
                    <p class="text-4xl">Dutch & English</p>
                </div>
            </div>
        </div>
    
        <div class="">
            <h1>Skills</h1>
        </div>
        <div>
            {{-- alls programming lauges --}}
        </div>
        <div>
            <h1></h1>
            <div>
                <p></p>
                <p></p>
            </div>
        </div>

    </section>
@endsection