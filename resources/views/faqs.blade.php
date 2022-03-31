@extends('template')

@section('menu_navigation')
    {{-- Direction Accueil --}}
    <a href="{{ route('accueil') }}"
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

        <div class="flex flex-row
            w-full
            justify-around
            mt-10 px-6">
            <div class="flex flex-col
                w-1/2
                items-center">
                <p>Pas de réponse ?</p>
                <a href="#"
                    class="p-2
                    rounded-md
                    font-semibold text-center text-white
                    bg-red-600 hover:bg-red-400">
                    Contactez-nous !
                </a>
            </div>

            <div class="flex
                w-1/2
                align-middle">

                <form action="#"
                    method="GET"
                    class="flex flex-row
                    w-full
                    justify-around align-middle">


                    <select name="type_faq"
                        class="h-10 outline-hidden
                            rounded focus:border-red-600">
                        <option value="Tous" class="bg-red-50 hover:bg-red-600">Tous</option>
                        <option value="don_sang">Don du Sang</option>
                        <option value="don_moelle">Don de Moëlle</option>
                    </select>


                    <input type="submit"
                        value="Recherchez"
                        class="p-2 h-10
                        rounded-md
                        font-semibold text-center text-white
                        bg-red-600 hover:bg-red-400"/>
                </form>

            </div>
        </div>

        <div class="m-8">
            <div>
                @foreach ($faqs as $faq)
                    <div class="
                        p-5 m-8
                        border-2 border-gray-300 rounded-xl
                        shadow-md shadow-gray-300">
                        <div class="flex flex-row
                            justify-between">
                            <div>{{ $faq->question }}</div>
                            <h2 >N°{{ $faq->id }}</h2>
                        </div>
                        <div>
                            {{ $faq->reponse }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
