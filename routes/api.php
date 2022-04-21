<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\GiftLessonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('v1')->group(function () {
    Route::post('/contact', [ContactController::class, 'store']);
    Route::post('/gift-lesson', [GiftLessonController::class, 'store']);
    Route::post('/email', [EmailsController::class, 'store']);
});
