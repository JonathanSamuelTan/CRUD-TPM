<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
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

Route::get('/welcome', [ObatController::class, 'index'])->name('welcome'); 
Route::get('/add-obat',[ObatController::class, 'create'])->name('add');
Route::post('/store-obat',[ObatController::class, 'store'])->name('store');


