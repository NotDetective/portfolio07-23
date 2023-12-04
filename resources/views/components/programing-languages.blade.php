@props(['ProgramingLanguageName', 'id' => null, 'body'])

@php
    $id = $id ?? $ProgramingLanguageName;
@endphp

<div class="flex flex-col items-start w-[360px]">
    <div class="flex items-center">
        <div class="h-[36px] w-[36px] rounded-full" id="{{$id}}"></div>
        <div class="w-[20px]"></div>
        <h1 class="text-[35px]">{{$id}}</h1>
    </div>
    <p>{{$body}}</p>
</div>

