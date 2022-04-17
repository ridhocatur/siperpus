<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Daftar_c;
use App\Http\Controllers\Login_c;

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
    return view('utama', [
        "title" => "Selamat Datang di SiPerpus"
    ]);
});


Route::get('daftar', [Daftar_c::class,'index']);
Route::post('daftar', [Daftar_c::class,'store']);

Route::get('login', [Login_c::class,'index']);
Route::post('login', [Login_c::class,'masuk']);
