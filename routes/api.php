<?php

Route::post('/login', 'AuthController@login');

Route::group([
    'middleware' => 'auth:api'
],
function()
{
    Route::get('/me', 'AuthController@me');
});

Route::group([

    'prefix' => 'products',
    'middleware' => 'auth:api'

], function()
{
    Route::get('/', 'ProductController@index');
    Route::get('{id}', 'ProductController@show');
    Route::post('/', 'ProductController@store');
    Route::put('{id}', 'ProductController@update');
    Route::delete('{id}', 'ProductController@delete');
});

