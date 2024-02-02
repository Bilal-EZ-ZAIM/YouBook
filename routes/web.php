<?php

use App\Http\Controllers\liverAcheterController;
use App\Http\Controllers\liversController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\aboutController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/bilanox', [homeController::class, 'inde'])->name('bilanox');
Route::get('/profile', [profileController::class, 'index']);
Route::get('/profile/create', [profileController::class, 'create'])->name('create');
Route::post('/profile/create', [profileController::class, 'store'])->name('store');
Route::get('/livers', [liversController::class, 'index'])->name('liver');
Route::get('/livers/create', [liversController::class, 'create'])->name('create');
Route::post('/livers/create', [liversController::class, 'store'])->name('store');
Route::post('/livers/create', [liversController::class, 'acheter'])->name('acheter');
Route::get('/livers/acheter/data', [liverAcheterController::class, 'getAllData'])->name('liversAllAcheter');

Route::get('/aboutes', [aboutController::class, 'index'])->name('aboutes');