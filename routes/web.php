<?php

use App\Http\Controllers\CekKendaraanController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\HistoryKendaraanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function () {
    return view('auth.login');
});
Route::resource('post', PostController::class);
Route::get('/data', function () {
    return view('Dashboard.userdata');
});
Route::get('/konten', function () {
    return view('landingpage.konten');
});
Route::get('/db', function () {
    return view('Dashboard.DashboardUtama');
});

Route::get('/cekkendaraan', function () {
    return view('CekKendaraan.index');
});
Route::get('/cekkendaraan', function () {
    return view('HistoryKendaraan.index');
});
Route::resource('cekkendaraan', CekKendaraanController::class);
Route::resource('historykendaraan', HistoryKendaraanController::class);
