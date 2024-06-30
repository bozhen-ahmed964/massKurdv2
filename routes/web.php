<?php

use App\Http\Controllers\Trainer;
use App\Http\Controllers\MemberList;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainerController;

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboardPage');



// Fetch All Member
Route::get('/member', [MemberList::class, 'index'])->name('memberPage');
// Inster Member
Route::post('/insterMember' , [MemberList::class , 'insterMember'])->name('insertMemberAction');
// Delete one Member
Route::delete('/deleteMember/{member}' , [MemberList::class , 'deleteMember'])->name('deleteMember');


// Fetch All Trainer
Route::get('/trainer',[TrainerController::class , 'index'])->name('trainerPage');
// Insert Trainer
Route::post('/insertTrainer', [TrainerController::class, 'insertTrainer'])->name('insertTrainerAction');







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
