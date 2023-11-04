<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MasyarakatControll;
use App\Http\Middleware\AdminMidd;
use App\Http\Middleware\MasyarakatMidd;
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
Route::get('logout',[MasyarakatControll::class,'logout']);



Route::get('laporan',[MasyarakatControll::class,'laporan'])->middleware(MasyarakatMidd::class);
Route::post('laporan',[MasyarakatControll::class,'ceklaporan']);



Route::get('validasi',[AdminController::class,'validasi'])->middleware(AdminMidd::class);

//admin
Route::get('adminLogin',[AdminController::class,'loginA']);
Route::post('adminLogin',[AdminController::class,'cekloginA']);

Route::get('registrasiAdmin',[AdminController::class,'registrasiAdmin']);
Route::post('registrasiAdmin',[AdminController::class,'simpen']);
Route::post('logout',[AdminController::class,'logout']);

Route::get('homeAdmin', function () {
    return view('Admin.homeAdmin');
});

Route::get('admin',[AdminController::class,'admin']);
