<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('admin.login');
});

Route::prefix('admin')->group(function () {

    Route::get('/home', function () {
        return view('admin.home');
    }) ;

    Route::get('/reading', function () {
        return view('admin.reading');
    }) ;

    Route::get('/writing', function () {
        return view('admin.writing');
    }) ;

    Route::get('/vocabulary', function () {
        return view('admin.vocab');
    }) ;

    Route::get('/logout', function () {
        return view('admin.login');
    });
});
