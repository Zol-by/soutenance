<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/new_etudiant', function () {
    return view('new_etudiant');
});

Route::get('/liste_etudiant', function () {
    return view('liste_etudiant');
});

Route::get('/dmde_soutenance', function () {
    return view('dmde_soutenance');
});



Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

// Route::get('Clients/new_client', [ClientsController::class, 'create_client'])->name('create_client');
// Route::get('Clients/liste_client', [ClientsController::class, 'index'])->name('liste_client');
// Route::post('Clients/new_client', [ClientsController::class, 'store'])->name('store_client');



