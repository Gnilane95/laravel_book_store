<x-layouts.main-layout title="Accueil">
        {{-- incle table all books --}}
        @include('partials._table-allBooks')
        {{-- pagination --}}
        <div class="my-12 mx-72">
            {{ $books->links('pagination::tailwind') }}
        </div>
</x-layouts.main-layout>