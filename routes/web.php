<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/Hoteles/', function () {
    return view('Hoteles');
});
Route::get('/Resutaurantes/', function () {
    return view('Restaurante');
});
Route::get('/Gastronomia/', function () {
    return view('Gastronomia');
});
Route::get('/Zonas_turisitcas/', function () {
    return view('Zonas_turisticas');
});

