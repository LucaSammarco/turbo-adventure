<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as GuestHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RazzaController;
use App\Http\Controllers\Admin\PersonaggioController;

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

Route::get('/home', [GuestHomeController::class, 'index'])->name('home');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(
    function () {
        Route::get('/razze', [RazzaController::class, 'index'])->name('razze.index');
        Route::get('/personaggi', [PersonaggioController::class, 'index'])->name('personaggi.index');
});


Route::get('admin/admin-home', [AdminHomeController::class, 'index'])->name('admin.home')->middleware('auth');