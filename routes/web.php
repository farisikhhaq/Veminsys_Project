<?php

use App\Http\Controllers\DataUserController;
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

Route::get('/data', function () {
    return view('userdata');
});
Route::get('/', function () {
    return view('userpage');
});

Route::get('/input', [DataUserController::class, 'input']);
Route::get('/proses', [DataUserController::class, 'proses']);

Route::get('/user', function ($id) {
    return view('user');
});