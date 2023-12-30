<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\HtmlPropertyController;

use App\Http\Controllers\CardController;
use App\Http\Controllers\DeletedCardController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', BookController::class);
Route::apiResource('chapters', ChapterController::class);
Route::apiResource('sections', SectionController::class);

Route::apiResource('contents', ContentController::class);

Route::get('/html-properties', [HtmlPropertyController::class, 'index']);
Route::get('/html-properties/{id}', [HtmlPropertyController::class, 'show']);
Route::post('/html-properties', [HtmlPropertyController::class, 'store']);
Route::put('/html-properties/{id}', [HtmlPropertyController::class, 'update']);
Route::delete('/html-properties/{id}', [HtmlPropertyController::class, 'destroy']);

Route::apiResource('cards', CardController::class);
Route::apiResource('deleted-cards', DeletedCardController::class);

// Route::apiResource('components', ComponentController::class);
