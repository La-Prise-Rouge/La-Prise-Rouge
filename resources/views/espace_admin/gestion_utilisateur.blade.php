@extends('espace_admin.overlay_admin')

@section('fil_arianne')
    Administration | Gestion Utilisateur
@endsection

@section('admin_contenu')

    <section class="flex flex-col
        w-full h-full
        bg-slate-200">

        <div class="flex flex-row w-full
            justify-around
            mt-10">
            <button class="
                p-10
                rounded-lg
                text-2xl font-semibold text-white
                bg-green-600 hover:bg-green-500
                shadow-lg shadow-zinc-400
                transition-all">Import CSV</button>
            <button class="
                p-10
                rounded-lg
                text-2xl font-semibold text-white
                bg-blue-600 hover:bg-blue-500
                shadow-lg shadow-zinc-400
                transition-all">Création</button>
        </div>

        <div class="w-full h-full
            mt-10 p-10
            bg-slate-200">
            <table>

                <thead>
                    <td>
                        <tr>Nom</tr>
                        <tr>Mail</tr>
                        <tr>Note</tr>
                        <tr>Primo-Donnant</tr>
                        <tr>Promotion</tr>
                    </td>
                </thead>
                <tbody>
                    @foreach ($utilisateurs as $utilisateur)
                        <td>
                            <tr>
                                {{ $utilisateur->name }}
                            </tr>
                            <tr>
                                {{ $utilisateur->email }}
                            </tr>
                            <tr>
                                {{ $utilisateur->note }}
                            </tr>
                            <tr>
                                {{ $utilisateur->est_primo }}
                            </tr>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

@endsection
