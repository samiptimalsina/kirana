<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\DealerController;
use App\Http\Controllers\FoodMenuController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SpecialDishController;
use App\Http\Controllers\TestimonialController;

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

/* home */

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/contact-us', 'contactUs')->name('contact.us');
    Route::get('/product/{slug}', 'productDetail')->name('admin.details');
    Route::get('/about-us', 'aboutUs')->name('about');
    Route::get('/shop', 'shop')->name('shop');
    Route::get('/galleries', 'blogs')->name('galleries');
    Route::get('/blogs/{slug}', 'blogDetail')->name('blogs.detail');
    Route::get('/dealers', 'dealers')->name('dealers');
});


/* Admin */
Route::controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'index')->name('admin.index');
});

/* User */
Route::resource('user', UserController::class)->only([
    'index', 'destroy'
]);

/* Reservation */
Route::resource('reservation', ReservationController::class)->only([
    'index', 'store'
]);

/* Food Menu */
Route::resource('foodmenu', FoodMenuController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* Special Dish */
Route::resource('specialdishes', SpecialDishController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* Testimonial */
Route::resource('testimonial', TestimonialController::class)->only([
    'index', 'create', 'store', 'edit', 'update', 'destroy'
]);

/* jetstream auth */
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::prefix('admin')->group(function () {
        Route::resource('banners', BannerController::class);
        Route::resource('blogs', BlogController::class);

        Route::match(['post', 'get', 'put'], 'setting', [BannerController::class, 'updateOrCreateSettings'])->name('settings');
        Route::resource('dealers', DealerController::class);
        Route::resource('teams', TeamController::class);
    });
});
