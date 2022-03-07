@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <form action="{{route('validation-creation-partenaire')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Libelle du partenaire</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="libelle" placeholder="Example input">
            <label for="formGroupExampleInput">Lien</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="lien" placeholder="Example input">
            <label for="formGroupExampleInput">url_logo</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="url_logo" placeholder="Example input">
            <label for="formGroupExampleInput">Description</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="description" placeholder="Example input">
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
