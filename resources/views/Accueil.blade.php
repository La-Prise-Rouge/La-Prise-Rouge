@extends('template')

@section('Corps de la page')

    <main class="            
    flex flex-col
    w-full h-fit">

        {{-- Présentation du site --}}
        <div class="
            flex flex-col top-0 left-0 
            py-40 pl-1/3
            bg-cover bg-no-repeat"
            style="background-image: url({{ asset('storage/prise-de-sang.jpg') }})">
            <h1 class="text-3xl font-bold text-red-600 text">La Prise Rouge</h1>
            <h2 class="text-xl font-semibold">Inscrivez-vous au Don du Sang du Lycée Pasteur Mont-Roland</h2>
        </div>

        <div class="
            flex flex-col
            w-full">
            
            {{-- Informations sur le Don du Sang --}}
            <div class="
                h-96
                ml-5 mt-10 mr-36
                flex flex-col
                rounded-lg
                shadow-2xl shadow-red-500
                bg-cover"
                style="background-image: url({{ asset('storage/sang-background.jpg') }})">

                {{-- Titre de la section --}}
                <div class="
                flex
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
                    w-full h-full
                    px-4 pb-2
                    vignettes_info">                

                    <div class="rounded-tl-lg">1er fact</div>
                    <div>2er fact</div>
                    <div class="rounded-tr-lg"><p class="text-black">3er fact</p></div>
                    <div class="rounded-bl-lg">4er fact</div>
                    <div>5er fact</div>
                    <div class="rounded-br-lg">6er fact</div>

                </div>
            </div>
        </div>

        {{-- Informations sur le Don de Moelle --}}
        <div class="
            flex flex-col
            w-full">

            <div class="
                h-96 
                ml-36 mt-10 mr-5
                flex flex-col
                rounded-lg
                bg-cover"
                style="background-image: url({{ asset('storage/moelle-background.jpg') }})">

                {{-- Titre de la section --}}
                <div class="
                flex
                items-center
                h-10
                ml-10  
                text-white text-xl font-semibold">
                    <h2>
                        Don de Moelle
                    </h2>
                </div>

                {{-- Vignettes --}}
                <div class="
                    flex flex-row flex-wrap
                    w-full h-full
                    px-4 pb-2
                    vignettes_info">         

                    <div class="rounded-tl-lg">1er fact</div>
                    <div>2er fact</div>
                    <div class="rounded-tr-lg"><p class="text-black">3er fact</p></div>
                    <div class="rounded-bl-lg">4er fact</div>
                    <div>5er fact</div>
                    <div class="rounded-br-lg">6er fact</div>
                    test
                </div>
            </div>
        </div>
    </main>

@endsection