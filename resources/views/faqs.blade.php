@extends('template')

@section('Corps de la page')

    <main class="
    flex flex-col
    w-full h-fit">

    <div class="btnLow">
        <li><a href="{{route('creation-faq')}}"><button type="button" class="btn btn-success">Ajouter une FAQ</button></a></li>
    </div>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">n°</th>
            <th scope="col">FAQ</th>
            <th scope="col">Plus</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($faqs as $faq)
                <tr>
                    <th scope="row">{{$faq->id}}</th>
                    <td>{{$faq->question}}</td>
                    <td><li><a href="{{route('faq', $faq->id)}}"><button type="button" class="btn btn-info">Voir plus de détails</button></a></li></td>
                    <td><li><a href="{{route('modification-faq', $faq->id)}}"><button type="button" class="btn btn-info">Modifier</button></a></li></td>
                    <td>
                        <li>
                            <form action="{{route('suppression-faq',$faq->id)}}" method="POST">
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
