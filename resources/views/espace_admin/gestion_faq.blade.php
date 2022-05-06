@extends('espace_admin.overlay_admin')

@section('fil_arianne')
Administration | Gestion FAQ
@endsection

@section('admin_contenu')

<section class="flex flex-col
                w-full h-full
                bg-slate-200">

    <div class="flex flex-row w-full
        justify-around
        mt-5">
        <button class="
                h-16
                px-10
                mb-4
                rounded-lg
                text-2xl font-semibold text-white
                bg-blue-600 hover:bg-blue-500
                shadow-md shadow-zinc-400
                transition-all"
                data-bs-toggle="modal"
                data-bs-target="#modal_creation">
            Ajouter une question
        </button>
    </div>

    <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
        id="modal_creation" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog relative w-auto pointer-events-none">
            <div
                class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
                <div
                    class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
                    <h5 class="text-xl font-medium leading-normal text-gray-800" id="modal_creationLabel">Creation
                        d'une question</h5>
                    <button type="button"
                        class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
                        data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="{{ route('creation-faq') }}" method="POST">
                    @csrf
                    {{-- Champs --}}
                    <div class="w-full h-full
                            p-4">
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Question : </label>
                            <input name="question" type="text" class="w-1/2
                            rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Réponse : </label>
                            <input name="reponse" type="text" class="w-1/2
                                rounded-lg focus:ring-1 focus:ring-zinc-800">
                        </div>
                        <div class="flex flex-col md:flex-row
                                w-full justify-between items-center
                                mb-2">
                            <label class="w-1/2 text-center">Type : </label>
                            <input name="type" type="text" class="w-1/2
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
</section>
@endsection
