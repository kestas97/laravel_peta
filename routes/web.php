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


/*landing page */
Route::get('/', [App\Http\Controllers\HomeController::class, 'landingpage'])->name('landingpage');

Auth::routes();
//home//
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin who can see all users//
Route::get('/users-panel', [App\Http\Controllers\AdminController::class, 'index'])->name('users.panel');
//method who can make active after registration//
Route::post('/user-activate/{userId}', [App\Http\Controllers\AdminController::class, 'approve'])->name('user.activate');
//user controller route
Route::resource('/user', 'App\Http\Controllers\UserController');
//user profile
Route::get('/user-profile', [App\Http\Controllers\UserController::class, 'userProfile'])->name('user.profile');
//store pet status
Route::post('/store-pet-status', [App\Http\Controllers\PetStatusController::class, 'store'])->name('status.store');
//create pet status
Route::get('/create-pet-status', [App\Http\Controllers\PetStatusController::class, 'createStatus'])->name('create.status');

Route::resource('/pet-name', 'App\Http\Controllers\PetNameController');

Route::resource('/pet-data', 'App\Http\Controllers\PetDataController');

Route::get('/user-pet-data/{userId}', [App\Http\Controllers\PetDataController::class, 'userPetData'])->name('userPet.data');

