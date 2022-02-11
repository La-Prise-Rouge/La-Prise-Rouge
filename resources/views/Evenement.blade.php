@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    Je suis l'evenement {{$evenement->libelle}} !

    </main>

@endsection
