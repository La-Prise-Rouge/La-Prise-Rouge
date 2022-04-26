@extends('template')

@section('menu_navigation')
{{-- Direction Accueil --}}
<a href="{{ route('accueil') }}" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Accueil
</a>

{{-- Direction FAQ Don du sang --}}
<a href="#info_don_sang" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Don du Sang
</a>

{{-- Direction FAQ Don de moelle --}}
<a href="#info_don_moelle" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Don de Moelle
</a>

{{-- Direction Evenement en cours --}}
<a href="#evenement_en_cours" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Evenement
</a>

{{-- Direction Localisation --}}
<a href="#carte_lycee" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Nous Trouver
</a>

{{-- Direction Localisation --}}
<a href="#partenaires" class="flex
            w-full h-full
            items-center justify-center
            hover:bg-red-600
            hover:text-white hover:font-semibold
            transition-all">
    Partenaires
</a>
@endsection

@section('Corps de la page')

<div class="flex flex-row
                w-full
                mt-10 px-6">

    {{-- Recherche selon le Type de FAQ --}}
    <div class="flex
                    w-1/2
                    align-middle">
        {{-- Formulaire de recherche --}}
        <form action="#" method="GET" class="flex flex-row
                        w-full
                        justify-around align-middle">
            @csrf

            {{-- DropDown de Recherche selon le type de FAQ --}}
            <select name="type_faq"
                    class="h-10
                        outline-hidden
                        rounded focus:border-red-600">
                <option value="Tous"
                        class="bg-red-50 hover:bg-red-600">Tous</option>
                <option value="don_sang">Don du Sang</option>
                <option value="don_moelle">Don de Moëlle</option>
            </select>

            {{-- Lancement de la recherche --}}
            <input type="submit"
                value="Recherchez"
                class="p-2 h-10
                    rounded-md
                    font-semibold text-center text-white
                    bg-red-600 hover:bg-red-400" />
        </form>

    </div>


    {{-- Paginator --}}
    <div class="flex flex-row justify-between w-11/12 h-8 ">

        <div class="flex flex-row justify-center align-middle w-24 md:w-48">

            {{-- Retour à la première page --}}
            <a href="{{ $faqs->url(1) }}">
                <ion-icon name="caret-back-outline"></ion-icon>
            </a>
            {{-- Retour à la page précédente --}}
            <a href="{{ $faqs->previousPageUrl() }}">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>

            {{-- Pour chaque page, --}}
            @for ($i = 1; $i < $faqs->lastPage()+1; $i++)
                {{-- Si la page actuelle est égale au numéro de la page --}}
                @if ($i == $faqs->currentPage())
                    {{-- On affiche le lien de la page actuelle --}}
                    <a href="{{ $faqs->url($i)}}"><button class="font-bold text-red-600">{{$i}}</button></a>
                @elseif ($faqs->currentPage() >= $i-3 and $faqs->currentPage() <= $i+3) <a href="{{ $faqs->url($i)}}">
                    {{-- Sinon on affiche les autres boutons à + ou moins 3 pages de la page actuelle --}}
                    <button>{{$i}}</button></a>
                @endif
            @endfor

            {{-- Avancer à la page suivante --}}
            <a href="{{ $faqs->nextPageUrl() }}">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </a>
            {{-- Avancer à la dernière page --}}
            <a href="{{ $faqs->url($faqs->lastPage()) }}">
                <ion-icon name="caret-forward-outline"></ion-icon>
            </a>
        </div>
    </div>
</div>

{{-- Liste des FAQs de la page --}}
<div class="my-10 m-8">
    <div>
        {{-- FAQs sous la forme d'accordeon --}}
        <div class="accordion px-10">
            {{-- Si on a au moins une FAQ --}}
            @if ($faqs->count() > 0)

                {{-- Alors on affiche chaque FAQ sous la forme d'un Accordeon --}}
                @foreach ($faqs as $key=>$faq)

                    <div class="accordion-item px-6 bg-white border border-gray-200">

                        <h2 class="accordion-header mb-0" id="heading{{ $key }}">

                            <button class="accordion-button
                                        collapsed relative
                                        flex
                                        w-full
                                        items-center
                                        py-4 px-5
                                        text-base text-gray-800 text-left
                                        bg-white
                                        border-0 rounded-none
                                        transition focus:outline-none" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse{{ $key }}" aria-expanded="false" aria-controls="collapse{{ $key }}">
                                {{ $faq->question }}
                            </button>

                        </h2>

                        <div id="collapse{{ $key }}" class="accordion-collapse collapse" aria-labelledby="heading{{ $key }}"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body py-4 px-5">
                                {{ $faq->reponse }}
                            </div>
                        </div>

                    </div>

                @endforeach
            @endif

        </div>
    </div>
</div>

{{-- Bouton de contact --}}
<div class="flex flex-col
            w-full
            items-center
            mb-10">
    <p>Pas de réponse ?</p>
    <a href="#"
        class="p-2
            rounded-md
            font-semibold text-center text-white
            bg-red-600 hover:bg-red-400">
        Contactez-nous !
    </a>
</div>

@endsection
