@extends('template')

@section('Corps de la page')

<main class="
        flex flex-col
        w-full h-full
        justify-between">

    <h2 class="text-4xl font-extrabold text-center
        bg-gradient-to-br to-red-600 from-yellow-500 via-orange-500
        bg-clip-text text-transparent ">
        {{ $evenement->libelle}}
    </h2>
    <ul class="mt-8 text-xl font-bold text-center">
        <li>Date de Début : {{ date('d/m/Y', strtotime($evenement->date_debut)) }}</li>
        <li>Heure de Fin : {{ date('h:m', strtotime($evenement->date_fin)) }}</li>
    </ul>

    {{-- Section: Partenaires --}}
    <section class="w-full md:w-3/4 self-center
        mt-8" id="partenaires">

        @if ($evenement->Photos->Count() > 0)
        {{-- Carroussel --}}
        <div class="glide relative">

            <div class="glide__track
                            h-full
                            text-center" data-glide-el="track">

                {{-- Liste des logos --}}
                <ul class="glide__slides
                                h-full">

                    {{-- Pour chaque partenaires, On affiche son logo --}}
                    @foreach ($evenement->Photos as $key => $photo)
                    <li class="glide__slide
                                        flex
                                        w-fit h-full
                                        justify-center align-middle">
                        <a href="#" class="w-full h-full
                                            flex justify-center">
                            <img src="{{ asset($photo->url) }}" class="rounded-lg h-24">
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
                    perView: 3,
                    gap: 40,
                    autoplay: 5000,
                    hoverpause: true,
                    animationDuration: 800,
                    breakpoints: {
                        1024: {
                            perView: 2
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

    <h1 class="p-10
        bg-red-600
        text-center text-xl font-bold text-white">
        INSCRIVEZ-VOUS JUSQU'AU {{ date('d/m/Y', strtotime($evenement->date_fin_inscription)) }}
    </h1>

    <p class="mt-10 text-center">Pour participer à cet évènement, les primo-donneurs doivent participer à la réunion se tenant le {{
        date('d/m/Y à h:m', strtotime($evenement->date_reunion_primo)) }}</p>
    <ul class="text-center">
        <li>Le prélèvenement dure {{ $evenement->duree_passage }} minutes.</li>
        <li>Il a lieu au {{ $evenement->lieu }}.</li>
    </ul>

</main>

@endsection
