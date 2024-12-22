<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\StudentController;
use App\Http\Controllers\Admin\CalendarController;
//Route::redirect('/', '/login');
Route::get('/', function () {
    return view('home');
})->name('frontHome');

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

Route::get('/sign-in', function () {
    return view('admin.login');
})->name('sign-in');




Route::prefix('admin')->group(function () {

    Route::get('/calendar', function () {
        return view('admin.calendar');
    })->name('calendar');

    Route::get('/home', function () {
        return view('admin.home');
    })->name('admin-home');

    Route::get('/reading', function () {
        return view('admin.reading');
    })->name('reading'); ;

    Route::get('/writing', function () {
        return view('admin.writing');
    })->name('writing'); ;

    Route::get('/vocabulary', function () {
        return view('admin.vocab');
    })->name('vocabulary'); ;

    Route::get('/introduction', function () {
        return view('admin.intro');
    })->name('introduction'); ;

    Route::get('/score', function () {
        return view('admin.score');
    })->name('score'); ;

    Route::get('/speaking', function () {
        return view('admin.speaking');
    })->name('speaking'); ;

    Route::get('/logout', function () {
        \Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('sign-in');
    });

    //make a route student group
    Route::controller(StudentController::class)->prefix('student')->group(function () {
        Route::get('/', 'index')->name('student');
        Route::get('/create', 'create')->name('create-student');
        Route::post('/store', 'store')->name('store-student');
        Route::get('/edit/{id}', 'edit')->name('edit-student');
        Route::post('/update/{id}', 'update')->name('update-student');
        Route::delete('/delete/{id}', 'destroy')->name('delete-student');
    });

    Route::controller(CalendarController::class)->prefix('calendar')->group(function () {
        Route::get('/', 'index')->name('calendar');
        Route::get('/create', 'create')->name('create-calendar');
        Route::post('/store', 'store')->name('store-calendar');
        Route::get('/edit/{id}', 'edit')->name('edit-calendar');
        Route::post('/update/{id}', 'update')->name('update-calendar');
        Route::delete('/delete/{id}', 'destroy')->name('delete-calendar');
    });
    Route::get('get-contact', [\App\Http\Controllers\ContactController::class, 'show'])->name('get-contacts');
})->middleware('auth');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
