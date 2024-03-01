<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\TransactionController;
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
    return view('home');
});

route::resource('customers', CustomerController::class);
route::resource('categories', CategoryController::class);
route::resource('users', UserController::class);
route::resource('stuffs', StuffController::class);

Route::get('transactions', [TransactionController::class, 'index']);
Route::get('transactions/add', [TransactionController::class, 'create']);


// Route::get('caregories', [CategoryController::class, 'index']);
// Route::get('categories/add', [CategoryController::class, 'create']);

// Route::get('customers', [CustomerController::class, 'index']);
// Route::get('customers/add', [CustomerController::class, 'create']);

// Route::get('stuffs', [StuffController::class, 'index']);
// Route::get('stuffs/add', [StuffController::class, 'create']);

// Route::get('users', [UserController::class, 'index']);
// Route::get('users/add', [UserController::class, 'create']);