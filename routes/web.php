<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserControlleryh;
use App\Http\Controllers\User\CheckoutController;

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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('checkout/success', [CheckoutController::class, 'success'])->name('checkout.success');
Route::get('checkout/{camps:slug}', [CheckoutController::class, 'create'])->name('checkout.create');

// socialite routes
Route::get('sign-in-google', [UserControlleryh::class, 'google'])->name('user.login.google');
Route::get('auth/google/callback', [UserControlleryh::class, 'handleProviderCallback'])->name('user.google.callback');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
