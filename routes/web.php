<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\TvshowController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Models\Movie;
use App\Models\Actor;
use Illuminate\Support\Facades\Input;


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
    return view('home');
});

Route::get('/user', [UserController::class, 'index']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/search', [App\Http\Controllers\SearchController::class, 'search'])->name('search');

Route::get('/movies', [App\Http\Controllers\MovieController::class, 'index'])->name('movies');

Route::get('/tvshows', [App\Http\Controllers\TvshowController::class, 'index'])->name('tvshows');

Route::get('/{imdbID}', [App\Http\Controllers\SearchController::class, 'main'])->name('page.search');

Route::get('/movies/{imdbID}', [App\Http\Controllers\MovieController::class, 'main'])->name('movies.main');

Route::get('/tvshows/{imdbID}', [App\Http\Controllers\TvshowController::class, 'main'])->name('tvshows.main');

Route::get('/actors/{imdbID}', [App\Http\Controllers\ActorController::class, 'main'])->name('actor.main');

Route::get('/nosearch', function () {
    return view('main.nosearch');
})->name('nosearch');

Route::get('/test', [App\Http\Controllers\MovieController::class, 'main'])->name('test.main');

Route::post('/movies/{imdbID}', [App\Http\Controllers\ReviewController::class, 'movie_review'])->name('movies.review');
