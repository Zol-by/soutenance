<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\InscriptionController;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\EnseignantController;
// use App\Http\Controllers\SalleController;
// use App\Http\Controllers\FiliereController;
// use App\Http\Controllers\DirecteurMemoireController;
// use App\Http\Controllers\UtilisateurController;
// use App\Http\Controllers\JurySoutenanceController;
// use App\Http\Controllers\DemandeSoutenanceController;



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

Auth::routes();

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('new_etudiant', [App\Http\Controllers\InscriptionController::class, 'create_etudiant'])->name('create_etudiant');
Route::get('delete-etudiant/{id}', [App\Http\Controllers\InscriptionController::class, 'delete_etudiant']);
Route::get('show-etudiant/{id}', [App\Http\Controllers\InscriptionController::class, 'show_etudiant'])->name('detail_etudiant');
Route::get('edit-etudiant/{id}', [App\Http\Controllers\InscriptionController::class, 'update_etudiant'])->name('update_etudiant');
Route::post('new_etudiant', [App\Http\Controllers\InscriptionController::class, 'store_etudiant'])->name('store_etudiant');
Route::get('liste_etudiant', [App\Http\Controllers\InscriptionController::class, 'index'])->name('liste_etudiant');

Route::get('new_enseignant', [App\Http\Controllers\EnseignantController::class, 'create_enseignant'])->name('create_enseignant');
Route::get('show-enseignant/{id}', [App\Http\Controllers\EnseignantController::class, 'delete_enseignant'])->name('liste_enseignant');
Route::post('new_enseignant', [App\Http\Controllers\EnseignantController::class, 'store'])->name('store');
Route::get('liste_enseignant', [App\Http\Controllers\EnseignantController::class, 'index'])->name('liste_enseignant');


Route::get('new_salle', [App\Http\Controllers\SalleController::class, 'create_salle'])->name('create_salle');
Route::post('new_salle', [App\Http\Controllers\SalleController::class, 'store_salle'])->name('store_salle');


Route::get('new_filiere', [App\Http\Controllers\FiliereController::class, 'create_filiere'])->name('create_filiere');
Route::post('new_filiere', [App\Http\Controllers\FiliereController::class, 'store_filiere'])->name('store_filiere');

Route::get('new_dm_ms', [App\Http\Controllers\DirecteurMemoireController::class, 'create_dm_ms'])->name('create_dm_ms');
Route::post('new_dm_ms', [App\Http\Controllers\DirecteurMemoireController::class, 'store_dm_ms'])->name('store_dm_ms');
Route::get('liste_dm_ms', [App\Http\Controllers\DirecteurMemoireController::class, 'index'])->name('liste_dm_ms');


Route::get('new_user', [App\Http\Controllers\UtilisateurController::class, 'create_user'])->name('create_user');
Route::post('new_user', [App\Http\Controllers\UtilisateurController::class, 'store_user'])->name('store_user');


Route::get('new_jury', [App\Http\Controllers\JurySoutenanceController::class, 'create_jury_soutenance'])->name('create_jury_soutenance');
Route::get('liste_jurys', [App\Http\Controllers\JurySoutenanceController::class, 'index'])->name('liste_jurys');
Route::get('delete-jury/{id}', [App\Http\Controllers\JurySoutenanceController::class, 'delete_jury']);
Route::post('new_jury', [App\Http\Controllers\JurySoutenanceController::class, 'store_jury_soutenance'])->name('store_jury_soutenance');


Route::get('new_dmd_soutenance', [App\Http\Controllers\DemandesSoutenanceController::class, 'create_dmd_soutenance'])->name('create_dmd_soutenance');
Route::get('show-demande/{id}', [App\Http\Controllers\DemandesSoutenanceController::class, 'show_demande'])->name('detail_photo');
Route::post('new_dmd_soutenance', [App\Http\Controllers\DemandesSoutenanceController::class, 'store_dmd_soutenance'])->name('store_dmd_soutenance');
Route::get('liste_dmd_soutenance', [App\Http\Controllers\DemandesSoutenanceController::class, 'index'])->name('liste_dmd_soutenance');
Route::get('listes_dmd_soutenance', [App\Http\Controllers\DemandesSoutenanceController::class, 'index_2'])->name('listes_dmd_soutenance');


Route::get('update-dmde/{id}', [App\Http\Controllers\DemandesSoutenanceController::class, 'update_dmde']);
Route::post('approuver_dmd/{id}', [App\Http\Controllers\DemandesSoutenanceController::class, 'update_dmde_tratement']);

Route::get('update-dmd/{id}', [App\Http\Controllers\DemandesSoutenanceController::class, 'update_dmd']);
Route::post('rejet_dmd/{id}', [App\Http\Controllers\DemandesSoutenanceController::class, 'update_dmde_tratement']);

// Route::resource('profile', ProfileController::class);approuver_dmd

// Route::resource('dashboard', HomeController::class);

// Route::resource('new_etudiant', InscriptionController::class);

// Route::resource('new_enseignant', EnseignantController::class);

// Route::resource('profile', SalleController::class);

// Route::resource('new_filiere', FiliereController::class);

// Route::resource('new_dm_ms', DirecteurMemoireController::class);

// Route::resource('new_user', UtilisateurController::class);

// Route::resource('new_jury', JurySoutenanceController::class);

// Route::resource('new_dmd_soutenance', DemandeSoutenanceController::class);




