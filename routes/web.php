<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DataController;
use  App\Http\Controllers\AuthController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\SupervisiController;

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


Route::get('/login', [AuthController::class, 'login']);
Route::post('/dashboard', [AuthController::class, 'postlogin']);

Route::group(['middleware' => ['auth', 'checkRole:kurikulum']], function () {
    Route::get('/kepsek', [DataController::class, 'kepsek']);
    Route::get('/kepsek/dashboard', [DataController::class, 'fiturkepsek']);
    Route::get('/guru', [DataController::class, 'guru']);
    Route::get('/guru/dashboard', [DataController::class, 'fiturguru']);
    Route::get('/kurikulum', [DataController::class, 'kurikulum']);
    Route::get('/kurikulum/dashboard', [DataController::class, 'fiturkurikulum']);
    Route::get('/laporansupervisi', [SupervisiController::class, 'supervisi']);
    Route::get('/supervisor', [SupervisiController::class, 'supervisi']);
    Route::post('/guru/dashboard/upload',[AuthController::class, 'create']);


});
Route::group(['middleware' => ['auth', 'checkRole:guru']], function () {
    Route::post('/dashboard/upload',[GuruController::class, 'create2']);
    Route::get('/dashboard/data',[GuruController::class, 'home'])->name('home');
});
