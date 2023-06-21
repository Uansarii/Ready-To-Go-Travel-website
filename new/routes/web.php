<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Packages;
use App\Http\Controllers\NavigationController;
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

Route::get('/', function () {
    \Session::flush();
    \Auth::logout();
    return redirect('welcome');
});

Route::get('admindashboard', [AuthController::class, 'admindash'])->name('admin');

Route::get('welcome', [AuthController::class, 'welcome'])->name('welcome');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('register', [AuthController::class, 'register_view'])->name('register');
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('adminlogin', [AuthController::class, 'adminlogin'])->name('adminlogin');
Route::post('admindashboard', [AuthController::class, 'admin_dashboard'])->name('admindash');
Route::get('adminreviews', [AuthController::class, 'adminreviews'])->name('adminreviews');



Route::get('packages', [NavigationController::class, 'package'])->name('package');

Route::get('bookings',[NavigationController::class, 'bookings'])->name('bookings');
Route::post('bookings',[NavigationController::class, 'bookings_post'])->name('bookings');

Route::post('customized_bookings', [NavigationController::class, 'customized_bookings'])->name('customized_bookings');

Route::get('reservations', [NavigationController::class, 'reservations'])->name('reservations');
Route::get('faq', [NavigationController::class, 'faq'])->name('faq');

Route::get('terms', [NavigationController::class, 'terms'])->name('terms');
Route::get('explore', [NavigationController::class, 'explore'])->name('explore');
Route::post('explore_forms', [NavigationController::class, 'explore_forms'])->name('explore_forms');

Route::post('faq', [NavigationController::class, 'faq_post'])->name('faq');

Route::get('advertisement', [NavigationController::class, 'advertisement'])->name('advertisement');
Route::post('contact', [NavigationController::class, 'contact_post'])->name('contact');

Route::get('destroy', [NavigationController::class, 'destroy'])->name('destroy');
Route::get('destroy_review', [NavigationController::class, 'destroy_review'])->name('destroy_review');


Route::get('contact', [NavigationController::class, 'contact'])->name('contact');
Route::get('about', [NavigationController::class, 'about'])->name('about');

Route::get('Kashmir', [Packages::class, 'kashmir'])->name('kashmir');
Route::get('Shogran', [Packages::class, 'shogran'])->name('shogran');
Route::get('Naran', [Packages::class, 'naran'])->name('naran');
Route::get('Murree', [Packages::class, 'Murree'])->name('murree');
Route::get('FairyMeadows', [Packages::class, 'fairymeadows'])->name('fairymeadows');
Route::get('Swat', [Packages::class, 'swat'])->name('swat');

Route::get('confirm', [AuthController::class, 'confirm'])->name('confirm');
Route::get('customized', [NavigationController::class, 'customized'])->name('customized');

Route::get('home', [NavigationController::class, 'home'])->name('home');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middlware' => 'auth'], function () {
   
});