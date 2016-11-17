<?php

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


Route::get('/home', function () {
    return view('home');
});


Route::get('/add', function () {
    return view('add');
});

// Route::get('', function () {
//     $site_title = 'Laravel 5';
//     return view('welcome', compact('site_title'));
// });

// Route::get('/contact', function () {
//     $site_title = 'Laravel 5';
//     return view('contact', compact('site_title'));
// });

// Route::post('/send', function () {
//     $site_title = 'Laravel 5';
//     return view('send', compact('site_title'));
// });


