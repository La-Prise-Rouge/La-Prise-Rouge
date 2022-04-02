@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <form action="{{route('validation-creation-photo')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="formGroupExampleInput">

            <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" name="url" id="exampleInputFile">
            </div>

            <label for="formGroupExampleInput">Titre</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="titre" placeholder="Example input">
            <label for="formGroupExampleInput">Description</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="description" placeholder="Example input">
            <label for="formGroupExampleInput">Évenement lié</label>
            <select name="evenement" id="">
                @foreach ($evenements as $evenement)
                    <option value="{{$evenement->id}}">{{$evenement->id." - ".$evenement->libelle}}</option>
                @endforeach 
            </select>
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
