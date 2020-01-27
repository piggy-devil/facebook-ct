<?php

Route::middleware('auth:api')->group(function () {

    Route::get('auth-user', 'AuthUserController@show');

    Route::apiResources([
        'posts' => 'PostController',
        'users' => 'UserController',
    ]);

});
