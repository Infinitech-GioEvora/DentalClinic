<?php

use App\Http\Controllers\ScheduleController;
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

Route::get('/', function () {
    return view('Homepage/index');
});

Route::prefix('dental')->group(function () {
    Route::get('/book-now', function () {
       return view('Homepage/Booking');
    });
   
});

Route::get('/api/getSlots', [ScheduleController::class, 'getSlots']);

Route::post('/submit/reservation', [ScheduleController::class, 'submitbook']);

