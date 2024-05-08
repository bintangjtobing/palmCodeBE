<?php

use App\Http\Controllers\Api\FormController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Import semua controller yang akan digunakan
use App\Http\Controllers\Api\MemberController;
use App\Http\Controllers\Api\SurfingBookingController;
use App\Http\Controllers\Api\IDVerificationController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CountryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('booking',FormController::class);
    Route::resource('members', MemberController::class);
    Route::resource('surfing-bookings', SurfingBookingController::class);
    Route::resource('id-verifications', IDVerificationController::class);
    Route::resource('countries', CountryController::class);
});
Route::post('login', [AuthController::class, 'login']);

// Public routes
Route::post('register', [AuthController::class, 'register']);
Route::post('otp', [AuthController::class, 'otp']);