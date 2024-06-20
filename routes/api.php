<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->group(function() { 

    Route::get('auth', [ApiController::class, 'auth']);

    Route::get('/stuffs', [ApiController::class, 'stuff']);//Mengambil semua data
    Route::podt('/stuffs', [ApiController::class, 'stuffAdd']);//simpan data baru
    Route::put('/stuffs/{stuff}', [ApiController::class, 'stuffUpdate']);//update data
    Route::delete('/stuffs/{stuff}', [ApiController::class, 'stuffdelete']);//delete data

    route::post('/stuffs/{stuff}', [ApiController::class, 'saveTransaction']);//delete data
});

Route::post('login', [ApiController::class, 'login']);
