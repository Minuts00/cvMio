<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homesController;

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

Route::get('/index', [homesController::class, 'index']);

Route::get('/anagdata', [homesController::class, 'anagdata']);
Route::get('/education', [homesController::class, 'education']);
Route::get('/jobs', [homesController::class, 'jobs']);
Route::get('/miscellaneous', [homesController::class, 'miscellaneous']);