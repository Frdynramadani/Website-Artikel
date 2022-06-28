<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'index'])->name('dashboard');
Route::get('detail-artikel', [FrontendController::class, 'detail'])->name('detail-artikel');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('kategori', KategoriController::class);

Route::prefix('artikel')->group(function () {
Route::get('/', [ArtikelController::class, 'table'])->name('artikel.table');
Route::get('create', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('create', [ArtikelController::class, 'store']);
Route::get('edit/{kategori:id}', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::put('edit/{kategori:id}', [ArtikelController::class, 'update']);
Route::delete('delete/{kategori:id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
Route::delete('delete/{artikel:id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');








});

