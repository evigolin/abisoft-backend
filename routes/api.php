<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/data/add', [FormController::class, 'store']);
Route::get('/data', [FormController::class, 'index']);
Route::get('/data/{id}', [FormController::class, 'show']);
Route::put('/data/update/{id}', [FormController::class, 'update']);
Route::delete('/data/delete/{id}', [FormController::class, 'destroy']);
