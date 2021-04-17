<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\DevoirController;
use App\Http\Controllers\EtudiantController;

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

Route::get('/', function () {
    return view('Backoffice.layout');
});

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('etudiants', [EtudiantController::class, 'index'])->name('showListeEtudiant');
    Route::get('etudiant/add', [EtudiantController::class, 'create'])->name('addEtudiant');
    Route::post('etudiant/add', [EtudiantController::class, 'store'])->name('storeEtudiant');
    Route::get('etudiant/edit', [EtudiantController::class, 'edit'])->name('editEtudiant');
    Route::post('etudiant/edit', [EtudiantController::class, 'update'])->name('updateEtudiant');
    Route::post('etudiant', [EtudiantController::class, 'destroy'])->name('deleteEtudiant');
    Route::post('etudiant/qr', [EtudiantController::class, 'showQR'])->name('qrEtudiant');

    Route::get('professeurs', [ProfController::class, 'index'])->name('showListeProfesseurs');
    Route::get('professeur/add', [ProfController::class, 'create'])->name('addProfesseur');
    Route::post('professeur/add', [ProfController::class, 'store'])->name('storeProfesseur');
    Route::get('professeur/edit', [ProfController::class, 'edit'])->name('editProfesseur');
    Route::post('professeur/edit', [ProfController::class, 'update'])->name('updateProfesseur');
    Route::post('professeur', [ProfController::class, 'destroy'])->name('deleteProfesseur');


    Route::get('classes', [ClasseController::class, 'index'])->name('showListeClasses');
    Route::get('classe/add', [ClasseController::class, 'create'])->name('addClasse');
    Route::post('classe/add', [ClasseController::class, 'store'])->name('storeClasse');
    Route::get('classe/edit', [ClasseController::class, 'edit'])->name('editClasse');
    Route::post('classe/edit', [ClasseController::class, 'update'])->name('updateClasse');
    Route::post('classe', [ClasseController::class, 'destroy'])->name('deleteClasse');


    // Route::get('notes', [NoteController::class, 'index'])->name('showListenotes');
    



    Route::get('devoirs', [DevoirController::class, 'index'])->name('showListeDevoirs');
    Route::get('devoir/add', [DevoirController::class, 'create'])->name('addDevoir');
    Route::post('devoir/add', [DevoirController::class, 'store'])->name('storeDevoir');
    Route::get('devoir/edit', [DevoirController::class, 'edit'])->name('editDevoir');
    Route::post('devoir/edit', [DevoirController::class, 'update'])->name('updateDevoir');
    Route::post('devoir', [DevoirController::class, 'destroy'])->name('deleteDevoir');
    Route::post('devoir/qr', [DevoirController::class, 'showqr'])->name('qrDevoir');



});

Route::get('home', [HomeController::class, 'home'])->name('showHome');
Route::post('home', [HomeController::class, 'form'])->name('handleform');






// Route::get('/home', function () {
//     return view('Frontoffice.profs.home');
// });


// Route::get('/add', function () {
//     return view('Backoffice.etudiants.add');
// });
