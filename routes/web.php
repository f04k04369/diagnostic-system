<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']);
Route::get('/question', [\App\Http\Controllers\QuestionController::class, 'question']);
Route::post('/result', [\App\Http\Controllers\ResultController::class, 'result']);
Route::post('/thanks', [\App\Http\Controllers\ResultController::class, 'form']);
