<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::prefix('user-management')->as('user-management.')->group(function () {
        Route::get('users', function(){ return view('user-management.users');})->name('users');
        Route::get('permissions', function(){ return view('user-management.permissions');})->name('permissions');
        /*Route::resource('roles', \App\Http\Controllers\UserManagement\RolesController::class);*/
    });
});
