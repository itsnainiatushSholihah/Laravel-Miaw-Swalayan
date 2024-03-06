<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DetailTransactionController;
use App\Http\Controllers\StuffController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

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
Route::get('generateData', [AuthController::class, 'generateData']);

Route::get('/', function () {
    return view('home');
})->middleware('is.auth');

Route::get('login', [AuthController::class, 'showLogin'])->middleware('is.not.auth');
Route::post('login', [AuthController::class, 'actionLogin'])->middleware('is.not.auth');

Route::middleware(['is.auth'])->group(function(){

    Route::get('logout', [AuthController::class, 'actionLogout']);

    Route::get('transactions', [TransactionController::class, 'index']);
    Route::get('transactions/create', [TransactionController::class, 'create']);
    
    route::resource('customers', CustomerController::class);
    route::resource('categories', CategoryController::class);
    route::resource('users', UserController::class);
    route::resource('stuffs', StuffController::class);
});






// Route::get('caregories', [CategoryController::class, 'index']);
// Route::get('categories/add', [CategoryController::class, 'create']);

// Route::get('customers', [CustomerController::class, 'index']);
// Route::get('customers/add', [CustomerController::class, 'create']);

// Route::get('stuffs', [StuffController::class, 'index']);
// Route::get('stuffs/add', [StuffController::class, 'create']);

// Route::get('users', [UserController::class, 'index']);
// Route::get('users/add', [UserController::class, 'create']);