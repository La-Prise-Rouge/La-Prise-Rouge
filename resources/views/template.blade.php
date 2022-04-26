<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- Titre --}}
        <title>@yield('Titre')</title>
        <link rel="icon" type="image/ico" href="/la-prise-rouge/public/storage/goute_de_sang.ico"/>

        {{-- Style --}}
        <link href="{{ asset('css/app.css') }}" rel='stylesheet'>
        <script src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" href="/la-prise-rouge/node_modules/@glidejs/glide/dist/css/glide.core.min.css">
        <script src="/la-prise-rouge/node_modules/@glidejs/glide/dist/glide.min.js"></script>
        <script src="/la-prise-rouge/node_modules/tw-elements/dist/js/index.min.js"></script>

        {{-- Lien à Ion-Icon --}}
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </head>

    <body class="flex flex-col
        h-fit min-h-screen antialiased">

        {{-- Menu supérieur --}}
        <header class="
            flex flex-row
            w-full h-16
            align-middle items-center justify-between
            bg-white">

            {{-- Switch de navigation --}}
            <button class="w-14 h-full
                p-2
                bg-red-600
                z-20 md:hidden"
                id="boutton_nav">

                {{-- Ouvrir le menu --}}
                <ion-icon name="menu-outline"
                    class="flex
                        h-full w-full
                        text-sm text-white"
                    id="ouvre_nav"></ion-icon>

                {{-- Fermer le menu --}}
                <ion-icon name="close-outline"
                    class="hidden h-full w-full
                        text-sm text-white"
                    id="ferme_nav"></ion-icon>

            </button>

            {{-- Menu de navigation (Fil d'Arianne) --}}
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
                @yield('menu_navigation')

            </div>

            {{-- Icone Utilisateur --}}
            @auth
                {{-- Si on est connecté --}}
                <button id="buttonUser" class="h-full min-w-fit bg-white hover:bg-red-600 hover:text-white transition-all">
                    <img src="{{ asset('storage/icone_utilisateur.png') }}" class="h-full p-3 invert-0 hover:invert">
                </button>
            @else
                {{-- Si on n'est pas connecté --}}
                <a href="{{ route('login') }}" class="h-full min-w-fit bg-white hover:bg-red-600 hover:text-white transition-all">
                    <img src="{{ asset('storage/icone_utilisateur.png') }}" class="h-full p-3 invert-0 hover:invert">
                </a>
            @endauth

        </header>

        {{-- Menu Utilisateur --}}
        @auth
            {{-- Si on est connecté en Utilisateur--}}
            <div id="formUser" class="
                absolute
                hidden
                right-0
                w-fit h-fit
                mt-16
                rounded-b-lg
                bg-white
                shadow-xl shadow-gray-600 z-50">

                <div class="
                    flex flex-col
                    w-full
                    py-4
                    text-left">

                    {{-- Si on est Administrateur --}}
                    @if (Auth::user()->admin == 1)
                        <a href="{{ route('dashboard')}}" class="
                            w-full px-4
                            bg-transparent hover:bg-red-500
                            hover:text-white hover:font-semibold
                            hover:scale-x-105
                            transition-all">Espace administrateur</a>
                        <a href="#" class="
                            w-full pl-8
                            pr-4 bg-transparent hover:bg-red-500
                            hover:text-white hover:font-semibold
                            hover:scale-x-105
                            transition-all">↳ Gestion des utilisateurs</a>
                        <a href="{{ route('evenements') }}" class="
                            w-full pl-8
                            pr-4 bg-transparent hover:bg-red-500
                            hover:text-white hover:font-semibold
                            hover:scale-x-105
                            transition-all">↳ Gestion des évenements</a>
                    {{-- Si on est Utilisateur --}}
                    @elseif (Auth::user()->admin == 0)

                    @endif

                    {{-- Bouton de deconnexion --}}
                    <form action="{{ route('logout')}}" method="POST" >
                        @csrf
                        <input type="submit" class="w-full px-4 bg-transparent hover:bg-red-500 hover:text-white" value="Déconnexion">
                    </form>

                </div>
            </div>
        @endauth

        <main class="
                flex flex-col
                w-full h-fit">
            {{-- Corps de la page --}}
            @yield('Corps de la page')
        </main>

        {{-- Pied de page --}}
        <footer class="flex flex-col
            w-full h-fit py-8 px-2
            bg-zinc-800
            text-white
            z-10">

            <div class="flex flex-col md:flex-row
                justify-around
                mb-4">

                {{-- Section : Redirections sur les pages --}}
                <div class="flex flex-col
                    h-fit
                    mb-3">

                    {{-- Titre de la section --}}
                    <h1 class="text-xl font-bold tracking-wider mb-3">
                        <strong class="text-red-600 text-3xl">L</strong>ES PAGES
                    </h1>

                    <ul>
                        {{-- Lien vers l'Accueil --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="{{ route('accueil') }}" class="font-display leading-tight">
                                <span class="link link-underline">L'accueil</span>
                            </a>
                        </li>

                        {{-- Lien vers les évenements --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="{{ route('evenements') }}" class="font-display leading-tight">
                                <span class="link link-underline">Les évenements</span>
                            </a>
                        </li>

                        {{-- Lien vers la FAQ --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="{{ route('faqs') }}" class="font-display leading-tight">
                                <span class="link link-underline">Notre FAQ</span>
                            </a>
                        </li>

                        {{-- Lien vers l'API de l'EFS --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="#" class="font-display leading-tight">
                                <span class="link link-underline">Vos centres de dons</span>
                            </a>
                        </li>

                        {{-- Lien vers les partenaires --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="#" class="font-display leading-tight">
                                <span class="link link-underline">Nos partenaires</span>
                            </a>
                        </li>

                    </ul>
                </div>

                {{-- Section : Informations sur le lycée --}}
                <div class="flex flex-col
                    h-fit
                    mb-3">

                    {{-- Titre de la section --}}
                    <h1 class="text-xl font-bold tracking-wider mb-3">
                        <strong class="text-red-600 text-3xl">L</strong>E LYCEE MONT-ROLAND
                    </h1>

                    {{-- Informations sur le lycée --}}
                    <ul>
                        <li>
                            55 Bd du Président Wilson,
                        </li>

                        <li>
                            39100 Dole
                        </li>

                        <li>
                            Ouvert de 8h à 12h et de 1h30 à 5h30
                        </li>

                        {{-- Lien au site du lycée --}}
                        <li>
                            <ion-icon name="globe-outline" class="text-red-600"></ion-icon>
                            <a href="http://www.pasteurmontroland.com/" class="font-display leading-tight">
                                <span class="link link-underline">Le site du lycée</span>
                            </a>
                        </li>

                        <li>
                            <ion-icon name="call-outline" class="text-red-600"></ion-icon>
                            Tél : 03 84 79 66 00
                        </li>

                    </ul>
                </div>

                {{-- Section : Informations de contact --}}
                <div class="flex flex-col
                    h-fit
                    mb-3">

                    {{-- Titre de la section --}}
                    <h1 class="text-xl font-bold tracking-wider mb-3">
                        <strong class="text-red-600 text-3xl">C</strong>ontact
                    </h1>

                    {{-- Informations de contact --}}
                    <ul>

                        <li>
                            Adresse mail du contact
                        </li>

                        <li>
                            Téléphone du contact
                        </li>


                        {{-- Lien vers la FAQ --}}
                        <li>
                            <ion-icon name="chevron-forward-outline" class="text-red-600"></ion-icon>
                            <a href="{{ route('faqs') }}" class="font-display leading-tight">
                                <span class="link link-underline">Notre FAQ</span>
                            </a>
                        </li>

                    </ul>
                </div>

            </div>

            {{-- Séparateur rouge --}}
            <div class="w-full h-0.5 px-1/4">
                <div class="w-full  h-0.5 bg-gradient-to-r from-zinc-800 via-red-600 to-zinc-800"></div>
            </div>

            {{-- Copyright --}}
            <p class="text-center text-xs mt-8">
                ©Lycee-Pasteur-Mont-Roland, Dôle. Créé par les BTS SIO2 en alternance, promotion 2020-2022.
            </p>

        </footer>

    </body>
</html>
