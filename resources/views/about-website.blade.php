@extends('layout')

@section('content')

<section class="flex justify-evenly items-center h-screen ">
    <div class="flex justify-evenly items-center flex-col bg-red text-white w-[750px] h-[250px] text-2xl">
        <p>this website is a very early build of for my portfolio website</p>
        <p>it is still under fairly often construction</p>
        <p>form design to styling to adding fuctions</p>
        <p>it a Laravel project with tailwind css for styling</p>
    </div>
    <div class="border-4 border-primary bg-white h-[250px] w-[500px] text-xl flex flex-col items-center">
        <h1 class="font-bold">thing to come that are still under construction</h1>
        <div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>Blog about me</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>A option to change site for english to dutch</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>Mobile and tablet support</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>A beter About website page</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>A contact page</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>Showing all github repositories</p>
            </div>
            <div class="flex items-center">
                <div class="rounded-full w-4 h-4 bg-primary"></div>
                <p>And more that are smaller but still needed</p>
            </div>
        </div>
    </div>
</section>

@endsection