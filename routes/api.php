<?php

use Illuminate\Http\Request;

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

Route::middleware(['auth:api'])->group(function () {

    Route::post('/user/avatar/update', 'User\AvatarController@update');

    Route::get('/user/profile','User\UserController@showProfile');

    Route::put('/user/profile/update', 'User\UserController@updateProfile');

});






