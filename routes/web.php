<?php

use App\Http\Controllers\Admin\ComicsController as ComicsControllerAdmin;
use App\Http\Controllers\Guest\ComicsController as ComicsControllerGuest;
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

Route::get('/', [ComicsControllerGuest::class, "index"])->name("home");

Route::get('/admin/comics', [ComicsControllerAdmin::class, "index"])->name("index");


Route::get('/comis/{id}', [ComicsControllerAdmin::class, "show"])->name("show");