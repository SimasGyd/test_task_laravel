<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ResultController;
use App\Http\Controllers\ResultSummaryController;
use App\Http\Controllers\TestController;
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

Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/test/{id}', [QuestionController::class, 'index'])->name('test.index');
//Route::get('/test/{id}', [QuestionController::class, 'edit'])->name('test.edit');
Route::post('/result/store', [ResultController::class, 'store'])->name('result.store');
Route::get('/result/index/{id}', [ResultController::class, 'index'])->name('result.index');
Route::get('/result/summary/{id}', [ResultSummaryController::class, 'index'])->name('result.summary');
