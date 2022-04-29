@extends('espace_admin.overlay_admin')

@section('fil_arianne')
Administration | Gestion Évenements
@endsection

@section('admin_contenu')

<section class="flex flex-col
        w-full h-full
        bg-slate-200">

    @if (session('success'))
    <h1>{{ session('success') }}</h1>
    @endif

    {{-- Boutons de création et modification --}}
    <div class="flex flex-row w-full
            justify-around
            mt-10">
        {{-- Création --}}
        <button class="
                h-16
                px-10
                mb-4
                rounded-lg
                text-2xl font-semibold text-white
                bg-blue-600 hover:bg-blue-500
                shadow-md shadow-zinc-400
                transition-all" data-bs-toggle="modal" data-bs-target="#modal_creation">
            Création
        </button>
        {{-- Modification --}}
        <button class="
                h-16
                px-10
                mb-4
                rounded-lg
                text-2xl font-semibold text-white
                bg-blue-600 hover:bg-blue-500
                shadow-md shadow-zinc-400
                transition-all" data-bs-toggle="modal" data-bs-target="#modal_modification">
            Modification
        </button>
    </div>

    <!-- Modal de Creation -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modal_creation" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal_creationLabel">Creation
                        d'un évenement</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('creation-evenement') }}" method="POST">
                    @csrf
                    {{-- Champs --}}
                    <div class="w-full h-fit
                            p-4">
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Libelle de L'Évenement : </label>
                            <input name="libelle" type="text" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Date de début : </label>
                            <input name="date_debut" type="date" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Date de fin : </label>
                            <input name="date_fin" type="date" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Lieu de L'Évenement : </label>
                            <input name="lieu" type="text" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Date d'ouverture des inscriptions : </label>
                            <input name="date_inscription" type="date" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Date de fin des inscriptions : </label>
                            <input name="date_fin_inscription" type="date" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Date de réunion Primo donnant : </label>
                            <input name="date_reunion_primo" type="date" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Durée de passage : </label>
                            <input name="duree_passage" type="number" class="w-1/2
                                        rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                    </div>

                    {{-- Annulation et Confirmation --}}
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                            class="px-4 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                            data-bs-dismiss="modal">
                            Annuler
                        </button>
                        <input type="submit"
                            class="px-4 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            value="Je confirme" />
                    </div>
                </form>

            </div>
        </div>
    </div>

    <!-- Modal de Modification -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modal_modification" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal_creationLabel">Modification
                        de l'évenement en cours</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('modification-evenement', $evnmt->id) }}" method="POST">
                    @csrf
                    {{-- Champs --}}
                    <div class="w-full h-full
                            p-4">
                        <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Libelle de L'Évenement : </label>
                        <input name="libelle" type="text" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->libelle }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Date de début : </label>
                        <input name="date_debut" type="date" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->date_debut }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Date de fin : </label>
                        <input name="date_fin" type="date" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->date_fin }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Lieu de L'Évenement : </label>
                        <input name="lieu" type="text" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->lieu }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Date d'ouverture des inscriptions : </label>
                        <input name="date_inscription" type="date" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->date_inscription }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Date de fin des inscriptions : </label>
                        <input name="date_fin_inscription" type="date" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->date_fin_inscription }}">
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Jour de réunion Primo donnant : </label>
                        <input name="date_reunion_primo" type="dateTime-local" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ date("y-m-d h:i", strtotime($evnmt->date_reunion_primo)); }}"
                                {{-- $evnmt->date_reunion_primo->format("y-m-d h:i") --}}
                                >
                    </div>
                    <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                        <label class="w-1/2 text-center">Durée de passage : </label>
                        <input name="duree_passage" type="number" class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800"
                                value="{{ $evnmt->duree_passage }}">
                    </div>

                    </div>

                    {{-- Annulation et Confirmation --}}
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                            class="px-4 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                            data-bs-dismiss="modal">
                            Annuler
                        </button>
                        <input type="submit"
                            class="px-4 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            value="Je confirme" />
                    </div>
                </form>

            </div>
        </div>
    </div>

    {{-- Liste des évenements --}}
    <div class="w-fit h-fit
        p-4 self-center
        bg-slate-200">
        <table class="min-w-full overflow-auto">
            <thead class="border-b">
                <tr>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Id
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Libelle
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Début
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Fin
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Reunion Primo-Donnant
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Duree d'un passage
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Lieu
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Dates d'inscription
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        En cours
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($evenements as $evenement)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $evenement->id }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->libelle }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->date_debut }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->date_fin }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->date_reunion_primo}}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->duree_passage }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->lieu }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->date_inscription." - ".$evenement->date_fin_inscription }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $evenement->est_cloturer }}
                    </td>
                    <td class="flex justify-center text-sm text-gray-900 font-light  whitespace-nowrap">
                        <button class="px-4 py-2 m-2
                            bg-gray-300 hover:bg-red-600
                            rounded-lg
                            font-semibold hover:text-white
                            transition-all" data-bs-toggle="modal"
                            data-bs-target="#modal_suppresion_{{ $evenement->id }}">
                            X
                        </button>
                    </td>
                </tr>

                <!-- Modal de Cloture d'un evenement -->
                <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
                    id="modal_suppresion_{{ $evenement->id }}" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog relative w-auto pointer-events-none">
                        <div
                            class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                            <div
                                class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                                <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal_suppresionLabel">
                                    Clôture
                                    d'un
                                    evenement</h5>
                                <button type="button"
                                    class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                                    data-bs-dismiss="modal" aria-label="Close">
                                </button>
                            </div>
                            <div class="modal-body relative p-4">
                                <svg class="mx-auto mb-4 w-14 h-14 text-gray-400 " fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 text-center">
                                    Etes-vous sûr de vouloir
                                    clôturer
                                    cet évènement ?</h3>
                            </div>
                            <div
                                class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                                <button type="button"
                                    class="px-4 text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                                    data-bs-dismiss="modal">
                                    Annuler
                                </button>
                                <form action="{{ route('cloture-evenement', $evenement->id) }}" method="POST">
                                    @csrf
                                    <input type="submit" name="{{ $evenement->id }}"
                                        class="px-4 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                        value="Je confirme" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

</section>

@endsection
