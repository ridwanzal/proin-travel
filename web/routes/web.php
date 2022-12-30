<?php

use App\Http\Controllers\BackviewController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\DokController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontviewController;
use App\Http\Controllers\TestiController;

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
Route::get('/paket-umroh/detail/{param1}', [FrontviewController::class, 'paketUmrohDetailParam']);


// Backview
Route::get('/backview/kontak', [BackviewController::class, 'kontak']);
Route::get('/backview/paket', [BackviewController::class, 'paket']);
Route::get('/backview/bonus', [BackviewController::class, 'bonus']);
Route::get('/backview/testimoni', [BackviewController::class, 'testimoni']);
Route::get('/backview/faq', [BackviewController::class, 'faq']);
Route::get('/backview/dokumentasi', [BackviewController::class, 'dokumentasi']);


Route::get('/auth/login', [BackviewController::class, 'index']);
Route::get('/login', [BackviewController::class, 'index']);
Route::post('/authenticate', [BackviewController::class, 'authenticate'])->name('login.action');
Route::get('/logout', [BackviewController::class, 'logout'])->name('logout.action');
Route::get('/dashboard', [BackviewController::class, 'dashboard']);

Route::post('/kontak/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::post('/faq/delete', [FaqController::class, 'delete'])->name('faq.delete');


Route::post('/bonuslist/store', [BonusController::class, 'storeList'])->name('bonuslist.store');
Route::post('/bonushighlight/store', [BonusController::class, 'storeHightlight'])->name('bonushighlight.store');
Route::post('/bonuslist/delete', [BonusController::class, 'deleteList'])->name('bonusList.delete');
Route::post('/bonushighlight/delete', [BonusController::class, 'deleteHighlight'])->name('bonushighlight.delete');
Route::post('/testimoni/store', [TestiController::class, 'store'])->name('testi.store');
Route::post('/dokumentasi/store', [DokController::class, 'store'])->name('dokumentasi.store');
