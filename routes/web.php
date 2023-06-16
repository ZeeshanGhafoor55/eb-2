<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Dashboard;
use App\Http\Controllers\Menu\MenuController;
use App\Http\Controllers\Footer\FooterController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\Home\HomeCard;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


Route::middleware(['auth','isAdmin'])->group(function () {

    Route::get('/dashboard', [Dashboard::class, 'index']);

    // Menu Route
    Route::get('/dashboard/menu', [MenuController::class, 'index']);
    Route::get('/dashboard/create', [MenuController::class, 'create']);
    Route::post('/dashboard/create', [MenuController::class, 'store']);
    Route::get('/dashboard/edit/{id}', [MenuController::class, 'edit']);
    Route::put('/dashboard/update/{id}', [MenuController::class, 'update']);
    Route::get('/dashboard/delete/{id}', [MenuController::class, 'destroy']);

    // Footer Header Route
    Route::get('/dashboard/footer', [FooterController::class, 'index']);
    Route::get('/dashboard/footer/create', [FooterController::class, 'create']);
    Route::post('/dashboard/footer/create', [FooterController::class, 'store']);
    Route::get('/dashboard/footer/edit/{id}', [FooterController::class, 'edit']);
    Route::put('/dashboard/footer/update/{id}', [FooterController::class, 'update']);

    // Home Controller
    Route::get('/dashboard/home/edit', [HomeController::class, 'edit']);
    Route::put('/dashboard/home/update', [HomeController::class, 'update']);

    // home cards
    Route::get('/dashboard/homecard', [HomeCard::class, 'index']);
    Route::get('/dashboard/homecard/create', [HomeCard::class, 'create']);
    Route::post('/dashboard/homecard/create', [HomeCard::class, 'store']);
    Route::get('/dashboard/homecard/edit/{id}', [HomeCard::class, 'edit']);
    Route::put('/dashboard/homecard/update/{id}', [HomeCard::class, 'update']);
    Route::get('/dashboard/homecard/delete/{id}', [HomeCard::class, 'destroy']);
});