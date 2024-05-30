<?php

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardPage');


Route::get('/member', function () {
    return view('memberList');
})->name('memberPage');


Route::get('/trainer', function () {
    return view('trainer');
})->name('trainerPage');


Route::get('/exercise', function () {
    return view('exerciseList');
})->name('exercisePage');


Route::get('/report', function () {
    return view('report');
})->name('reportPage');


// Logout Route
// Route::get('/', function () {
//     return view('dashboard');
// });
