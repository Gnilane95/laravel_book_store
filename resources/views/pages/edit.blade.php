<x-layouts.main-layout title="Modifier un livre">
    <h1 class="text-center text-4xl font-black text-gray-600 mt-20">Modifier un livre</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mx-56 shadow-lg p-5">
            {{-- Title --}}
            <div class="">
                <label for="title" class="font-bold ">Titre du livre</label>
                <input type="text" name="title" class="block  rounded-lg border-gray-400 mt-2" value="{{ old('title', $book->title) }}">
                <x-error-msg name="title" />
            </div>
            {{-- Description --}}
            <div class="mt-5">
                <label for="description" class="font-bold">Description</label>
                <textarea type="text" name="description" class="block rounded-lg border-gray-400 mt-2 " value="">
                    {{ old('description',  $book->description) }}
                </textarea>
                <x-error-msg name="description" />
            </div>
            {{-- Price --}}
            <div class="mt-5">
                <label for="price" class="font-bold">Prix du livre</label>
                <input type="text" name="price" class="block  rounded-lg border-gray-400 mt-2" value="{{ old('price',  $book->price) }}">
                <x-error-msg name="price" />
            </div>
            {{-- Author --}}
            <div class="mt-5">
                <label for="author" class="font-bold">Auteur du livre</label>
                <input type="text" name="author" class="block  rounded-lg border-gray-400 mt-2" value="{{ old('author',  $book->author) }}">
                <x-error-msg name="author" />
            </div>
            {{-- Nbre pages --}}
            <div class="mt-5">
                <label for="nombre_pages" class="font-bold">Nombre de pages</label>
                <input type="text" name="nombre_pages" class="block rounded-lg border-gray-400 mt-2" value="{{ old('nombre_pages',  $book->nombre_pages) }}">
                <x-error-msg name="nombre_pages" />
            </div>
            {{-- image --}}
            <div class="mt-5">
                <label for="url_img" class="font-bold">Image</label>
                <input type="file" name="url_img" class="block rounded-lg border-gray-400 mt-2">
                <x-error-msg name="url_img" />
            </div>
            <div class="mt-5">
                <button class="btn btn-primary " type="submit">Modifier</button>
            </div>
        </div>
    </form>
</x-layouts.main-layout>