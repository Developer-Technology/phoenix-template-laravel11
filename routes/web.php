<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


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

Route::get('/', function () {

    return view('index')->with('name', 'Ovi');
});
Route::get('/starter', function () {
    return view('pages.starter');
})->name('starter');

Route::get('/layout/navbar-vertical', function () {
    return view('pages.demo.navbar-vertical');
})->name('layout.navbar-vertical');

Route::get('/layout/topnav-slim', function () {
    return view('pages.demo.topnav-slim');
})->name('layout.topnav-slim');

Route::get('/layout/navbar-horizontal', function () {

    return view('pages.demo.navbar-horizontal');
})->name('layout.navbar-horizontal');

Route::get('/layout/navbar-horizontal-slim', function () {

    return view('pages.demo.navbar-horizontal-slim');
})->name('layout.navbar-horizontal-slim');

Route::get('/layout/combo-nav', function () {
    return view('pages.demo.combo-nav');
})->name('layout.combo-nav');

Route::get('/layout/combo-nav-slim', function () {
    return view('pages.demo.combo-nav-slim');
})->name('layout.combo-nav-slim');

Route::get('/layout/dual-nav', function () {
    return view('pages.demo.dual-nav');
})->name('layout.dual-nav');
