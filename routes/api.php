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

Route::post('/token', 'AuthController@getToken');

Route::middleware('auth:sanctum')->group(static function () {
    Route::apiResource('/admins', 'AdminsController');
    Route::apiResource('/post_categories', 'PostCategoriesController');
    Route::apiResource('/posts', 'PostsController');
    Route::apiResource('/comments', 'CommentsController');
    Route::apiResource('/tags', 'TagsController');
    Route::apiResource('/post_tags', 'PostTagsController');
});