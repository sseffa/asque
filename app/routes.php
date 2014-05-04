<?php

/*
|--------------------------------------------------------------------------
| Routes
|--------------------------------------------------------------------------
*/

//
Route::get('/', array('as' => 'dashboard', 'uses' => 'HomeController@index'));

// user
Route::get('/register', array('as' => 'user.register', 'uses' => 'UserController@create'));
Route::post('/register', array('as' => 'user.store', 'uses' => 'UserController@store'));
Route::get('/profile', array('as' => 'user.profile', 'uses' => 'UserController@profile'));
Route::get('/user/edit', array('as' => 'user.edit', 'uses' => 'UserController@edit'));
Route::post('/user/update', array('as' => 'user.update', 'uses' => 'UserController@update'));
Route::get('/users', array('as' => 'user.all', 'uses' => 'UserController@all'));

// auth
Route::get('/login', array('as' => 'user.login', 'uses' => 'AuthController@getLogin'));
Route::post('/login', array('as' => 'user.login.post', 'uses' => 'AuthController@postLogin'));
Route::get('/logout', array('as' => 'user.logout', 'uses' => 'AuthController@getlogout'));

// question
Route::get('/ask', array('as' => 'question.ask', 'uses' => 'PostController@getAsk'));
Route::post('/ask', array('as' => 'question.ask.post', 'uses' => 'PostController@postAsk'));
Route::get('/posts', array('as' => 'question.all', 'uses' => 'PostController@all'));
Route::get('/questions/{id}/{slug?}', array('as' => 'post.show', 'uses' => 'PostController@show'));

// tag
Route::get('/tags', array('as' => 'tag.all', 'uses' => 'TagController@all'));