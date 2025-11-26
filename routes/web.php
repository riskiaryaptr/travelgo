<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//home
Route::get('/index', function () {return view('components.page.landingpage.index');})->name('index');
Route::get('/myInbox', function () {return view('components.page.landingpage.myInbox');})->name('myInbox');
Route::get('/helpcenter', function () {return view('components.page.landingpage.helpcenter');})->name('helpcenter');
Route::get('/contactus', function () {return view('components.page.landingpage.contactus');})->name('contactus');
Route::get('/promotion', function () {return view('components.page.landingpage.promotion');})->name('promotion');
Route::get('/hotels', function () {return view('components.page.landingpage.hotels');})->name('hotels');
Route::get('/booking', function () {return view('components.page.landingpage.booking');})->name('booking');
Route::get('/login', function () {return view('components.page.auth.login');})->name('login');