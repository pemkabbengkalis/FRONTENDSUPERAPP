<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::match(['get', 'post'], 'login/action', [LoginController::class, 'actionLogin'])->name('action_login');
Route::get('layanan/{id_layanan}', [LayananController::class, 'getDetailLayanan'])->name('detail_layanan');
Route::match(['get', 'post'], 'layanan/pengajuan/{id_layanan}', [LayananController::class, 'pengajuanLayanan'])->name('pengajuan');
