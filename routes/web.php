<?php

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
    return view('Masyarakat.home');
});

Route::get('registrasi',[MasyarakatControll::class,'registrasi']);
//mengirim data ke server
Route::post('registrasi/simpan',[MasyarakatControll::class,'simpan']);

Route::get('login',[MasyarakatControll::class,'login']);
Route::post('login',[MasyarakatControll::class,'ceklogin']);

Route::get('laporan',[MasyarakatControll::class,'laporan']);
Route::post('laporan',[MasyarakatControll::class,'laporan']);

Route::get('Masyarakat/validasi',[MasyarakatControll::class,'validasi']);

