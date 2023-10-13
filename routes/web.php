<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::redirect('/', '/cars', 301);
Route::resource('/cars', CarsController::class);
