<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;

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
    return view('landing');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('/home',  [HotelController::class, 'index'])->name('home');

Route::get('/tambah', [HotelController::class, 'tambah'])->name('tambah');

Route::post('/insert', [HotelController::class, 'insert'])->name('insert');

Route::get('/detail/{id}', [HotelController::class, 'detail'])->name('detail');

Route::get('/show/{id}', [HotelController::class, 'show'])->name('show');

Route::post('/Update/{id}', [HotelController::class, 'Update'])->name('Update');

Route::get('/delete/{id}', [HotelController::class, 'delete'])->name('delete');



