<?php

use App\Http\Controllers\Admin\ComicsController as ComicsController;
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

Route::get('/', [ComicsController::class, "index"]);//*tanto per*

Route::get('/comics', [ComicsController::class, "index"])->name("index");


Route::get('/comis/{id}', [ComicsController::class, "show"])->name("show");