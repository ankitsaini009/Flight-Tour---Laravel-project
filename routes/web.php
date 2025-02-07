<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CouponsController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ComentsController;
use App\Http\Controllers\FlightBookingController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HotelBookingController;
use App\Http\Controllers\CarRentalsController;
use App\Http\Controllers\AirportTexisController;
use App\Http\Controllers\AttractionsController;

use App\Http\Controllers\front\HomeController;
use App\Http\Controllers\front\HotelSearchController;
use App\Http\Controllers\front\SearchFlightController;
use App\Http\Controllers\front\RegistertionController;
use App\Http\Controllers\front\FrontuserForgotPasswordController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cleared!";
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth:front_user')->group(function () {

    Route::get('/user-changepass', [HomeController::class, 'userchangepass'])->name('userchangepass');
    Route::post('/user-passwordupdate', [HomeController::class, 'passwordupdate'])->name('passwordupdate');
    Route::get('/front-user-profile', [HomeController::class, 'frontuserprofile'])->name('frontuserprofile');
    Route::any('/front-user-store', [HomeController::class, 'userstore'])->name('frontuserstore');
});

Route::prefix('/')->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('front.index');
    Route::get('/login-user', [RegistertionController::class, 'login'])->name('front.login');
    Route::get('/login', [RegistertionController::class, 'loginuser'])->name('loginuser');
    Route::get('/user/logout', [RegistertionController::class, 'userlogout'])->name('userlogout');
    Route::get('/registration-user', [RegistertionController::class, 'registration'])->name('front.registration');
    Route::any('/registration/create', [RegistertionController::class, 'create_user_1'])->name('front.create_user_1');
    Route::get('/register/password', [RegistertionController::class, 'creatpass'])->name('front.creatpass');
    Route::any('/register/complete', [RegistertionController::class, 'create_user_2'])->name('front.create_user_2');

    Route::get('frontuser/forgot-password', [FrontuserForgotPasswordController::class, 'showLinkRequestForm'])->name('frontuser.password.request');
    Route::post('frontuser/forgot-password', [FrontuserForgotPasswordController::class, 'sendResetLinkEmail'])->name('frontuser.password.email');
    // in auth routs
    // Route::get('frontuser/resetpass/{token}', [FrontuserForgotPasswordController::class, 'show_ResetForm'])->name('frontuser.password.show_ResetForm');
    Route::any('frontuser/reset-password', [FrontuserForgotPasswordController::class, 'reset'])->name('frontuser.password.update');

    Route::prefix('hotel')->group(function () {
        Route::get('/search-hotel', [HotelSearchController::class, 'searchHotel'])->name('search.hotel');
        Route::get('/hotel-detail', [HotelSearchController::class, 'hotelDetail'])->name('hotel.Detail');
        Route::get('/search-hotelbycity', [HotelSearchController::class, 'searchhotelbycity'])->name('search.hotelbycity');
    });

    Route::prefix('flight')->group(function () {

        Route::get('/search-flights', [SearchFlightController::class, 'searchFlights'])->name('flights.search');
        Route::get('/flights-detals/{id}', [SearchFlightController::class, 'flightsdetals'])->name('flights.detals');
        Route::get('/search-locations', [SearchFlightController::class, 'searchLocations'])->name('search.locations');
    });
});

Route::middleware('auth')->group(function () {

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

    Route::prefix('admin/user')->group(function () {

        Route::get('/', [UserController::class, 'index'])->name('user.index');
        Route::get('/user-create', [UserController::class, 'usercreate'])->name('user.create');
        Route::post('/user-store', [UserController::class, 'userstore'])->name('user.store');
        Route::get('/user-edit/{id}', [UserController::class, 'useredit'])->name('user.edit');
        Route::get('/user-destroy/{id}', [UserController::class, 'userdestroy'])->name('user.destroy');
    });
    Route::prefix('coupons')->group(function () {

        Route::get('/', [CouponsController::class, 'index'])->name('coupons.index');
        Route::get('/coupon-create', [CouponsController::class, 'couponcreate'])->name('coupons.create');
        Route::post('/coupon-store', [CouponsController::class, 'couponstore'])->name('coupons.store');
        Route::get('/coupon-edit/{id}', [CouponsController::class, 'couponedit'])->name('coupons.edit');
        Route::get('/coupon-destroy/{id}', [CouponsController::class, 'coupondestroy'])->name('coupons.destroy');
    });

    Route::prefix('blogs')->group(function () {

        Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
        Route::post('/blogs-store', [BlogController::class, 'blogsstore'])->name('blogs.store');
        Route::get('/blogs-create', [BlogController::class, 'blogscreate'])->name('blogs.create');
        Route::get('/blogs-edit/{id}', [BlogController::class, 'blogsedit'])->name('blogs.edit');
        Route::get('/blogs-destroy/{id}', [BlogController::class, 'blogsdestroy'])->name('blogs.destroy');
    });

    Route::prefix('blogs/coments')->group(function () {

        Route::get('/', [ComentsController::class, 'index'])->name('coment.index');
        Route::post('/coment-store', [ComentsController::class, 'comentstore'])->name('coment.store');
        Route::get('/coment-create', [ComentsController::class, 'comentcreate'])->name('coment.create');
        Route::get('/coment-edit/{id}', [ComentsController::class, 'comentedit'])->name('coment.edit');
        Route::get('/coment-destroy/{id}', [ComentsController::class, 'comentdestroy'])->name('coment.destroy');
    });

    Route::prefix('manage_about')->group(function () {

        Route::any('/manage-about-update', [AboutController::class, 'aboutupdate'])->name('manage_about.update');
        Route::get('/manage-about', [AboutController::class, 'aboutShow'])->name('manage_about.show');
    });

    Route::prefix('settings')->group(function () {

        Route::any('/site-settings-update', [SettingsController::class, 'settingsupdate'])->name('settings.update');
        Route::get('/site-settings', [SettingsController::class, 'settingsShow'])->name('settings.show');
    });

    Route::prefix('profile')->group(function () {

        Route::any('/admin-profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::get('/update-profile', [ProfileController::class, 'update'])->name('profile.update');
    });

    Route::prefix('manage-booking/flight-booking')->group(function () {

        Route::get('/', [FlightBookingController::class, 'index'])->name('flight.index');
        Route::post('/flight-booking-store', [FlightBookingController::class, 'flightstore'])->name('flight.store');
        Route::get('/flight-booking-create', [FlightBookingController::class, 'flightcreate'])->name('flight.create');
        Route::get('/flight-booking-edit/{id}', [FlightBookingController::class, 'flightedit'])->name('flight.edit');
        Route::get('/flight-booking-destroy/{id}', [FlightBookingController::class, 'flightdestroy'])->name('flight.destroy');
    });

    Route::prefix('manage-booking/hotel-booking')->group(function () {

        Route::get('/', [HotelBookingController::class, 'index'])->name('hotel.index');
        Route::post('/hotel-booking-store', [HotelBookingController::class, 'hotelstore'])->name('hotel.store');
        Route::get('/hotel-booking-create', [HotelBookingController::class, 'hotelcreate'])->name('hotel.create');
        Route::get('/hotel-booking-edit/{id}', [HotelBookingController::class, 'hoteledit'])->name('hotel.edit');
        Route::get('/hotel-booking-destroy/{id}', [HotelBookingController::class, 'hoteldestroy'])->name('hotel.destroy');
    });

    Route::prefix('manage-booking/car-rentals')->group(function () {

        Route::get('/', [CarRentalsController::class, 'index'])->name('carrentals.index');
        Route::post('/car-rentals-store', [CarRentalsController::class, 'carrentalstore'])->name('carrentals.store');
        Route::get('/car-rentals-create', [CarRentalsController::class, 'carrentaleate'])->name('carrentals.create');
        Route::get('/car-rentals-edit/{id}', [CarRentalsController::class, 'carrentaledit'])->name('carrentals.edit');
        Route::get('/car-rentals-destroy/{id}', [CarRentalsController::class, 'carrentalstroy'])->name('carrentals.destroy');
    });

    Route::prefix('manage-booking/airportTexis')->group(function () {

        Route::get('/', [AirportTexisController::class, 'index'])->name('airportTaxis.index');
        Route::post('/airportTexi-store', [AirportTexisController::class, 'airportTexistore'])->name('airportTaxis.store');
        Route::get('/airportTexi-edit/{id}', [AirportTexisController::class, 'airportTexiedit'])->name('airportTaxis.edit');
        Route::get('/airportTexi-destroy/{id}', [AirportTexisController::class, 'airportTexistroy'])->name('airportTaxis.destroy');
    });

    Route::prefix('manage-booking/attractions')->group(function () {

        Route::get('/', [AttractionsController::class, 'index'])->name('attraction.index');
        Route::post('/attraction-store', [AttractionsController::class, 'attractionstore'])->name('attraction.store');
        Route::get('/attraction-edit/{id}', [AttractionsController::class, 'attractionedit'])->name('attraction.edit');
        Route::get('/attraction-destroy/{id}', [AttractionsController::class, 'attractionstroy'])->name('attraction.destroy');
    });

    Route::any('/admin/profile', [ProfileController::class, 'update'])->name('admin.profile.update');
});
require __DIR__ . '/auth.php';
