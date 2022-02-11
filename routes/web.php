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

Route::get('/', [EvenementController::class,'retourneAccueil']);


Route::get('Accueil',
    [EvenementController::class,'retourneAccueil']
    )->name('Accueil');   //->middleware('auth')

Route::get(
    'Evenement/{id}',
    [EvenementController::class,'retourneEvenement']
    )->name('Evenement');      //->middleware('auth')

Route::get(
    'Evenement',
    [EvenementController::class,'retourneEvenementEnCours']
    )->name('EvenementEnCours');      //->middleware('auth')

Route::get('Evenements',
    [EvenementController::class,'retourneEvenements']
    )->name('Evenements');       //->middleware('auth')

//Authentification LiveWire
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('creation-evenement',
    [EvenementController::class,'create']
    )->name('creation-evenement');   //->middleware('auth')->middleware('IsAdmin')

Route::post('store-evenement',
    [EvenementController::class,'store']
    )->name('store-evenement');   //->middleware('auth')
