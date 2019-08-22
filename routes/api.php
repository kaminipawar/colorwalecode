<?php

// Route::get('faq', function () {
// 	return [
// 		'series' => 200,
// 		'lessons' => 1300
// 	];
	
// });

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/posts', 'PostController@index');
Route::post('/post/create', 'PostController@store');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::delete('/post/delete/{id}', 'PostController@delete');
//kamini
