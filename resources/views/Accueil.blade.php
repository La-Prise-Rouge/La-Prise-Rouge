@extends('template')

@section('Titre')
    La Prise Rouge | Don du Sang
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
            style="background-image: url({{ asset('storage/prise-de-sang.jpg') }})">
            <h1 class="text-3xl font-bold text-red-600 text">La Prise Rouge</h1>
            <h2 class="text-xl font-semibold">Inscrivez-vous au Don du Sang du Lycée Pasteur Mont-Roland</h2>
        </div>

        {{-- Informations sur le Don du Sang --}}
        <section class="flex flex-col
            w-full
            mt-6 md:mt-32">

            <div class="h-fit
                flex flex-col
                rounded-none md:rounded-lg
                shadow-lg shadow-red-200
                bg-cover
                md:ml-5 md:mr-36"
                style="background-image: url({{ asset('storage/sang-background.jpg') }})">

                {{-- Titre de la section --}}
                <h2 class="text-center text-white text-xl font-semibold">
                    Don de Sang
                </h2>

                {{-- Vignettes --}}
                <div class="
                    flex flex-row flex-wrap
                    w-full h-1/2
                    md:px-4 pb-2
                    vignettes_info_md md:vignettes_info_full">

                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-tl-lg">1er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 ">2er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-tr-lg"><p class="text-black">3er fact</p></div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-bl-lg">4er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 ">5er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-br-lg">6er fact</div>

                </div>
            </div>
        </section>

        {{-- Informations sur le Don de Moelle --}}
        <section class="
            flex flex-col
            w-full
            mt-6 md:mt-32" >

            <div class="h-fit
                flex flex-col
                rounded-none md:rounded-lg
                shadow-lg shadow-red-200
                bg-cover
                md:ml-5 md:mr-36">

                {{-- Titre de la section --}}
                <h2 class="text-center text-xl font-semibold">
                    Don de Moelle osseuse
                </h2>

                {{-- Vignettes --}}
                <div class="
                    flex flex-row flex-wrap
                    w-full h-1/2
                    md:px-4
                    vignettes_info_md md:vignettes_info_full">

                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-tl-lg">1er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 ">2er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-tr-lg"><p class="text-black">3er fact</p></div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-bl-lg">4er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 ">5er fact</div>
                    <div class="w-1/2 md:w-1/3 py-8 md:rounded-br-lg">6er fact</div>

                </div>
            </div>
        </section>

        {{-- Section: Evenement en cours --}}
        <section class="flex flex-col
            w-full h-fit
            items-center
            mt-5
            rounded-none md:rounded-lg
            bg-cover
            text-white" 
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
                <div class="flex flex-col
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
                <div class="flex flex-row w-full justify-between p-4">

                    {{-- Redirection à la page de l'évenement --}}
                    <a href="#" 
                        class="p-2
                        border-2 border-white 
                        shadow-inner-center shadow-white">
                        Plus d'Informations
                    </a>

                    {{-- Redirection à la page d'inscription --}}
                    <a href="#" 
                        class="p-2
                        border-2 border-white 
                        shadow-inner-center shadow-white">
                        Inscrivez-vous
                    </a>

                </div>
                
            {{-- S'il n'y a pas d'évenements en cours ou prévus --}}
            @else
                {{-- *A COMPLETER* --}}
            @endif

        </section>

        {{-- Section: Carte API Google --}}
        <section class="mt-8">

            <div class="
                flex flex-col
                px-1/12 py-2 pb-5
                bg-red-600
                shadow-lg shadow-red-200">

                {{-- Titre de la section --}}
                <h2 class="w-full h-10
                    text-xl text-white text-center font-semibold 
                    z-10">
                    Où nous trouver ?
                </h2>
                
                {{-- Vue de la Map --}}
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1358.1321977904079!2d5.4887812203658415!3d47.09388725506285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d4cbd41621bd5%3A0xa60717d72858f694!2sLyc%C3%A9e%20Pasteur%20Mont%20Roland%20-%20Site%20Mont%20Roland!5e0!3m2!1sen!2sfr!4v1646497280522!5m2!1sen!2sfr"
                    class="
                        w-full h-72
                        rounded-md
                        shadow-md shadow-red-400
                        transition-all"
                    loading="lazy"></iframe>

                {{-- Redirection à la localisation des centres de dons --}}
                <a href="#" class="mt-5
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
        </section>

        {{-- Section: Partenaires --}}
        <section class="mt-8">

            <div class="
                flex flex-col
                px-1/12 py-2 pb-5
                bg-red-600
                shadow-lg shadow-red-200">
            </div>
        </section>
    </main>

@endsection
