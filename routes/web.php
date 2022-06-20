<?php

use App\Http\Controllers\DetailLayananController;
use App\Http\Controllers\InformasiController;
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

// Route::get('data-inventor', [UserController::class, 'datainventor'])->name('datainventor');
Route::get('/', function () {
    return view('admin.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
