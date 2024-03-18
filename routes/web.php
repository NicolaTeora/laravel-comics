<?php

use Illuminate\Support\Facades\Route;

/**
 * imposto l'uso del PageController per utilizzarlo
 * costruisco "use" con il "nomespace" della PageController +
 * il nome della classe "PageController"
 */

use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('characters');

Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::get('/comic_det/{id}', [PageController::class, 'comicDetail'])->name('comic_det');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');
