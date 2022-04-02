@extends('template')

@section('menu_navigation')

    <div class="flex flex-row
        w-full h-full
        bg-zinc-800
        shadow-xl shadow-zinc-400">

        <button class="flex h-full
            items-center justify-center
            text-white text-4xl
            p-4
            hover:text-black hover:bg-white
            transition-all" id="button_menu">
            <ion-icon name="menu-outline"></ion-icon>
        </button>

        <h1 class="flex h-full
            items-center justify-center
            text-white text-4xl
            p-4">
            @yield('fil_arianne')
        </h1>
    </div>

@endsection

@section('Corps de la page')

    <main class="flex flex-row h-screen">
        <section class="flex flex-col
            h-full w-fit
            p-6
            bg-zinc-800
            shadow-xl shadow-zinc-400
            text-white font-semibold
            z-10">

            {{-- Séparateur --}}
            <div class="w-full h-0.5">
                <div class="w-full  h-0.5 bg-zinc-400"></div>
            </div>

            <a href="{{ route('dashboard') }}" class="flex flex-row
                my-10">
                <ion-icon name="pie-chart" class="text-2xl"></ion-icon>
                <p class="text-xl ml-2 hover:scale-105 link link-underline txt_button">Dashboard</p>
            </a>

            {{-- Séparateur --}}
            <div class="w-full h-0.5">
                <div class="w-full  h-0.5 bg-zinc-400"></div>
            </div>

            <a href="{{ route('gestion_utilisateur') }}"  class="flex flex-row
                my-10">
                <ion-icon name="people" class="text-2xl"></ion-icon>
                <p class="text-xl ml-2 hover:scale-105 link link-underline txt_button">Utilisateurs</p>
            </a>
            <a href=""  class="flex flex-row
                my-10">
                <ion-icon name="calendar" class="text-2xl"></ion-icon>
                <p class="text-xl ml-2 hover:scale-105 link link-underline txt_button">Evenements</p>
            </a>
            <a href="" class="flex flex-row
                my-10">
                <ion-icon name="accessibility" class="text-2xl"></ion-icon>
                <p class="text-xl ml-2 hover:scale-105 link link-underline txt_button">Partenaires</p>
            </a>
            <a href="" class="flex flex-row
                my-10">
                <ion-icon name="help-circle" class="text-2xl"></ion-icon>
                <p class="text-xl ml-2 hover:scale-105 link link-underline txt_button">FAQs</p>
            </a>
        </section>

        @yield('admin_contenu')

    </main>

@endsection
