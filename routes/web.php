<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatControll;
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
    return view('LayoutUtama');
});

Route::get('home', function () {
    return view('Masyarakat.home');
});

Route::get('registrasi',[MasyarakatControll::class,'registrasi']);
//mengirim data ke server
Route::post('registrasi/simpan',[MasyarakatControll::class,'simpan']);

Route::get('login',[MasyarakatControll::class,'login']);
Route::post('login',[MasyarakatControll::class,'ceklogin']);

Route::get('Masyarakat/laporan',[MasyarakatControll::class,'laporan']);
Route::post('Masyarakat/laporan',[MasyarakatControll::class,'laporan']);

Route::get('laporan',[MasyarakatControll::class,'laporan']);
Route::post('laporan',[MasyarakatControll::class,'laporankan']);



Route::get('Masyarakat/validasi',[MasyarakatControll::class,'validasi']);

//admin
Route::get('adminLogin',[AdminController::class,'loginA']);
Route::post('adminLogin',[AdminController::class,'cekloginA']);