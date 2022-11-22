<?php

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

Route::post('message', function (Request $request) {
    return app('app.action.api.message.store')->handle($request);
})->name('api.message.store');

Route::post('news/comment', function (Request $request) {
    return app('app.action.api.news.comment.store')->handle($request);
})->name('api.news.comment.store');
