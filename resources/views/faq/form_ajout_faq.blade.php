@extends('Template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <form action="{{route('validation-creation-faq')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Question</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="question" placeholder="Example input">
            <label for="formGroupExampleInput">Réponse</label>
            <input type="date" class="form-control" id="formGroupExampleInput" name="reponse" placeholder="Example input">
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
