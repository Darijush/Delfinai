<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NationController as N;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('nation')->name('n_')->group(function () {
    Route::get('/', [N::class, 'index'])->name('index');
    Route::get('/create', [N::class, 'create'])->name('create');
    Route::post('/create', [N::class, 'store'])->name('store');
    Route::get('/show/{nation}', [N::class, 'show'])->name('show');
    Route::delete('/delete/{nation}', [N::class, 'destroy'])->name('delete');
    Route::get('/edit/{nation}', [N::class, 'edit'])->name('edit');
    Route::put('/edit/{nation}', [N::class, 'update'])->name('update');
});
