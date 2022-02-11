<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
class="w-full h-full">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Titre --}}
        <title>@yield('Titre')</title>

        {{-- Style --}}
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>

        {{-- Lien à Ion-Icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>

    <body class="antialiased w-full h-full">

        {{-- Menu supérieur --}}
        <header class="flex flex-row h-16 align-middle items-center justify-between bg-white">

            {{-- Logo --}}
            <img class="w-32 h-full bg-red-600"/>


            {{-- Boutons de navigation --}}
            <div class="flex flex-row h-full align-middle justify-between">
                <a {{(request()->routeIs('Accueil')) ? 'active' : ''}} href="{{ route('Accueil') }}" class="h-full min-w-fit  p-5 bg-white  hover:bg-red-600 hover:text-white hover:font-semibold hover:scale-x-105  transition-all">Accueil</a>
                <a {{(request()->routeIs('Evenements')) ? 'active' : ''}} href="{{ route('Evenements') }}" class="h-full p-5 bg-white hover:bg-red-600 hover:text-white hover:font-semibold hover:scale-x-105 transition-all">Evenements</a>
                <a href="#" class="h-full min-w-fit  p-5 bg-white  hover:bg-red-600 hover:text-white hover:font-semibold hover:scale-x-105  transition-all">Don du Sang</a>
                <a href="#" class="h-full min-w-fit  p-5 bg-white hover:bg-red-600 hover:text-white hover:font-semibold hover:scale-x-105  transition-all">Don de Moelle</a>
                <a href="#" class="h-full p-5 bg-white hover:bg-red-600 hover:text-white hover:font-semibold hover:scale-x-105  transition-all">FAQ</a>
            </div>

            {{-- Icone Utilisateur --}}
            <a href="#" class="h-full min-w-fit bg-white hover:bg-red-600 hover:text-white transition-all">
                <img src="{{ asset('storage/icone_utilisateur.png') }}" class="h-full p-3 invert-0 hover:invert">
            </a>

        </header>

        {{-- Bouton de participation au Don --}}
        <a href="{{ route('EvenementEnCours') }}" class="
            fixed flex bottom-0 left-0
            w-1/6 h-16 p-5 min-w-fit
            justify-center items-center
            text-white
            bg-red-600 bg-opacity-90
            hover:w-1/4 hover:h-20 hover:font-semibold hover:bg-opacity-100
            transition-all z-10">

            {{-- Texte du Bouton --}}
            <p>
                Participez au Don
            </p>

        </a>

        {{-- Corps de la page --}}
        @yield('Corps de la page')

        {{-- Pied de page --}}
        <footer class="h-32">

        </footer>
    </body>
</html>
