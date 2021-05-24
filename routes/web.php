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
use app\http\controllers\EmpleadosControllers;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/contacto', function () {
    return view('pages.contact');
});

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/vision', function () {
    return view('layouts.vision');
});

Route::get('/ubicacion', function () {
    return view('layouts.ubicacion');
});

Route::get('/biografia', function () {
    return view('layouts.biografia');
});

// Route::get('/empleados', function () {
//     return view('index.blade');
// });

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// Route::get('/empleados/create', [EmpleadosController::class, 'create']);