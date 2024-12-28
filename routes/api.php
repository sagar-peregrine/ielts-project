<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('get-calendar', [\App\Http\Controllers\Admin\CalendarController::class, 'getCalendarData']);
