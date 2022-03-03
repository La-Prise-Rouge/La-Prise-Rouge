@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <form action="{{route('Accueil')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Titre</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="titre" placeholder="Example input">
            <label for="formGroupExampleInput">Url</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="url" placeholder="Example input">
            <label for="formGroupExampleInput">Description</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="description" placeholder="Example input">
            <label for="formGroupExampleInput">Évenement lié</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="evenement_id" placeholder="Example input">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
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
