<?php

use App\Http\Controllers\DetailLayananController;
use App\Http\Controllers\InformasiController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\LayananController;
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



route::prefix('admin')->middleware(['auth'])->group(
    function () {
        Route::get('dashboard', function () {
            return view('admin.index');
        })->middleware(['auth'])->name('dashboard');
        Route::resource('DetailLayanan', DetailLayananController::class);
        Route::resource('Informasi', InformasiController::class);
        Route::resource('Layanan', LayananController::class);
    }
);


Route::get('/', function () {
    return view('landingpage.index');
});

// Layanan Landingpage 
Route::get('Layanan-MPP', [LandingpageController::class, 'IndexLayanan'])->name('LayananMPP');
Route::get('Layanan-MPP/{id}', [LandingpageController::class, 'DetailLayanan'])->name('DetailLayanan');

// Informasi Landingpage
Route::get('Layanan-Informasi', [LandingpageController::class, 'IndexInformasi'])->name('LayananInformasi');
Route::get('Layanan-Informasi/{id}',[LandingpageController::class, 'DetailInformasi'])->name('DetailInformasi');

require __DIR__ . '/auth.php';
