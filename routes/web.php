<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PublishmentController;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('layouts.admin-layout');
// });
Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/article', [HomeController::class, 'article'])->name('article.index');
Route::get('/article/{slug}', [HomeController::class, 'articleShow'])->name('article.show');


Route::post('/publishment', [PublishmentController::class, 'publishing'])->name('publishment.update');
Route::middleware('auth')->prefix('/dashboard')->name('dashboard.')->group(function () {
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});
