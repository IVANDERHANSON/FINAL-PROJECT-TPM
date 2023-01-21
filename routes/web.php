<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/payment', function () {
    return view('payment');
})->middleware(['auth', 'verified'])->name('payment');

Route::get('/timeline', function () {
    return view('timeline');
})->middleware(['auth', 'verified'])->name('timeline');

Route::get('/add_member', function () {
    return view('add_member');
})->middleware(['auth', 'verified'])->name('add_member');

Route::get('/cv', function () {
    return view('cv');
})->middleware(['auth', 'verified'])->name('cv');

Route::get('/flazz_card', function () {
    return view('flazz_card');
})->middleware(['auth', 'verified'])->name('flazz_card');

Route::get('/id_card', function () {
    return view('id_card');
})->middleware(['auth', 'verified'])->name('id_card');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
