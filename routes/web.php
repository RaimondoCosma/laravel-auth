<?php

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\ProfileController;
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

// Rotte pubbliche
Route::get('/', function () {
    return view('welcome');
});

// Rotte protette da autenticazione
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('projects', ProjectController::class)->parameters(['projects' => 'project:slug']);
});

// Tutte le rotte di autenticazione (registrazione, login ecc...)
require __DIR__.'/auth.php';
