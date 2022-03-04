<?php

use App\Http\Controllers\EvenementController;
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
Route::get('Accueil',
    [EvenementController::class,'retourneAccueil']
    )->name('Accueil');   //->middleware('auth')

//Route vers un evenement
Route::get(
    'Evenement/{id}',
    [EvenementController::class,'retourneEvenement']
    )->name('Evenement');      //->middleware('auth')

//Route vers l'evenement en cours
Route::get(
    'Evenement',
    [EvenementController::class,'retourneEvenementEnCours']
    )->name('EvenementEnCours');      //->middleware('auth')

//Route vers l'ensemble des évenements
Route::get('Evenements',
    [EvenementController::class,'retourneEvenements']
    )->name('Evenements');       //->middleware('auth')

//Authentification LiveWire
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
    })->name('dashboard');

//Route vers le formulaire d'ajout d'evenement
Route::get('creation-evenement',
    [EvenementController::class,'create']
    )->name('creation-evenement');   //->middleware('auth')->middleware('IsAdmin')

//Route du formulaire d'ajout d'evenement validé
Route::get('validation-creation-evenement',
    [EvenementController::class,'store']
    )->name('validation-creation-evenement');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire de MAJ d'evenement
Route::get('modification-evenement/{id}',
    [EvenementController::class,'edit']
    )->name('modification-evenement');   //->middleware('auth')

//Route du formulaire de MAJ d'evenement validé
Route::get('validation-modification-evenement/{id}',
[EvenementController::class,'update']
)->name('validation-modification-evenement/{id}');   //->middleware('auth')->middleware('IsAdmin')

//Route vers le formulaire de MAJ d'evenement
Route::get('suppression-evenement/{id}',
    [EvenementController::class,'destroy']
    )->name('suppression-evenement/{id}');   //->middleware('auth')

//Route vers le formulaire d'ajout photo
Route::get('creation-photo',
    [PhotoController::class,'create']
    )->name('creation-photo');   //->middleware('auth')->middleware('IsAdmin')

