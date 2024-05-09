<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/dashboard', [DashboardController::class, 'index']);

// Membres

Route::get('/membres', [MembreController::class, 'index']);

Route::get('/membres/create', [MembreController::class, 'create']);

// Publication

Route::get('/publication', [PublicationController::class, 'index']);

Route::get('/publication/create', [PublicationController::class, 'create']);

// Events

Route::get('/admin/evenemet', function () {
    return view('events.index');
});

// User

Route::get('/', [UserController::class, 'index']);

Route::get('/evenemet', function () {
    return view('user.evenemet');
});
