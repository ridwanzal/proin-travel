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
Route::get('/products', [FrontviewController::class, 'products']);
Route::get('/about', [FrontviewController::class, 'about']);
Route::get('/sources', [FrontviewController::class, 'sources']);
Route::get('/facilities', [FrontviewController::class, 'facilities']);
Route::get('/contact', [FrontviewController::class, 'contact']);

Route::post('/ContactUsForm', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');


// Backview

Route::get('/auth/login', [BackviewController::class, 'index']);
Route::get('/login', [BackviewController::class, 'index']);
