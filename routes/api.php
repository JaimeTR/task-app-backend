<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\TaskStatusController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'task/status' => TaskStatusController::class,
    'task' => TaskController::class,
    'collection' => CollectionController::class
]);

/**
 * Get all tasks from collection 😋
 */
Route::get('collection/{collection}/task', [TaskController::class, 'show']);