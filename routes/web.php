<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/info', function () {

    return phpinfo();
});

Route::prefix('/mongo')
    ->group(function () {
        Route::get('/create', [PostController::class, 'create']);
        Route::get('/read', [PostController::class, 'read']);
        Route::get('/update', [PostController::class, 'update']);
        Route::get('/delete', [PostController::class, 'delete']);
    });
