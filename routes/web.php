<?php

use App\Http\Controllers\HomeController;
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

/*
dans un nouveau projet : laravel_crud_show_exo_1
- donne la possibilité de créer des ingredients ( nom , quantite, photo'lien vers votre dossier public' )
- example : Sel 1kg
- une view avec tous les ingrédients ( juste les noms + button suppression )
- chaque ingrédient est cliquable et nous mènes sur une view show ou on ne voit que l'ingrédient en question , son nom , sa quantité et sa photo, dans cette page il y a le fameux bouton pour supprimer l'ingrédient a nouveau*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/create', [HomeController::class, 'create'])->name('create');

Route::post('/store', [HomeController::class, 'store'])->name('store');

Route::delete('/delete/{id}', [HomeController::class, 'destroy'])->name('delete');

Route::get('/show/{id}', [HomeController::class, 'show'])->name('show');
