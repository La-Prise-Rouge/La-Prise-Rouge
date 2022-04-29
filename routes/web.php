<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route par défaut
Route::get('/', [EvenementController::class,'retourneAccueil']);

//Route d'accueil
Route::get('accueil',
    [EvenementController::class,'retourneAccueil']
    )->name('accueil');   //->middleware('auth')

//Route vers un evenement
Route::get(
    'evenement/{id}',
    [EvenementController::class,'retourneEvenement']
    )->name('Evenement');

//Route vers une photo
Route::get(
    'photo/{id}',
    [PhotoController::class,'retournePhoto']
    )->name('photo');

//Route vers un evenement
Route::get(
    'faq/{id}',
    [FAQController::class,'retourne_faq']
    )->name('faq');

//Route vers l'evenement en cours
Route::get(
    'Evenement',
    [EvenementController::class,'retourneEvenementEnCours']
    )->name('EvenementEnCours');

//Route vers l'ensemble des évenements
Route::get('Evenements',
    [EvenementController::class,'index']
    )->name('evenements');

//Route vers l'ensemble des évenements
Route::get('photos',
    [PhotoController::class,'retournePhotos']
    )->name('photos');

//Route vers l'ensemble des faqs
Route::get('faqs',
    [FAQController::class,'index']
    )->name('faqs');

//Authentification LiveWire
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');

//Route vers le formulaire d'ajout d'evenement
Route::get('creation-evenement',
    [EvenementController::class,'create']
    )->name('creation-evenement');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire d'ajout d'une FAQ
Route::get('creation-faq',
    [FAQController::class,'create']
    )->name('creation-faq');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire d'ajout d'evenement validé
Route::post('validation-creation-evenement',
    [EvenementController::class,'store']
    )->name('validation-creation-evenement');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire d'ajout d'un partenaire validé
Route::post('validation-creation-partenaire',
    [PartenaireController::class,'store']
    )->name('validation-creation-partenaire');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire d'ajout d'une FAQ validé
Route::post('validation-creation-faq',
    [FAQController::class,'store']
    )->name('validation-creation-faq');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire de MAJ d'evenement
Route::get('modification-evenement/{id}',
    [EvenementController::class,'edit']
    )->name('modification-evenement');   //->middleware('auth')

//Route vers le formulaire de MAJ d'un partenaire
Route::get('modification-partenaire/{id}',
    [PartenaireController::class,'edit']
    )->name('modification-partenaire');   //->middleware('auth')

//Route vers le formulaire de MAJ d'une faq
Route::get('modification-faq/{id}',
    [FAQController::class,'edit']
    )->name('modification-faq');   //->middleware('auth')

//Route du formulaire de MAJ d'evenement validé
Route::post('validation-modification-evenement/{id}',
    [EvenementController::class,'update']
    )->name('validation-modification-evenement');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire de MAJ d'un partenaire validé
Route::post('validation-modification-partenaire/{id}',
    [PartenaireController::class,'update']
    )->name('validation-modification-partenaire');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire de MAJ d'un faq validé
Route::post('validation-modification-faq/{id}',
    [FAQController::class,'update']
    )->name('validation-modification-faq');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire de MAJ d'evenement
Route::delete('suppression-evenement/{id}',
    [EvenementController::class,'destroy']
    )->name('suppression-evenement');   //->middleware('auth')

//Route vers le formulaire de MAJ d'une faq
Route::delete('suppression-faq/{id}',
    [FAQController::class,'destroy']
    )->name('suppression-faq');   //->middleware('auth')

//Route vers le formulaire de MAJ d'evenement
Route::delete('suppression-partenaire/{id}',
    [PartenaireController::class,'destroy']
    )->name('suppression-partenaire');   //->middleware('auth')

//Route vers le formulaire d'ajout photo
Route::get('creation-photo',
    [PhotoController::class,'create']
    )->name('creation-photo');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire d'ajout photo
Route::post('validation-creation-photo',
    [PhotoController::class,'store']
    )->name('validation-creation-photo');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire de suppression photo
Route::delete('suppression-photo/{id}',
    [PhotoController::class,'destroy']
    )->name('suppression-photo');   //->middleware('auth')->middleware('IsAdmin')



// Route Administration
Route::get('/espace_admin/dashboard', [UserController::class, 'show_admin'])->name('dashboard');
Route::get('/espace_admin/gestion_utilisateur', [UserController::class, 'index'])->name('gestion_utilisateur');
Route::get('/espace_admin/gestion_evenement', [EvenementController::class, 'index'])->name('gestion_evenement');

// Routes User
Route::delete('suppression-user/{id}',
    [UserController::class,'destroy']
    )->name('suppression-user');
Route::post('creation-user',
    [UserController::class,'create']
    )->name('creation-user');
Route::post('create_depuis_csv',
    [UserController::class,'create_depuis_csv']
    )->name('create_depuis_csv');
Route::post('import_csv',
    [UserController::class, 'import_csv']
    )->name('import_csv');


// Routes Evenement
Route::delete('suppression-evenement/{id}',
    [EvenementController::class,'destroy']
    )->name('suppression-evenement');
Route::post('creation-evenement',
    [EvenementController::class,'store']
    )->name('creation-evenement');
Route::post('modification-evenement/{id}',   ///{id}
    [EvenementController::class,'update']
    )->name('modification-evenement');
