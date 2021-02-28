<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PollController;
// use App\Http\Controllers\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index']);
Route::post('/proses_login', [UserController::class, 'store']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/home', [PollController::class, 'index']);
Route::get('/tambah_poll', [PollController::class, 'create']);
Route::post('/tambah_poll', [PollController::class, 'store']);


