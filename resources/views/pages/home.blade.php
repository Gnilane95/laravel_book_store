<x-layouts.main-layout title="Accueil">
        @include('partials._table-allBooks')
        <div class="my-12 mx-72">
            {{ $books->links('pagination::tailwind') }}
        </div>
</x-layouts.main-layout>