<?php

use App\Http\Controllers\MemberList;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardPage');

Route::get('/addMember', function () {
    return view('addMember');
})->name('addMemberPage');



// Fetch All Member
Route::get('/member', [MemberList::class, 'index'])->name('memberPage');
// Delete one Member
Route::delete('/deleteMember/{member}' , [MemberList::class , 'deleteMember'])->name('deleteMember');





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
