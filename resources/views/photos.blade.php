@extends('template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <div class="btnLow">
        <li><a href="{{route('creation-photo')}}"><button type="button" class="btn btn-success">Ajouter photo</button></a></li>

    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">n°</th>
            <th scope="col">photo</th>
            <th scope="col">Plus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
                <tr>
                    <th scope="row">{{$photo->id}}</th>
                    <td>{{$photo->titre}}</td>
                    <td>{{$photo->url}}</td>
                    <td>{{$photo->description}}</td>
                    <td><li><a href="{{route('photo', $photo->id)}}"><button type="button" class="btn btn-info">Voir plus de détails</button></a></li></td>
                    <td>
                        <li>
                            <form action="{{route('suppression-photo',$photo->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger">Supprimer</button>
                            </form>
                        </li>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </main>
@endsection
