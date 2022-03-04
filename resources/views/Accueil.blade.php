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
                shadow-2xl shadow-red-500
                bg-cover
                md:ml-5 md:mr-36"
                style="background-image: url({{ asset('storage/sang-background.jpg') }})">

                {{-- Titre de la section --}}
                <div class="flex
                    items-center
                    h-10
                    ml-10
                  text-white text-xl font-semibold">
                    <h2>
                        Don de Sang
                    </h2>
                </div>

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
                shadow-2xl shadow-red-500
                bg-cover
                md:ml-5 md:mr-36">

                {{-- Titre de la section --}}
                <h2 class="w-full h-10
                    text-white text-xl text-right font-semibold">
                    Don de Moelle
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

        {{-- Section: Evenement en cours --}}
        <section class="
            flex flex-col
            w-full
            mt-32">

            <h2 class="absolute font-semibold z-10">leghoilqdfbuglkuwbfgluh</h2>
            <img class="
                relative"
                src="{{ asset('storage/lycee.jpg') }}"
                alt="">

        </section>

        {{-- Section: Carte API Google --}}
        <section class="
            flex flex-col
            mx-1/8 mt-32">

            <div class="
                flex flex-col
                items-center
                rounded-lg
                px-1/8 pb-5
                bg-red-600
                shadow-xl shadow-red-400">

                {{-- Titre de la section --}}
                <div class="
                    flex
                    justify-center items-center
                    w-full h-10
                    text-white text-xl font-semibold">
                        Vous voulez nous trouver ?
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2716.253340537249!2d5.494079004423624!3d47.09410399513063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478d4c97319a022b%3A0x10455424f077465e!2sLycee%20Pasteur%20Mont%20Roland!5e0!3m2!1sen!2sfr!4v1644484442678!5m2!1sen!2sfr"
                    class="
                        w-full h-72
                        rounded-lg
                        shadow-md shadow-red-400
                        transition-all"
                    loading="lazy"></iframe>

                <a href="#" class="mt-5
                    p-3 px-10
                    rounded-full
                    bg-white
                    shadow-md  shadow-red-500 font-semibold
                    uppercase
                    hover:bg-gray-500 hover:shadow-2xl hover:text-white
                    transition-all">
                    <ion-icon name="map"></ion-icon>
                        Trouvez vos centres
                    </a>
            </div>
        </section>

    </main>

@endsection
