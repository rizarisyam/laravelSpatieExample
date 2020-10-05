<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('admin-page', function () {
    return "Halaman untuk admin";
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return "Halaman untuk User";
})->middleware('role:user')->name('user.page');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
