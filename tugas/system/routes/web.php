<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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
});

Route::get('home', function () {
    return view('client.home');
});

Route::get('about', function () {
    return view('client.about');
});

Route::get('contact', function () {
    return view('client.contact');
});

Route::get('login', function () {
    return view('login');
});

Route::get('dashboard', function () {
    return view('admin.dashboard');
});

Route::get('category', function () {
    return view('admin.category');
});

Route::get('icons', function () {
    return view('admin.icons');
});

Route::get('product', function () {
    return view('admin.product');
});

Route::get('user', function () {
    return view('admin.user');
});