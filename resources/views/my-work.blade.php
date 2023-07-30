@extends('layout')

@section('content')

<section class="h-screen flex justify-evenly items-center">
    
    <div class="flex flex-col justify-between items-center h-[700px] w-[500px] border-4 border-primary rounded-lg">
        <div class="border-b-4 border-lightpsecondary w-[480px] h-[100px] flex items-center justify-center">
            <h1 class="font-bold text-4xl">GitHub</h1>
        </div>
        <a href="https://github.com/NotDetective" target="_blank">
            <img src="https://avatars.githubusercontent.com/u/90092439?v=4" alt="github account profile" class="w-[220px] h-[220px] rounded-full">
        </a>
        <div class="h-[250px] flex flex-col justify-evenly items-center">
            <p class="text-2xl">NotDetective</p>
            <p class="text-2xl">ROC nijmegen Student</p>
            <a href="https://github.com/NotDetective?tab=repositories" target="_blank">
                <p class="text-2xl">Public Repos: 5</p>
            </a>
        </div>
    </div>
   
    <div class="flex flex-wrap flex-col h-[700px] w-[1200px] overflow-y-auto justify-between items-center">

        @for ($i = 0; $i < 5; $i++ )
        <a href="">
            <div class="w-[500px] h-[330px] bg-white drop-shadow-md flex flex-col items-center justify-around" >
                <div class="border-b-4 border-lightpsecondary w-[480px] h-[80px] flex items-center justify-center">
                    <h1 class="font-bold text-4xl">Repo Name</h1>
                </div>
                <div class="flex flex-col h-[160px] justify-between items-center">
                    <div class="flex w-[150px] items-center justify-evenly">
                        <p class="text-2xl">lorem</p>
                        <p class="text-2xl">project</p>
                    </div>
                    <p class="text-2xl">Updated on Apr 17</p>
                    <p class="text-2xl">Archived</p>
                </div>
            </div>
        </a>
    @endfor
    </div>
</section>

@endsection