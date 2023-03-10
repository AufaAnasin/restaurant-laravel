<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

// import the controller

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


// declare the controller
Route::get('/', [HomeController::class, "index"]);

Route::get('/users', [AdminController::class, "user"]);
Route::get('/foodmenu', [AdminController::class, "foodmenu"]);
Route::post('/uploadfood', [AdminController::class, "upload"]);

// delete controller
Route::get('/deleteusers/{id}', [AdminController::class, "deleteuser"]);
Route::get('/deletefood/{id}', [AdminController::class, "deletefood"]);

// update food
Route::get('/updateview/{id}', [AdminController::class, "updateview"]);
Route::post('/update/{id}', [AdminController::class, "update"]);



// for determine usertyte
Route::get('/redirects', [HomeController::class, "redirects"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
