<?php

use App\Http\Controllers\BabyKidController;
use App\Http\Controllers\BeautyHealthController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\HomeCareController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserProfileController;

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

//Home Page
Route::get('/', [HomeController::class, 'home']);

//Product Page
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [FoodBeverageController::class, 'index']);
    Route::get('/beauty-health', [BeautyHealthController::class, 'index']);
    Route::get('/home-care', [HomeCareController::class, 'index']);
    Route::get('/baby-kid', [BabyKidController::class, 'index']);
});

//User Page
Route::get('/user/{id}/name/{name}', [UserProfileController::class, 'profile']);

//Sales Page
Route::get('/sale', [SalesController::class, 'transaction']);
