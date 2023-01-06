<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Models\Katalog_Obat;

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
    $obat = Katalog_Obat::all();
    return view('welcome', compact('obat'));
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/welcome', [ObatController::class, 'index'])->name('welcome'); 
Route::get('/obat/{id}',[ObatController::class, 'show'])->name('detail');
// Route::get('/add-obat',[ObatController::class, 'create'])->name('add');
// Route::post('/store-obat',[ObatController::class, 'store'])->name('store');
// Route::get('/edit/{id}', [ObatController::class, 'edit'])->name('edit'); 
// Route::patch('/update/{id}', [ObatController::class, 'update'])->name('update');
// Route::delete('/delete/{id}', [ObatController::class, 'destroy'])->name('delete');
// Route::get('/add-kegunaan', [App\Http\Controllers\KegunaanController::class, 'create'])->name('add-kegunaan');
// Route::post('/store-kegunaan',[App\Http\Controllers\KegunaanController::class, 'store'])->name('store');

Route::middleware('isAdmin')->group(function(){
    Route::get('/add-obat',[ObatController::class, 'create'])->name('add');
    Route::post('/store-obat',[ObatController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [ObatController::class, 'edit'])->name('edit'); 
    Route::patch('/update/{id}', [ObatController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [ObatController::class, 'destroy'])->name('delete');
    Route::get('/add-kegunaan', [App\Http\Controllers\KegunaanController::class, 'create'])->name('add-kegunaan');
    Route::post('/store-kegunaan',[App\Http\Controllers\KegunaanController::class, 'store'])->name('store');
});