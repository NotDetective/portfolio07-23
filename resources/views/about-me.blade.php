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
        
        <div class="h-[775px] w-[750px] bg-white drop-shadow-md flex flex-col items-center justify-between p-7">
            <div class="w-[700px] h-[56px] border-b-4 border-lightpsecondary flex items-center justify-center">
                <h1 class="text-4xl font-bold">Skills</h1>
            </div>
            <div class="grid grid-cols-2">

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#E44B23] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">HTML</h1>
                    </div>
                    <p>Used to make websites</p>
                </div>

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#563D7C] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">CSS</h1>
                    </div>
                    <p>Used to style websites</p>
                </div>

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#F1E05A] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">JavaScript</h1>
                    </div>
                    <p>Used to make websites interactive</p>
                </div>

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#B07219] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">Java</h1>
                    </div>
                    <p>Used for making applications</p>
                </div>

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#4F5D95] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">PHP</h1>
                    </div>
                    <p>Used for backend of websites</p>
                </div>

                <div class="flex flex-col items-start w-[360px]">
                    <div class="flex items-center">
                        <div class="bg-[#4F5D95] h-[36px] w-[36px] rounded-full"></div>
                        <div class="w-[20px]"></div>
                        <h1 class="text-[35px]">Laravel</h1>
                    </div>
                    <p>framework of php</p>
                </div>
            </div>
            <div class="border-t-4 border-lightpsecondary w-[700px] flex flex-col h-[300px] justify-evenly items-center">
                <h1 class="text-3xl font-bold">What am I doing now?</h1>
                <div class="flex justify-evenly w-[750px]">
                    <p class="text-2xl w-[350px]">I am now studying to become a software developer.</p>
                    <p class="text-2xl w-[350px]">I am currently going to ROC Nijmegen and I am a year one student. </p>
                </div>
            </div>
        </div>
        

    </section>
@endsection