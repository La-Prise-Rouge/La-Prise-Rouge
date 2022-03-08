<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Titre --}}
        <title>@yield('Titre')</title>

        {{-- Style --}}
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
        <script src="{{asset('js/app.js')}}" language="javascript"></script>
        <link rel="stylesheet" href="../node_modules/@glidejs/glide/dist/css/glide.core.min.css">
        <script src="../node_modules/@glidejs/glide/dist/glide.min.js"></script>

        {{-- Lien à Ion-Icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>

    <body class="antialiased">

        {{-- Menu supérieur --}}
        <header class="flex flex-row h-16 align-middle items-center justify-between bg-white">

            {{-- Switch de navigation --}}
            <button class="w-14 h-full
                p-2
                bg-red-600
                z-20 md:hidden"
                id="boutton_nav">
                <ion-icon name="menu-outline"
                    class="flex
                        h-full w-full
                        text-sm text-white"
                    id="ouvre_nav"></ion-icon>
                <ion-icon name="close-outline"
                    class="hidden h-full w-full
                        text-sm text-white"
                    id="ferme_nav">></ion-icon>
            </button>

            {{-- Menu de navigation --}}
            <div class="absolute invisible
                top-0 left-0
                flex flex-col
                w-full h-full
                items-center justify-between
                bg-red-600
                text-white font-semibold
                z-10
                md:static md:visible
                md:flex-row
                md:bg-transparent
                md:text-black md:font-normal"
                id="menu_nav">
                <a href="{{ route('Accueil') }}"
                    class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">Accueil</a>
                <a href="{{ route('Evenements') }}"
                    class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">Evenements</a>
                <a href="#"
                    class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all" >Don du Sang</a>
                <a href="#"
                    class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">Don de Moelle</a>
                <a href="#"
                    class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">FAQ</a>
            </div>

            {{-- Icone Utilisateur --}}
            @auth
                <button id="buttonUser" class="h-full min-w-fit bg-white hover:bg-red-600 hover:text-white transition-all">
                    <img src="{{ asset('storage/icone_utilisateur.png') }}" class="h-full p-3 invert-0 hover:invert">
                </button>
            @else
                <a href="{{ route('login') }}" class="h-full min-w-fit bg-white hover:bg-red-600 hover:text-white transition-all">
                    <img src="{{ asset('storage/icone_utilisateur.png') }}" class="h-full p-3 invert-0 hover:invert">
                </a>
            @endauth

        </header>

        @auth
            <div id="formUser" class="
                absolute
                hidden
                right-0
                w-fit h-fit
                rounded-b-lg
                bg-white
                shadow-xl shadow-gray-600">
                <div class="
                    flex flex-col
                    w-full
                    py-4
                    text-left">
                    @if (Auth::user()->admin == 1)

                    @elseif (Auth::user()->admin == 0)
                        <a href="#" class="w-full px-4 bg-transparent hover:bg-red-500 hover:text-white hover:font-semibold hover:scale-x-105 transition-all">Espace administrateur</a>
                        <a href="#" class="w-full pl-8 pr-4 bg-transparent hover:bg-red-500 hover:text-white hover:font-semibold hover:scale-x-105 transition-all">↳ Gestion des utilisateurs</a>
                        <a href="#" class="w-full pl-8 pr-4 bg-transparent hover:bg-red-500 hover:text-white hover:font-semibold hover:scale-x-105 transition-all">↳ Gestion des évenements</a>
                    @endif

                    <form action="{{ route('logout')}}" method="POST" >
                        @csrf
                        <input type="submit" class="w-full px-4 bg-transparent hover:bg-red-500 hover:text-white" value="Déconnexion">
                    </form>

                </div>
            </div>
        @endauth

        {{-- Bouton de participation au Don --}}
        <a href="{{ route('EvenementEnCours') }}" class="
            fixed flex bottom-0 left-0
            w-1/6 h-16 p-5 min-w-fit
            justify-center items-center
            text-white
            bg-red-600 bg-opacity-90
            hover:w-1/4 hover:h-20 hover:font-semibold hover:bg-opacity-100
            transition-all">

            {{-- Texte du Bouton --}}
            <p>
                Participez au Don
            </p>

        </a>

        {{-- Corps de la page --}}
        @yield('Corps de la page')

        {{-- Pied de page --}}
        <footer class="flex
            h-60
            items-center justify-center
            mt-10 
            bg-zinc-800
            text-white">
            FOOTER
        </footer>
    </body>

</html>
