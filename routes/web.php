<?php

use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Client\UserController as ClientUserController;
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



Route::get('/', [UserController::class, 'index'])->name('user.index');
Route::get('/list', [UserController::class, 'list'])->name('user.list');
Route::get('/detail/{id}', [UserController::class, 'detail'])->name('user.detail');
// Tìm kiếm
Route::get('/search', [UserController::class, 'search'])->name('user.search');

// Routes cho Auth (Login, Register, Logout)
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postLogin');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes cho người dùng (Profile, Edit, Change Password)
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ClientUserController::class, 'profile'])->name('user.profile');
    Route::get('/profile/edit', [ClientUserController::class, 'editProfile'])->name('user.editProfile');
    Route::post('/profile/edit', [ClientUserController::class, 'updateProfile'])->name('user.updateProfile');
    Route::get('/profile/password', [ClientUserController::class, 'editPassword'])->name('user.editPassword');
    Route::post('/profile/password', [ClientUserController::class, 'updatePassword'])->name('user.updatePassword');
});





