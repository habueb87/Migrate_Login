<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\bioController;
use App\Http\Controllers\commentsController;
use App\Http\Controllers\logController;

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

Route::get('main', [mainController::class, 'index'])->name('main');
Route::get('/', [mainController::class, 'index']);
Route::get('bio', [bioController::class, 'index']);
Route::get('comments', [commentsController::class, 'index']);
Route::get('login', [logController::class, 'index'])->name('login');
Route::post('login1', [logController::class, 'login1']);
