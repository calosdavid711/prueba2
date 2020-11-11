<?php

use Illuminate\Support\Facades\Route;

Route::get('/list', [\App\Http\Controllers\PeopleController::class, 'list'])->name('list');
Route::post('/addPeople', [\App\Http\Controllers\PeopleController::class, 'addPeople'])->name('addPeople');



Route::get('/', function () {
    return view('welcome');
});
