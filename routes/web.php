<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'landingPage'])->name('home.landing_page');

Route::get('/home', [HomeController::class, 'landingPage'])->name('home.page');


Route::get('/about-us', [HomeController::class, 'aboutUsPage'])->name('page.about_us');

Route::get('/resort', [HomeController::class, 'resortPage'])->name('page.resort');

Route::get('/activities', [HomeController::class, 'activitiesPage'])->name('page.activities');

Route::get('/bar-and-restaurant', [HomeController::class, 'barAndRestaurantPage'])->name('page.bar_and_restaurant');

Route::get('/contact-us', [HomeController::class, 'contactUsPage'])->name('page.contact_us');

