@extends('template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    Je suis la FAQ {{$faq->question}} !
    Je suis la FAQ : réponse {{$faq->reponse}} !

    </main>

@endsection
