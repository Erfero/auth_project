<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});


// Routes ne nécessitant que l'utilisateur ne soit pas authentifié


/* *****
* route d'inscription
* route de connexion
* route de réinitialisation du mot de passe
***** */

// Route pour l'enrégistrement
Route::get("register", [RegisterController::class, 'create']); // Pour traiter le formulaire d'inscription

Route::post("register", [RegisterController::class, 'store']); // Pour afficher le formulaire d'inscription

// Route pour la connexion
Route::get("login", function() {
    return "login";
});

Route::get('forgot-password', function() {
    return "forgot-password";
});

Route::get('reset-password', function() {
    return "reset-password";
});

// Routes nécessitant que l'utilisateur soit authentifié

/* *****
* route d'inscription
* route de connexion
* route de réinitialisation du mot de passe
***** */