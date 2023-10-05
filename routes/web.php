<?php

use App\Http\Controllers\IndexController;
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
Route::get('/jadwal-sholat', [IndexController::class, 'jadwal_sholat'])->name('jadwalSholat');
Route::get('/al-quran', [IndexController::class, 'alquran'])->name('alquran');

Route::get('/materi/rasa-bersyukur', function () {
    return view('materi/bersyukur');
});

Route::get('/materi/hari-akhir', function () {
    return view('materi/kiamat');   
});

Route::get('/materi/menjadi-yang-terbaik', function () {
    return view('materi/menjadi-terbaik');
});

// // hdr
// Route::get('/', [IndexController::class, 'index']);


// Route::get('/', [IndexController::class, 'index']);
