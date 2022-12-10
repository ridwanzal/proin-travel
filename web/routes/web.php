<?php

use App\Http\Controllers\BackviewController;
use App\Http\Controllers\ContactUsFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontviewController;

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

// Frontview

Route::get('/', [FrontviewController::class, 'index']);
Route::get('/haji-khusus', [FrontviewController::class, 'hajiKhusus']);
Route::get('/jadi-agen', [FrontviewController::class, 'jadiAgen']);
Route::get('/paket-umroh', [FrontviewController::class, 'paketUmroh']);
Route::post('/ContactUsForm', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');
Route::get('/paket-umroh/detail/{param1}', [FrontviewController::class, 'paketUmrohDetailParam']);


// Backview

Route::get('/auth/login', [BackviewController::class, 'index']);
Route::get('/login', [BackviewController::class, 'index']);
