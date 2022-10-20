<div class="bg-black flex items-center justify-between p-5">
    <div class="">
        <a href="/" class=" uppercase text-2xl font-black"><span class="text-white">Book.</span><span class="text-red-500 italic">Store</span></a>
    </div>
    <div class="">
        @guest
            <a href="{{ route('login') }}" class="font-semibold hover:text-orange-600 hover:underline underline-offset-4 text-white text-xl pr-5">
                Se connecter
            </a>
            <a href="{{ route('register') }}" class="font-semibold hover:text-orange-600 hover:underline underline-offset-4 text-white text-xl">
                S'inscrire
            </a>
        @endguest
        @auth
            <div class="flex justify-center gap-7 items-center">
                {{-- <p class="text-white font-bold">{{ Auth::user()->name }}</p> --}}
                {{-- <a href="{{ route('dashboard') }}" class="font-semibold hover:text-orange-600 hover:underline underline-offset-4 text-white text-xl pr-5">
                    Dashbord
                </a> --}}
                <a href="{{ route('books.create') }}" class="font-semibold hover:text-orange-600 hover:underline underline-offset-4 text-white text-xl pr-5">
                    Ajouter un livre
                </a>
                <x-btn-logout />
            </div>
        @endauth
    </div>
</div>