<x-layouts.main-layout title="Update">
    <h1 class="text-center text-4xl font-black text-gray-600 my-10">Modifier un film</h1>
    <form action="{{ route('videos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mx-56 shadow-lg p-5">
            {{-- Title --}}
            <div class="">
                <label for="title" class="font-bold ">Titre du film</label>
                <input type="text" name="title" class="block  w-72 rounded-lg border-gray-400 mt-2" value="{{ old('title') }}">
                <x-error-msg name="title" />
            </div>
            {{-- Actors --}}
            <div class="mt-5">
                <label for="actors" class="font-bold">Acteurs du film</label>
                <input type="text" name="actors" class="block  w-72 rounded-lg border-gray-400 mt-2" value="{{ old('actors') }}">
                <x-error-msg name="actors" />
            </div>
            {{-- Nationality --}}
            <div class="mt-5">
                <label for="nationality" class="font-bold">Nationalité</label>
                <input type="text" name="nationality" class="block w-72 rounded-lg border-gray-400 mt-2" value="{{ old('nationality') }}">
                <x-error-msg name="nationality" />
            </div>
            {{-- Year --}}
            <div class="mt-5">
                <label for="year_created" class="font-bold">Année de création</label>
                <input type="text" name="year_created" class="block w-72 rounded-lg border-gray-400 mt-2" value="{{ old('year_created') }}">
                <x-error-msg name="year_created" />
            </div>
            {{-- Description --}}
            <div class="mt-5">
                <label for="description" class="font-bold">Description</label>
                <textarea type="text" name="description" class="block w-72 rounded-lg border-gray-400 mt-2" value="">
                    {{ old('description') }}
                </textarea>
                <x-error-msg name="description" />
            </div>
            {{-- image --}}
            <div class="mt-5">
                <label for="url_img" class="font-bold">Image</label>
                <input type="file" name="url_img" class="block w-72 rounded-lg border-gray-400 mt-2" value="">
                <x-error-msg name="url_img" />
            </div>
            <div class="mt-5">
                <button class="btn btn-primary " type="submit">Envoyer</button>
            </div>
        </div>
    </form>
</x-layouts.main-layout>