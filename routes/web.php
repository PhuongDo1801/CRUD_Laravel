<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

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
Route::get('/users', [UserController::class, 'index']);

Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users/create', [UserController::class, 'store'])->name('store');

Route::get('/users/update/{id}', [UserController::class, 'edit']);
Route::post('/users/update/{id}', [UserController::class, 'update'])->name('update');

Route::get('/users/delete/{id}', [UserController::class, 'delete'])->name('delete');

