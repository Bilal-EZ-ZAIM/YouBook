<?php

use App\Http\Controllers\liverAcheterController;
use App\Http\Controllers\liversController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\LiversReserveController;

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

Route::get('/', [homeController::class, 'inde'])->name('bilanox');
Route::get('/profile', [profileController::class, 'index']);
Route::get('/profile/create', [profileController::class, 'create'])->name('create');
Route::get('/profile/admin', [profileController::class, 'admin'])->name('admin');
Route::post('/profile/create', [profileController::class, 'store'])->name('store');
Route::post('/profile/logout', [profileController::class, 'logout'])->name('logout');
// Route::get('/profile/register', [profileController::class, 'creat'])->name('register');
Route::get('/profile/register', [profileController::class, 'register'])->name('register');
Route::get('/profile/creat', [profileController::class, 'creat']);
Route::post('/profile/creat', [profileController::class, 'login'])->name('login');
Route::get('/livers', [liversController::class, 'index'])->name('liver');
Route::get('/livers/create', [liversController::class, 'create'])->name('create');
// Route::post('/livers/create', [liversController::class, 'store'])->name('store');
Route::post('/livers/res', [liversController::class, 'acheter'])->name('acheter');
Route::get('/livers/acheter/data', [liverAcheterController::class, 'getAllData'])->name('liversAllAcheter');
Route::get('/livers/res', [LiversReserveController::class, 'index'])->name('reserver');

Route::get('/aboutes', [aboutController::class, 'index'])->name('aboutes');