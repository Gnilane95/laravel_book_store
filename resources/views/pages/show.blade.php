<x-layouts.main-layout title="Show Book">
    <h1 class="text-center text-4xl font-black text-gray-600 my-20">{{ $book->title }}</h1>
    <div class="flex items-center container space-x-8 my-20">
        <img src="{{ $book->url_img }}" alt="{{ $book->title }}" class="max-w-xl">
        <div class="">
            <p class="text-xl"><span class="font-bold ">Description :</span> {{ $book->description }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Auteur :</span> {{ $book->author }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Prix :</span> {{ $book->price }}</p>
            <p class="text-xl"><span class="font-bold mb-5">Nombres de pages :</span> {{ $book->nombre_pages }}</p>

            {{-- @forelse ($video->nom_actors as $actor)
                <div class="flex space-x-5">
                    <span class="text-xl"> {{ $actor->name }} </span>
                </div>
            @empty
                <p class="text-xl">Acteurs inconnus</p>
            @endforelse --}}

        </div>
    </div>
    {{-- @auth
        <div class=" flex mx-44 space-x-6 mt-5">
            <x-btn-delete :video="$video" />
            <a href="{{ route ('videos.edit', $video->id) }}" class="btn btn-success">Modifier</a>
        </div>
        <div class="mx-44 space-x-6 mt-20 bg-gray-400 p-5">
            <h2 class="text-xl font-bold pl-7 pb-3">Ajouter un acteur</h2>
            <form action="{{ route('actor.store', $video->id) }}" method="POST">
                @csrf
                <input type="text" name="name">
                <button class="btn btn-primary rounded-none" type="submit">Ajouter</button>
                <x-error-msg name="name" />
            </form>
        </div>
    @endauth --}}
</x-layouts.main-layout>