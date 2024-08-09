<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\BookingsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BaseController::class, 'index'])->name('index');

Route::get('packages', [BaseController::class, 'view_package'])->name('packages');

Route::get('package-details', [BaseController::class, 'view_package_details'])->name('package-details');

Route::get('products', [BaseController::class, 'view_product'])->name('products');

Route::get('product-details', [BaseController::class, 'view_product_details'])->name('product-details');

Route::get('contact', [BaseController::class, 'view_contact'])->name('contact');

Route::get('register', [AuthController::class, 'view_register'])->name('register');

Route::get('login', [AuthController::class, 'view_loign'])->name('login');

Route::get('profile', [ProfileController::class, 'view_profile'])->name('profile');

Route::get('cart', [BaseController::class, 'view_cart'])->name('cart');

Route::get('checkout', [BaseController::class, 'view_checkout'])->name('checkout');

Route::post('booking', [BaseController::class, 'booking'])->name('bookings.store');



// admin routes 
// ------------

Route::get('dashboard', [AdminController::class, 'view_index']);

Route::resource('admin-appointments', AppointmentsController::class);

Route::resource('admin-bookings', BookingsController::class);

Route::resource('admin-contacts', ContactsController::class);

Route::resource('admin-history', HistoryController::class);

Route::resource('admin-packages', PackagesController::class);

Route::resource('admin-patients', PatientController::class);

Route::get('patient-profile', [PatientController::class, 'view_patient_profile']);

Route::get('registered-patients', [PatientController::class, 'view_registered_patients']);

Route::resource('admin-products', ProductsController::class);

Route::resource('admin-testimonials', TestimonialsController::class);

Route::resource('users', UsersController::class);



Route::get('new-orderes', [OrderController::class, 'view_new_orders']);

Route::get('shipped-orderes', [OrderController::class, 'view_shipped_orders']);

Route::get('delivered-orderes', [OrderController::class, 'view_delivered_orders']);



