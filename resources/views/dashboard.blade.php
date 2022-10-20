@php
    $styleLink="font-bold hover:text-red-700 hover:underline underline-offset-4 block pb-5 text-blue-700"
@endphp
<x-layouts.main-layout title="Dashbord">
    <div class="container">
        <h1 class="uppercase text-xl text-red-700 font-black pt-5">
            Bienvenue <span class="text-primary-focus underline">{{ Auth::user()->name }}</span> sur ton Dashbord
        </h1>
        <div class="py-12">
            @auth
            <a href="" class="{{ $styleLink }}"></a>
                <a href="" class="{{ $styleLink }}"></a>
            @endauth
        </div>
    </div>
</x-layouts.main-layout>
