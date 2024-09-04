<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\landingController;
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

Route::get('/', function () {
    return view('landingpage.index');
})->name('beranda');
Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('admin.dashboard', compact('title'));
});
Route::get('/tentangDesa', [landingController::class, 'tentangDesa'])->name('tentangDesa');
Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
