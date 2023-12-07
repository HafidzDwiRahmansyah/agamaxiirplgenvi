<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::get('/materi', [IndexController::class, 'materi_agama']);
Route::get('/materi/{slug}', [IndexController::class, 'materiContent']);

Route::get('/berita/{slug}', [IndexController::class, 'beritaContent']);

Route::get('/jadwal-sholat', [IndexController::class, 'jadwal_sholat'])->name('jadwalSholat');

Route::get('/al-quran', [IndexController::class, 'alquran'])->name('alquran');
Route::get('/al-quran/{ayat}/{nama}', [IndexController::class, 'alquranSurah'])->name('alquranSurah');
Route::get('/al-quran/jadwal-adzan/{city}/city', [IndexController::class, 'getDataFromCity']);


// auth 
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'index']);

Route::get('/logout', [AuthController::class, 'logout']);

// admin 
Route::middleware(['auth'])->group(function () { 
    Route::get('/admin', [AdminController::class, 'index']);
    Route::resource('/admin/content', ContentController::class);;
});


// // hdr
// Route::get('/', [IndexController::class, 'index']);


// Route::get('/', [IndexController::class, 'index']);
