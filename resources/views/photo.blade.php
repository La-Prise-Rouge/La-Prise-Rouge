@extends('template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    Je suis la photo {{$photo->url}} !

    </main>

@endsection
