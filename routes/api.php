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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//UserController
Route::put('updateUser','APIController@updateUser');

//StoryController
Route::post('addStory','APIController@addStory');
Route::put('updateStory','APIController@updateStory');
Route::delete('deleteStory/{story_id}','APIController@deleteStory');
