<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/success', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('course');
})->name('courses');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact-submit', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact-submit');

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

    Route::get('/introduction', function () {
        return view('admin.intro');
    }) ;
    Route::get('/score', function () {
        return view('admin.score');
    }) ;

    Route::get('/speaking', function () {
        return view('admin.speaking');
    }) ;

    Route::get('/logout', function () {
        return view('admin.login');
    });

    Route::get('get-contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('get-contacts');
});
