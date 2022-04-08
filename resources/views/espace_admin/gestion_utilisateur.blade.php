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
                h-16
                px-10
                mb-4
                rounded-lg
                text-2xl font-semibold text-white
                bg-green-600 hover:bg-green-500
                shadow-md shadow-zinc-400
                transition-all">Import CSV</button>
        <button class="
                h-16
                px-10
                mb-4
                rounded-lg
                text-2xl font-semibold text-white
                bg-blue-600 hover:bg-blue-500
                shadow-md shadow-zinc-400
                transition-all" data-bs-toggle="modal" data-bs-target="#modal_creation">Création</button>
    </div>

    {{-- Liste des utilisateurs --}}
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
                        Nom
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Mail
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Note
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Primo-donnant
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        Promotion
                    </th>
                    <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                        X
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($utilisateurs as $utilisateur)
                <tr class="border-b">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                        {{ $utilisateur->id }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $utilisateur->name }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $utilisateur->email }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $utilisateur->note }}
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        @if ($utilisateur->est_primo == 0)
                        oui
                        @else
                        non
                        @endif
                    </td>
                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                        {{ $utilisateur->Promotion->libelle }}
                    </td>
                    <td class="flex justify-center text-sm text-gray-900 font-light  whitespace-nowrap">
                        <button class="px-4 py-2 m-2
                                    bg-gray-300 hover:bg-red-600
                                    rounded-lg
                                    font-semibold hover:text-white
                                    transition-all" data-bs-toggle="modal" data-bs-target="#modal_suppresion">
                            X
                        </button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination de la liste utilisateur --}}
    <nav class="self-center">
        <ul class="inline-flex items-center -space-x-px">
            <li>
                <a href="{{ $utilisateurs->previousPageUrl() }}"
                    class="block py-2 px-3 ml-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                    <span class="sr-only">Previous</span>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </li>
            @for ($i = 1; $i < $utilisateurs->lastPage()+1; $i++)
                @if ($i == $utilisateurs->currentPage())
                <li>
                    <a href="{{ $utilisateurs->url($i)}}" class="py-2 px-3
                                leading-tight
                                text-white hover:text-gray-700
                                bg-gray-300 border border-gray-300 hover:bg-gray-100">
                        {{$i}}
                    </a>
                </li>
                @elseif ($utilisateurs->currentPage() >= $i-3 and $utilisateurs->currentPage() <= $i+3) <li>
                    <a href="{{ $utilisateurs->url($i)}}" class="py-2 px-3
                                leading-tight
                                text-gray-500 hover:text-gray-700
                                bg-white border border-gray-300 hover:bg-gray-100">
                        {{$i}}
                    </a>
                    </li>
                    @endif
                    @endfor
                    <li>
                        <a href="{{ $utilisateurs->url($utilisateurs->lastPage()) }}"
                            class="block py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
        </ul>
    </nav>

    <!-- Modal de Suppresion -->
    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modal_suppresion" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal_suppresionLabel">Suppression
                        d'un
                        utilisateur</h5>
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
                    <h3 class="mb-5 text-lg font-normal text-gray-500 text-center">Etes-vous sûr de vouloir supprimer
                        cet utilisateur ?</h3>
                </div>
                <div
                    class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                    <button type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                        data-bs-dismiss="modal">
                        Annuler
                    </button>
                    <form action="{{ route('suppression-user', $utilisateur->id) }}" method="POST">
                        @csrf
                        @method("DELETE")
                        <input type="submit"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            value="Je confirme" />
                    </form>
                </div>
            </div>
        </div>
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
                        d'un utilisateur</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('creation-user') }}" method="POST">
                    @csrf
                    {{-- Champs --}}
                    <div class="w-full h-full
                        p-4">
                        <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                            <label class="w-1/2 text-center">Nom : </label>
                            <input name="name"
                                 type="text"
                                 class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                            <label class="w-1/2 text-center">Mail : </label>
                            <input name="email"
                                type="text"
                                class="w-1/2
                                    rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                            w-full justify-between items-center
                            mb-2">
                            <label class="w-1/2 text-center">Mot de passe : </label>

                            <div class="flex flex-row
                                w-1/2">

                                <input name="password"
                                    type="text"
                                    class="w-3/5 md:w-auto rounded-l-lg focus:ring-1 focus:ring-zinc-800"
                                    id="champ_mdp">

                                <label class="flex items-center
                                    w-10 p-2
                                    rounded-r-lg font-semibold text-white
                                    bg-green-600 hover:bg-green-500
                                    shadow-md shadow-zinc-400
                                    transition-all"
                                    id="button_genere_mdp">
                                    <ion-icon name="key-sharp" class="text-white text-lg"/>
                                </label>
                            </div>
                        </div>

                    </div>

                    {{-- Annulation et Confirmation --}}
                    <div
                        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
                        <button type="button"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2"
                            data-bs-dismiss="modal">
                            Annuler
                        </button>
                        <input type="submit"
                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                            value="Je confirme" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
