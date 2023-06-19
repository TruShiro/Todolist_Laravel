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

Route::get('/', 
[App\Http\Controllers\EventController::class,'view'])->name
('ShowEvent');

Route::get('/add',
[App\Http\Controllers\EventController::class,'insert'])->name
('AddEvent');

Route::post('/add/eventAdded',
[App\Http\Controllers\EventController::class,'add'])->name
('AddingEvent');

Route::get('/editEvent/{id}', //Product id
[App\Http\Controllers\EventController::class,'edit'])->name
('editEvent');

Route::post('/updateEvent', //update after edit
[App\Http\Controllers\EventController::class,'update'])->name
('updateEvent');

Route::get('/deleteEvent/{id}', //delete product
[App\Http\Controllers\EventController::class,'delete'])->name
('deleteEvent');


