<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoachController;

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

Route::get('/hello/building', [CoachController::class, 'index']);
Route::get('/hello/{room?}', [CoachController::class, 'second']);