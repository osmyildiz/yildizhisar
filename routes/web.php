<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');
Route::get('/table_rezervations', [App\Http\Controllers\HomeController::class, 'table_rezervations'])->name('table_rezervations');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/events', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/gallery', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/wedding', [App\Http\Controllers\HomeController::class, 'wedding'])->name('wedding');
Route::get('/restaurant', [App\Http\Controllers\HomeController::class, 'restaurant'])->name('restaurant');




Route::get('/our-menu', [App\Http\Controllers\HomeController::class, 'ourMenu'])->name('our-menu');
Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    Session::save();
    return redirect()->back();
})->name("lang");
//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

//Route::get('{any}', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

//Language Translation
//Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/panel', [HomeController::class, 'panel'])->name('panel');

});


    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'login_v'])->name('login_v');
    Route::post('/login_1', [LoginController::class, 'action1'])->name('admin.login_1');
    Route::post('/login1', [HomeController::class, 'login'])->name('login1');

