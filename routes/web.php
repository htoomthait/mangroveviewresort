<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;

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

Route::get('/karaoke', [HomeController::class, 'karaokePage'])->name('page.karaoke');

Route::get('/contact-us', [ContactUsController::class, 'contactUsPage'])->name('page.contact_us');

Route::post('/submit-contact-us-form', [ContactUsController::class, 'submitContactUsForm'])->name('submit.contact_us_form');

Route::get('/villa-detail/{villaId}', [HomeController::class, 'villaDetail'])->name('page.resort.villa_detail');

