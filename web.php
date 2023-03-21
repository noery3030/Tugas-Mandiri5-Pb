<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;

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
    return view('welcome');
});

//Tambahkan route baru di routes/web.php
Route::get('/salam', function () {
    return "Assalamu'alaikum Sobat, Selamat Belajar Laravel";
    });
    
//Tambahkan route baru di routes/web.php    
Route::get('/pegawai/{nama}/{divisi}', function ($nama,$divisi){
    return 'Nama Pegawai : '.$nama.'<br/>Departemen : '.$divisi;
    });

//Tambahkan route baru di routes/web.php
Route::get('/kabar', function () {
    return view('latihan.kondisi');
    });

Route::get(
    '/mahasiswa',
    [MahasiswaController::class, 'dataMahasiswa']
    );
        
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get(
    '/home',
    [HomeController::class, 'index']
    );

Route::get(
    '/aboutus',[HomeController::class, 'aboutus']);
    