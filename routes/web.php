<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ScheduleController;


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
    Route::get('/about', function () {
        return view('Homepage/About');
     });
     Route::get('/services', function () {
        return view('Homepage/Services');
     });
     Route::get('/blog', function () {
        return view('Homepage/Blog');
     });
     Route::get('/contact', function () {
        return view('Homepage/Contact');
     });
   
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/dashboard-data', [AdminController::class, 'dashboard_data']);

Route::prefix('admin/schedules')->group(function () {
    Route::get('/', [ScheduleController::class, 'index']);
    Route::get('/all', [ScheduleController::class, 'all']);
    Route::post('/add', [ScheduleController::class, 'add']);
    Route::get('/edit/{id}', [ScheduleController::class, 'edit']);
    Route::post('/upd', [ScheduleController::class, 'upd']);
    Route::get('/del/{id}', [ScheduleController::class, 'del']);

    Route::get('/change/{id}/{status}', [ScheduleController::class, 'change_status']);
});

Route::get('/api/getSlots', [ScheduleController::class, 'getSlots']);

Route::post('/submit/reservation', [ScheduleController::class, 'add']);

