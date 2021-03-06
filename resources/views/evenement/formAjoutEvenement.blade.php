@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <form action="{{route('validation-creation-evenement')}}" method="POST"
        class="flex flex-col w-1/2
        mb-10 p-10
        self-center justify-center
        border rounded-lg border-gray-400
        shadow-lg shadow-red-500">
        @csrf
        <div class="flex flex-col
            w-full self-center">
            <label for="formGroupExampleInput">Libelle de L'Évenement</label>
            <input type="text" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="libelle" placeholder="Example input">
            <label for="formGroupExampleInput">Date de début</label>
            <input type="date" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="date_debut" placeholder="Example input">
            <label for="formGroupExampleInput">Date de fin</label>
            <input type="date" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="date_fin" placeholder="Example input">
            <label for="formGroupExampleInput">Lieu</label>
            <input type="text" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="lieu" placeholder="Example input">
            <label for="formGroupExampleInput">Date d'ouverture des inscriptions</label>
            <input type="date" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="date_inscription" placeholder="Example input">
            <label for="formGroupExampleInput">Date de fin des inscriptions</label>
            <input type="date" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="date_fin_inscription" placeholder="Example input">
            <label for="formGroupExampleInput">Date de réunion Primo donnant</label>
            <input type="date" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="date_reunion_primo" placeholder="Example input">
            <label for="formGroupExampleInput">Durée de passage</label>
            <input type="integer" class="rounded-lg mb-4 w-2/3" id="formGroupExampleInput" name="duree_passage" placeholder="Example input">
        </div>
        <button type="submit" class="w-fit p-4 self-center rounded-lg bg-red-500 hover:bg-red-400 text-white">Valider</button>
    </form>
    <!-- /resources/views/post/create.blade.php -->
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    </main>

@endsection
