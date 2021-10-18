<?php

use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\AdminController;
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
Route::post('/add-reservation-web', [AdminController::class, 'add_reservation_web'])->name('add_reservation_web');
Route::post('/add-form-web', [AdminController::class, 'add_form_web'])->name('add_form_web');





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
    Route::get('/reservations', [AdminController::class, 'reservations'])->name('reservations');
    Route::post('/add-reservations', [AdminController::class, 'add_reservations'])->name('add_reservations');
    Route::post('/add-menu', [AdminController::class, 'add_menu'])->name('add_menu');
    Route::get ('/delete-reservations/{id}', [AdminController::class, 'delete_reservations'])->name('reservation.delete');
    Route::get ('/delete-menu/{id}', [AdminController::class, 'delete_menu'])->name('menu.delete');
    Route::get ('/edit-reservations/{id}', [AdminController::class, 'edit_reservations'])->name('reservation.edit');
    Route::post('/edit-reservation/{id}', [AdminController::class, 'edit_reservation'])->name('edit.reservation');
    Route::get('/edit-menu/{id}', [AdminController::class, 'edit_menu'])->name('menu.edit');
    Route::post('/update-menu/{id}', [AdminController::class, 'update_menu'])->name('menu.update');
    Route::get('/admin-menu', [AdminController::class, 'admin_menu'])->name('admin-menu');
    Route::get('/admin-about', [AdminController::class, 'admin_about'])->name('admin-about');
    Route::get('/admin-contact', [AdminController::class, 'admin_contact'])->name('admin-contact');
    Route::get('/admin-forms', [AdminController::class, 'admin_forms'])->name('admin-forms');
    Route::get('/admin-newsletter', [AdminController::class, 'admin_newsletter'])->name('admin-newsletter');
    Route::post('/update-about-page', [AdminController::class, 'update_about_page'])->name('update-about-page');
    Route::post('/update-contact-page', [AdminController::class, 'update_contact_page'])->name('update-contact-page');

    Route::get('/test', [AdminController::class, 'test'])->name('test');


});


    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'login_v'])->name('login_v');
    Route::post('/login1', [HomeController::class, 'login'])->name('login1');

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth'], function () {
    Route::resource('galleries', GalleryController::class, ['except' => ['index',]]);
    Route::match(['put', 'get'], 'galleries', [GalleryController::class, 'index'])->name('galleries.index');

});
