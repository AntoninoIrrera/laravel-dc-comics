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

Route::get('/', [ComicsControllerGuest::class, "home"])->name("guest.home");
Route::get('/comics', [ComicsControllerGuest::class, "comics"])->name("guest.comics");
Route::get('/comics/{id}', [ComicsControllerGuest::class, "show"])->name("guest.show");


// Route::get('/admin/comics', [ComicsControllerAdmin::class, "index"])->name("index");
// Route::get('/admin/create', [ComicsControllerAdmin::class, "create"])->name("create");
// Route::get('/comis/{id}', [ComicsControllerAdmin::class, "show"])->name("show");
// Route::post('/admin/store', [ComicsControllerAdmin::class, "store"])->name("store");

// admin/comics ??!!?
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/home', [ComicsControllerAdmin::class, "home"])->name("home");



    
    Route::get('/comics', [ComicsControllerAdmin::class, "index"])->name("index");

    Route::get('/comics/create', [ComicsControllerAdmin::class, "create"])->name("create");

    Route::post('/comics', [ComicsControllerAdmin::class, "store"])->name("store");

    Route::get('/comics/{id}', [ComicsControllerAdmin::class, "show"])->name("show");

    Route::get('/comics/{id}/edit', [ComicsControllerAdmin::class, "edit"])->name("edit");

    Route::put('/comics/{id}', [ComicsControllerAdmin::class, "update"])->name("update");

    Route::delete('/comics/{id}', [ComicsControllerAdmin::class, "destroy"])->name("destroy");


});


