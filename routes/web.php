<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Dashboard\Dashboard;
use App\Http\Controllers\Dashboard\LoginController;
use App\Http\Controllers\Dashboard\LogoutController;
use App\Http\Controllers\Dashboard\RegisterController;

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

Route::get('about', [HomeController::class, 'index'])->name('about');
Route::get('team', [HomeController::class, 'team'])->name('team');
Route::get('allcase', [HomeController::class, 'allcase'])->name('allcase');
Route::get('singlecase', [HomeController::class, 'singlecase'])->name('singlecase');
Route::get('testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('pricing', [HomeController::class, 'pricing'])->name('pricing');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('serviceall', [HomeController::class, 'serviceall'])->name('serviceall');
Route::get('service/{id}', [HomeController::class, 'service'])->name('service');
Route::get('addons', [HomeController::class, 'addons'])->name('addons');
Route::get('notfound', [HomeController::class, 'notfound'])->name('notfound');
Route::get('blog', [HomeController::class, 'news'])->name('blog');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('steptwo', [HomeController::class, 'steptwo'])->name('steptwo');
Route::get('stepthree', [HomeController::class, 'stepthree'])->name('stepthree');
Route::get('stepfour', [HomeController::class, 'stepfour'])->name('stepfour');
Route::get('stepfive', [HomeController::class, 'stepfive'])->name('stepfive');
Route::get('stepsix', [HomeController::class, 'stepsix'])->name('stepsix');
Route::get('stepseven', [HomeController::class, 'stepseven'])->name('stepseven');
Route::get('stepeight', [HomeController::class, 'stepeight'])->name('stepeight');
Route::get('stepnine', [HomeController::class, 'stepnine'])->name('stepnine');
Route::get('stepten', [HomeController::class, 'stepten'])->name('stepten');
Route::get('stepelveven', [HomeController::class, 'stepelveven'])->name('stepelveven');
Route::get('steptevele', [HomeController::class, 'steptevele'])->name('steptevele');
Route::get('stepthirteen', [HomeController::class, 'stepthirteen'])->name('stepthirteen');
Route::get('stepfourteen', [HomeController::class, 'stepfourteen'])->name('stepfourteen');
Route::get('stepfifteen', [HomeController::class, 'stepfifteen'])->name('stepfifteen');
Route::get('stepsixteen', [HomeController::class, 'stepsixteen'])->name('stepsixteen');
Route::get('stepseventeen', [HomeController::class, 'stepseventeen'])->name('stepseventeen');
Route::get('stepeighteen', [HomeController::class, 'stepeighteen'])->name('stepeighteen');

Route::get('stepnineteen', [HomeController::class, 'stepnineteen'])->name('stepnineteen');
Route::get('steptwenty', [HomeController::class, 'steptwenty'])->name('steptwenty');
Route::get('steptwentyone', [HomeController::class, 'steptwentyone'])->name('steptwentyone');
Route::get('steptwentytwo', [HomeController::class, 'steptwentytwo'])->name('steptwentytwo');
Route::get('steptwentythree', [HomeController::class, 'steptwentythree'])->name('steptwentythree');
Route::get('steptwentyfour', [HomeController::class, 'steptwentyfour'])->name('steptwentyfour');
Route::get('steptwentyfive', [HomeController::class, 'steptwentyfive'])->name('steptwentyfive');
Route::get('steptwentysix', [HomeController::class, 'steptwentysix'])->name('steptwentysix');

Route::get('dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('dashboardhrm', [Dashboard::class, 'hrm'])->name('dashboardhrm');

Route::get('/login', [LoginController::class, 'form'])->name('login.form');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
Route::get('/logout', LogoutController::class)->name('logout');
Route::get('register', [RegisterController::class, 'form'])->name('register.form');
Route::post('register', [RegisterController::class, 'register'])->name('register.user');

Route::get('fetures/{id}', [HomeController::class, 'fetures'])->name('fetures');
Route::get('privacy',[HomeController::class, 'privacy'])->name('privacy');
Route::get('terms',[HomeController::class, 'terms'])->name('terms');
Route::post('registration',[HomeController::class, 'registration'])->name('regsiterfromhome');
Route::post('requsetcallback',[HomeController::class, 'requsetcallback'])->name('requsetcallback');
Route::post('getquotedetails',[HomeController::class, 'getquotedetails'])->name('getquotedetails');

Route::post('sendmail',[HomeController::class, 'sendmail'])->name('sendmail');
Route::get('/', function () {
    return view('frontend.home');
});
