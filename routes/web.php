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
Route::get('/hakkımızda', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/etkinlikler', [App\Http\Controllers\HomeController::class, 'events'])->name('events');
Route::get('/iletişim', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/galeri', [App\Http\Controllers\HomeController::class, 'gallery'])->name('gallery');
Route::get('/düğün', [App\Http\Controllers\HomeController::class, 'wedding'])->name('wedding');
Route::get('/nişan', [App\Http\Controllers\HomeController::class, 'nisan'])->name('engagement');
Route::get('/kına-gecesi', [App\Http\Controllers\HomeController::class, 'kina'])->name('hennanight');
Route::get('/sünnet-düğünü', [App\Http\Controllers\HomeController::class, 'sunnet'])->name('circumcision');
Route::get('/nikah', [App\Http\Controllers\HomeController::class, 'nikah'])->name('weddingceremony');
Route::get('/doğum-günü-kutlamaları', [App\Http\Controllers\HomeController::class, 'dogumgunu'])->name('birthday');
Route::get('/bekarlığa-veda', [App\Http\Controllers\HomeController::class, 'stagparty'])->name('stagparty');
Route::get('/toplantı-lansman', [App\Http\Controllers\HomeController::class, 'toplanti'])->name('toplanti');
Route::get('/baby-shower', [App\Http\Controllers\HomeController::class, 'babyshower'])->name('babyshower');
Route::get('/şirket-akşam-yemeği', [App\Http\Controllers\HomeController::class, 'companydinner'])->name('companydinner');
Route::get('/event/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'eventspage'])->name('etkinlikpage');
Route::get('/etkinlik/{id}/{slug}', [App\Http\Controllers\HomeController::class, 'eventspage'])->name('eventspage');
Route::get('/restoran', [App\Http\Controllers\HomeController::class, 'restaurant'])->name('restaurant');
Route::post('/add-reservation-web', [AdminController::class, 'add_reservation_web'])->name('add_reservation_web');
Route::post('/add-form-web', [AdminController::class, 'add_form_web'])->name('add_form_web');
Route::post('/add-newsletter', [AdminController::class, 'add_newsletter'])->name('add_newsletter');
Route::get('/kampanyalar', [HomeController::class, 'campaigns'])->name('campaigns');





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
    Route::get('/admin-events', [AdminController::class, 'admin_events'])->name('admin-events');

    Route::get('/test', [AdminController::class, 'test'])->name('test');
    Route::get ('/edit-event/{id}', [AdminController::class, 'edit_event'])->name('event.edit');
    Route::post('/edit-event/{id}', [AdminController::class, 'edit_event1'])->name('edit.event');
    Route::post('/add-event', [AdminController::class, 'add_event'])->name('add_event');

    Route::post('/add-foodtype', [AdminController::class, 'add_foodtype'])->name('add_foodtype');
    Route::get('/edit-foodtype/{id}', [AdminController::class, 'edit_foodtype'])->name('foodtype.edit');
    Route::get ('/delete-foodtype/{id}', [AdminController::class, 'delete_foodtype'])->name('foodtype.delete');
    Route::post('/update-foodtype/{id}', [AdminController::class, 'update_foodtype'])->name('foodtype.update');

    Route::get('/admin-campaign', [AdminController::class, 'admin_campaign'])->name('admin-campaign');
    Route::post('/update-campaign', [AdminController::class, 'update_campaign_page'])->name('campaign.update');






});


    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'login_v'])->name('login_v');
    Route::post('/login1', [HomeController::class, 'login'])->name('login1');

Route::group(['prefix' => 'admin', 'as' => 'admin.','middleware' => 'auth'], function () {
    Route::resource('galleries', GalleryController::class, ['except' => ['index',]]);
    Route::match(['put', 'get'], 'galleries', [GalleryController::class, 'index'])->name('galleries.index');
    Route::post('/category-delete', [GalleryController::class, 'delete'])->name('category.delete');
    Route::post('/category-update', [GalleryController::class, 'categoryUpdate'])->name('category.update');
    Route::post('/category-add', [GalleryController::class, 'categoryAdd'])->name('category.add');
});
