@props(['route'])

@php($active = request()->route()->named($route))

<a href="{{ route($route) }}"
   class="p-1 border-b-4 transition duration-150 ease-out hover:ease-in @if($active)border-gray-400 @else border-background hover:border-gray-400 @endif "
>
    {{ $slot }}
</a>
