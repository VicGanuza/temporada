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

Route::get('home', function () {
    return View::make('home.home')->nest('social','commons.socials')->nest('header','commons.header')
                             ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('ubicacion-general', function () {
    return View::make('ubicacion.ubicacion-general')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('ubicacion-acceso', function () {
    return View::make('ubicacion.ubicacion-acceso')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('cabanas-servicios', function () {
    return View::make('cabanas.cabanas-servicios')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('cabanas-1Dorm', function () {
    return View::make('cabanas.cabanas-1Dorm')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('cabanas-2Dorm', function () {
    return View::make('cabanas.cabanas-2Dorm')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});
Route::get('cabanas-3Dorm', function () {
    return View::make('cabanas.cabanas-3Dorm')->nest('social','commons.socials')->nest('header','commons.header')
        ->nest('menu','commons.menu')->nest('footer','commons.footer');
});