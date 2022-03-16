@extends('template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <div class="btnLow">
        <li><a href="{{route('creation-evenement')}}"><button type="button" class="btn btn-success">Ajouter Evenement</button></a></li>

    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">n°</th>
            <th scope="col">Evenements</th>
            <th scope="col">Plus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($evenements as $evenement)
                <tr>
                    <th scope="row">{{$evenement->id}}</th>
                    <td>{{$evenement->libelle}}</td>
                    <td><li><a href="{{route('Evenement', $evenement->id)}}"><button type="button" class="btn btn-info">Voir plus de détails</button></a></li></td>
                    <td><li><a href="{{route('modification-evenement', $evenement->id)}}"><button type="button" class="btn btn-info">Modifier</button></a></li></td>
                    <td>
                        <li>
                            <form action="{{route('suppression-evenement',$evenement->id)}}" method="POST">
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
