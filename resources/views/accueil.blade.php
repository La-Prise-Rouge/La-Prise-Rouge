@extends('template')

@section('Titre')
    La Prise Rouge | Don du Sang
@endsection

@section('menu_navigation')
    {{-- Direction Accueil --}}
    <a href="#Accueil"
        class="flex
        w-full h-full
        items-center justify-center
        hover:bg-red-600
        hover:text-white hover:font-semibold
        transition-all">
        Accueil
    </a>

    {{-- Direction FAQ Don du sang --}}
    <a href="#info_don_sang"
        class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">
        Don du Sang
    </a>

    {{-- Direction FAQ Don de moelle --}}
    <a href="#info_don_moelle"
        class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">
        Don de Moelle
    </a>

    {{-- Direction Evenement en cours --}}
    <a href="#evenement_en_cours"
        class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">
        Evenement
    </a>

    {{-- Direction Localisation --}}
    <a href="#carte_lycee"
        class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">
        Nous Trouver
    </a>

    {{-- Direction Localisation --}}
    <a href="#partenaires"
        class="flex
                    w-full h-full
                    items-center justify-center
                    hover:bg-red-600
                    hover:text-white hover:font-semibold
                    transition-all">
        Partenaires
    </a>
@endsection

@section('Corps de la page')

    <main class="
        flex flex-col
        w-full h-fit">

        {{-- Présentation du site --}}
        <div class="
            flex flex-col top-0 left-0
            pb-60 pt-40 pl-5
            bg-cover bg-no-repeat
            shadow-inner-bottom
            md:py-60 md:pl-1/3"
            style="background-image: url({{ asset('storage/prise-de-sang.jpg') }})" id="accueil">
            <h1 class="text-3xl font-bold text-red-600 text">La Prise Rouge</h1>
            <h2 class="text-xl font-semibold">Inscrivez-vous au Don du Sang du Lycée Pasteur Mont-Roland</h2>
        </div>

        {{-- Informations sur le Don du Sang --}}
        <section class="flex flex-col
            w-full
            mt-6" id="info_don_sang">

            <div class="h-fit
                flex flex-col
                rounded-none md:rounded-lg
                shadow-lg shadow-red-200
                bg-cover
                pb-3
                md:ml-7 md:mr-1/8"
                style="background-image: url({{ asset('storage/sang-background.jpg') }})">

                {{-- Titre de la section --}}
                <h2 class="text-center text-white m-2 text-xl font-semibold">
                    Connaissez-vous vraiment le Don du Sang ?
                </h2>

                {{-- Vignettes --}}
                <div
                    class="
                    flex flex-row flex-wrap
                    w-full h-1/2
                    md:px-4 pb-2
                    vignettes_info_md md:vignettes_info_full">

                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-tl-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Quam quod animi, numquam consequatur ipsa iure dignissimos aut, exercitationem
                        harum placeat corrupti quidem nam repudiandae. Error voluptas quisquam hic sunt voluptatem?</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem
                        illo at soluta! Ab sapiente sint quis exercitationem earum ratione laudantium expedita accusamus.
                        Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-tr-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</p>
                    </div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-bl-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem
                        illo at soluta! Ab sapiente sint quis exercitationem earum ratione laudantium expedita accusamus.
                        Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-br-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</div>

                </div>

                {{-- Redirection à la FAQ du Don du Sang --}}
                <a href="{{ route('faqs') }}"
                    class="mt-5
                    p-3 px-10
                    rounded-full
                    bg-white font-semibold
                    text-center uppercase
                    self-center
                    hover:bg-gray-500 hover:shadow-2xl hover:text-white
                    transition-all
                    md:w-96">
                    <ion-icon name="bandage-outline"></ion-icon>
                    Posez vos questions
                </a>

            </div>
        </section>

        {{-- Informations sur le Don de Moelle --}}
        <section class="
            flex flex-col
            w-full
            mt-6" id="info_don_moelle">

            <div class="h-fit
                flex flex-col
                rounded-none md:rounded-lg
                shadow-lg shadow-red-200
                bg-cover pb-3
                md:mr-7 md:ml-1/8"
                style="background-image: url({{ asset('storage/don-de-moelle-osseuse-enfant.png') }})">

                {{-- Titre de la section --}}
                <h2 class="text-center text-2xl m-2 font-bold text-red-600">
                    Le Don de Moëlle n'est pas ce que vous pensez !
                </h2>

                {{-- Vignettes --}}
                <div
                    class="
                    flex flex-row flex-wrap
                    w-full h-1/2
                    md:px-4
                    vignettes_info_md md:vignettes_info_full">

                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-tl-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem
                        illo at soluta! Ab sapiente sint quis exercitationem earum ratione laudantium expedita accusamus.
                        Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-tr-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</p>
                    </div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-bl-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 ">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem
                        illo at soluta! Ab sapiente sint quis exercitationem earum ratione laudantium expedita accusamus.
                        Numquam vel optio, earum qui veritatis quaerat modi.</div>
                    <div class="w-1/2 md:w-1/3 px-2 py-8 md:rounded-br-lg">Lorem ipsum, dolor sit amet consectetur
                        adipisicing elit. Autem illo at soluta! Ab sapiente sint quis exercitationem earum ratione
                        laudantium expedita accusamus. Numquam vel optio, earum qui veritatis quaerat modi.</div>

                </div>

                {{-- Redirection à la FAQ du Don de Moelle --}}
                <a href="{{ route('faqs') }}"
                    class="mt-5
                    p-3 px-10
                    rounded-full
                    bg-red-600 font-semibold
                    text-center uppercase text-white
                    self-center
                    hover:bg-red-400 hover:shadow-2xl
                    transition-all
                    md:w-96">
                    <ion-icon name="pulse-outline"></ion-icon>
                    Nous répondons à vos questions
                </a>

            </div>
        </section>

        {{-- Section: Evenement en cours --}}
        <section
            class="flex flex-col
            w-full h-fit
            items-center
            mt-7
            bg-cover
            text-white"
            id="evenement_en_cours"
            style="background-image: url({{ asset('storage/lycee.jpg') }})">

            {{-- Si un évenement est en cours --}}
            @if (isset($evenement))
                {{-- Titre de la section --}}
                <h2 class="w-full h-10
                    text-xl text-center font-semibold
                    z-10">
                    Prochain evenement
                </h2>

                {{-- Informations de l'évenement --}}
                <div
                    class="flex flex-col
                    w-3/4
                    shadow-inner-center shadow-gray-300 p-2">

                    {{-- Titre de l'evenement --}}
                    <p class="text-center font-semibold">{{ $evenement->libelle }}</p>

                    {{-- Date d'inscription à l'évenement --}}
                    <div class="flex justify-between">
                        <p>Date d'inscription</p>
                        <p>{{ $evenement->date_inscription }}</p>
                    </div>

                    {{-- Date de début de l'évenement --}}
                    <div class="flex justify-between">
                        <p>Date de l'évenement</p>
                        <p>{{ $evenement->date_debut }}</p>
                    </div>

                </div>

                {{-- Boutons de redirection et d'inscription --}}
                <div class="flex flex-col w-full justify-between p-4 md:flex-row text-center">

                    {{-- Redirection à la page de l'évenement --}}
                    <a href="{{ route('EvenementEnCours') }}"
                        class="p-2 mb-2
                        border-2 border-white
                        shadow-inner-center shadow-white">
                        Plus d'Informations
                    </a>

                    {{-- Redirection à la page d'inscription --}}
                    <a href="#"
                        class="p-2 mb-2
                        border-2 border-white
                        shadow-inner-center shadow-white">
                        Inscrivez-vous
                    </a>

                    {{-- Redirection à la page de la listes des Evenements --}}
                    <a href="{{ route('evenements') }}"
                        class="p-2 mb-2
                        border-2 border-white
                        shadow-inner-center shadow-white">
                        Voir tous les evenements
                    </a>

                </div>

                {{-- S'il n'y a pas d'évenements en cours ou prévus --}}
            @else
                {{-- Message : Pas d'évènements planifiés --}}
                <h2 class="w-full
                    my-16
                    text-xl text-center font-semibold
                    z-10 ">
                    Aucun évènement planifié pour l'instant
                </h2>
            @endif

        </section>

        {{-- Section: Carte API Google --}}
        <div class="
            flex flex-col
            px-1/12 py-2 pb-5
            bg-red-600
            shadow-lg shadow-red-200"
            id="carte_lycee">

            {{-- Titre de la section --}}
            <h2 class="w-full h-10
                text-xl text-white text-center font-semibold
                z-10">
                Où nous trouver ?
            </h2>

            {{-- Vue de la Map --}}
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1358.1321977904079!2d5.4887812203658415!3d47.09388725506285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d4cbd41621bd5%3A0xa60717d72858f694!2sLyc%C3%A9e%20Pasteur%20Mont%20Roland%20-%20Site%20Mont%20Roland!5e0!3m2!1sen!2sfr!4v1646497280522!5m2!1sen!2sfr"
                class="
                w-full h-72
                rounded-md
                shadow-md shadow-red-400
                transition-all"
                loading="lazy"></iframe>

            {{-- Redirection à la localisation des centres de dons --}}
            <a href="#"
                class="mt-5
                p-3 px-10
                rounded-full
                bg-white
                shadow-md  shadow-red-500 font-semibold
                text-center uppercase
                hover:bg-gray-500 hover:shadow-2xl hover:text-white
                transition-all">
                <ion-icon name="map"></ion-icon>
                Trouvez vos centres
            </a>

        </div>


        {{-- Section: Partenaires --}}
        <section class="mt-8"
            id="partenaires">

            @if ($partenaires->Count() > 0)
                {{-- Carroussel --}}
                <div class="glide relative">

                    <div class="glide__track
                        h-full
                        text-center"
                        data-glide-el="track">

                        {{-- Liste des logos --}}
                        <ul class="glide__slides
                            h-full">

                            {{-- Pour chaque partenaires, On affiche son logo --}}
                            @foreach ($partenaires as $key => $partenaire)
                                <li
                                    class="glide__slide
                                    flex
                                    w-fit h-full
                                    justify-center align-middle">
                                    <a href="#"
                                        class="w-full h-full
                                        flex justify-center">
                                        <img src="{{ asset($partenaire->url_logo) }}" class="rounded-lg h-24">
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                    {{-- Controleurs --}}
                    <div class="glide__arrows flex justify-between px-2 absolute w-full top-1/3" data-glide-el="controls">

                        {{-- Retour --}}
                        <button
                            class="glide__arrow glide__arrow--left flex p-2 bg-white rounded-full text-gray-500 text-center align-middle border-2 hover:border-gray-500 hover:text-black "
                            data-glide-dir="<">
                            <ion-icon name="chevron-back-outline"></ion-icon>
                        </button>

                        {{-- Avant --}}
                        <button
                            class="glide__arrow glide__arrow--right flex p-2 bg-white rounded-full text-gray-500 text-center align-middle border-2 hover:border-gray-500 hover:text-black "
                            data-glide-dir=">">
                            <ion-icon name="chevron-forward-outline"></ion-icon>
                        </button>

                    </div>
                </div>
            @else
                <h1 class="w-full
                    text-center
                    font-semibold text-xl">
                    Les Partenaires seront bientôt disponibles
                </h1>
            @endif

        </section>

        {{-- Options du Carrousel --}}
        <script>
            // Configuration
            const config = {
                type: 'carousel',
                startAt: 0,
                perView: 4,
                gap: 40,
                autoplay: 5000,
                hoverpause: true,
                animationDuration: 800,
                breakpoints: {
                    1024: {
                        perView: 3
                    },
                    600: {
                        perView: 2,
                        gap: 0,
                    }
                }
            };
            // Création de l'animation
            new Glide('.glide', config).mount()
        </script>

    </main>

@endsection
