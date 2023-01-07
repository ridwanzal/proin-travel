<?php

use App\Http\Controllers\BackviewController;
use App\Http\Controllers\BonusController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\DaftaragenController;
use App\Http\Controllers\DaftarHajiController;
use App\Http\Controllers\DokController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontviewController;
use App\Http\Controllers\PaketController;
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
Route::get('/backview/daftaragen', [BackviewController::class, 'daftaragen']);
Route::get('/backview/daftarhaji', [BackviewController::class, 'daftarhaji']);

Route::get('/auth/login', [BackviewController::class, 'index']);
Route::get('/login', [BackviewController::class, 'index']);
Route::post('/authenticate', [BackviewController::class, 'authenticate'])->name('login.action');
Route::get('/logout', [BackviewController::class, 'logout'])->name('logout.action');
Route::get('/dashboard', [BackviewController::class, 'dashboard']);

Route::post('/kontak/store', [ContactController::class, 'store'])->name('contact.store');

Route::post('/faq/store', [FaqController::class, 'store'])->name('faq.store');
Route::post('/faq/delete', [FaqController::class, 'delete'])->name('faq.delete');
Route::get('/backview/faq/edit/{id}', [BackviewController::class, 'faqedit'])->name('faq.faqedit');
Route::post('/faq/update', [FaqController::class, 'update'])->name('faq.update');

Route::post('/bonuslist/store', [BonusController::class, 'storeList'])->name('bonuslist.store');
Route::post('/bonushighlight/store', [BonusController::class, 'storeHightlight'])->name('bonushighlight.store');
Route::post('/bonuslist/delete', [BonusController::class, 'deleteList'])->name('bonusList.delete');
Route::post('/bonushighlight/delete', [BonusController::class, 'deleteHighlight'])->name('bonushighlight.delete');
Route::get('/backview/bonus/edit/{id}', [BackviewController::class, 'bonusedit'])->name('bonus.edit');
Route::post('/bonuslist/update', [BonusController::class, 'update'])->name('bonuslist.update');

Route::post('/testimoni/store', [TestiController::class, 'store'])->name('testi.store');
Route::post('/testimoni/delete', [TestiController::class, 'delete'])->name('testi.delete');
Route::get('/backview/testimoni/edit/{id}', [BackviewController::class, 'testimoniedit'])->name('testimoni.edit');
Route::post('/testimoni/update', [TestiController::class, 'update'])->name('testi.update');
Route::post('/testimoni/updateimage', [TestiController::class, 'updateimage'])->name('testi.updateimage');

Route::post('/dokumentasi/store', [DokController::class, 'store'])->name('dokumentasi.store');
Route::post('/dokumentasi/delete', [DokController::class, 'delete'])->name('dokumentasi.delete');

Route::get('/backview/paket/edit/{id}', [BackviewController::class, 'paketedit'])->name('paket.paketedit');
Route::post('/paket/store', [PaketController::class, 'store'])->name('paket.store');
Route::post('/paket/update', [PaketController::class, 'update'])->name('paket.update');
Route::post('/paket/updateimage', [PaketController::class, 'updateimage'])->name('paket.updateimage');
Route::post('/paket/delete', [PaketController::class, 'delete'])->name('paket.delete');

Route::post('/daftaragen/store', [DaftaragenController::class, 'store'])->name('daftaragen.store');
Route::post('/daftarhaji/store', [DaftarHajiController::class, 'store'])->name('daftarhaji.store');


// Livewire
Route::get('/user-datatables', function () {
  return view('welcome');
});