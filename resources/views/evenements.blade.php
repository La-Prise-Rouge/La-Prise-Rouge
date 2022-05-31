@extends('template')

@section('Corps de la page')

<main class="
    flex flex-col
    w-full h-fit">

    {{-- Paginator --}}
    <div class="flex flex-row justify-between w-11/12 h-8 ">

        <div class="flex flex-row justify-center align-middle w-24 md:w-48">

            {{-- Retour à la première page --}}
            <a href="{{ $evenements->url(1) }}">
                <ion-icon name="caret-back-outline"></ion-icon>
            </a>
            {{-- Retour à la page précédente --}}
            <a href="{{ $evenements->previousPageUrl() }}">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>

            {{-- Pour chaque page, --}}
            @for ($i = 1; $i < $evenements->lastPage()+1; $i++)
                {{-- Si la page actuelle est égale au numéro de la page --}}
                @if ($i == $evenements->currentPage())
                    {{-- On affiche le lien de la page actuelle --}}
                    <a href="{{ $evenements->url($i)}}"><button class="font-bold text-red-600">{{$i}}</button></a>
                @elseif ($evenements->currentPage() >= $i-3 and $evenements->currentPage() <= $i+3) <a href="{{ $evenements->url($i)}}">
                    {{-- Sinon on affiche les autres boutons à + ou moins 3 pages de la page actuelle --}}
                    <button>{{$i}}</button></a>
                @endif
            @endfor

            {{-- Avancer à la page suivante --}}
            <a href="{{ $evenements->nextPageUrl() }}">
                <ion-icon name="chevron-forward-outline"></ion-icon>
            </a>
            {{-- Avancer à la dernière page --}}
            <a href="{{ $evenements->url($evenements->lastPage()) }}">
                <ion-icon name="caret-forward-outline"></ion-icon>
            </a>
        </div>
    </div>

    <div class="p-10">
        @foreach ($evenements as $evenement)
            <div class="relative
                my-10 p-16
                rounded-2xl shadow-xl
                shadow-zinc-500"
                style="background-image: url('{{ asset($evenement->Photos->first()) }}')">
                <a href="{{ route('Evenement', $evenement->id) }}">{{ $evenement->libelle }}</a>
                <div class="absolute
                    flex flex-row
                    h-16 bottom-0 right-16">
                    @foreach ($evenement->Photos as $photo)
                        <img src="{{ asset($photo->url) }}"
                            class="border-0 border-zinc-500"/>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>

</main>
@endsection
