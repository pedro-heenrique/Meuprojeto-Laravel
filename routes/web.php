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

use App\Http\Controllers\EventController;

Route::get('/home', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create']);


Route::get('/paginadesenha', function () {
    return view('forge-password-page');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/events/news', [EventController::class, 'news']);

Route::get('/events/called', [EventController::class, 'called']);

Route::get('/events/myprofile', [EventController::class, 'myprofile']);

Route::get('/events/myocurrences', [EventController::class, 'myocurrences']);

Route::get('/events/newocurrence', [EventController::class, 'newocurrence']);

