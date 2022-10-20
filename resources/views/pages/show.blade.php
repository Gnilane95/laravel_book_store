@php
    $current_user = Auth::user()->is_admin;
@endphp
<x-layouts.main-layout title="Show Book">
    <h1 class="text-center text-4xl font-black text-gray-600 my-20">{{ $book->title }}</h1>
    {{-- show book --}}
    <div class="flex items-center container space-x-8 mt-20">
        <img src="{{ asset ('storage/'.$book->url_img) }}" alt="{{ $book->title }}" class="max-w-xl">
        <div class="">
            <p class="text-xl"><span class="font-bold ">Description :</span> {{ $book->description }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Auteur :</span> {{ $book->author }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Prix :</span> {{ $book->price }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Nombres de pages :</span> {{ $book->nombre_pages }}</p>
        </div>
    </div>
    {{-- btn delete and edit --}}
    @auth
        @if (Auth::user()->is_admin == 1)
            <div class=" flex container space-x-6 mt-5">
                <x-btn-delete :book="$book" />
                <a href="{{ route ('books.edit', $book->id) }}" class="btn btn-success">Modifier</a>
            </div>
        @endif
    @endauth
</x-layouts.main-layout>