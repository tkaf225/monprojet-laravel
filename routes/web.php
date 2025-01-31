<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/accueil', [AuthController::class,'index'])->name('index');

// Afficher le formulaire d'inscription
Route::get('/inscription', [AuthController::class,'showRegistrationForm'])->name('inscription');

// Traitement du formulaire d'inscription
Route::post('/inscription', [AuthController::class,'register'])->name('inscription.post');

Route::get('/settings', [AuthController::class, 'edit'])->name('settings');

Route::get('/my-cards', [AuthController::class, 'my'])->name('my-cards');

// Afficher le formulaire de connexion
Route::get('/', [AuthController::class,'showLoginForm'])->name('connexion');

// Traitement du formulaire de connexion
Route::post('/', [AuthController::class,'login'])->name('connexion.post');

// Route::get('/', function () {

//     return view('welcome');
// });

// Route::get('/connexion', function () {
//     return view('connexion   ');
// });

