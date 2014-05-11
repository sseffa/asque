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
Route::get('/profile/{id?}', array('as' => 'user.profile', 'uses' => 'UserController@profile'));

Route::get('/users', array('as' => 'user.all', 'uses' => 'UserController@all'));

// auth
Route::get('/login', array('as' => 'user.login', 'uses' => 'AuthController@getLogin'));
Route::post('/login', array('as' => 'user.login.post', 'uses' => 'AuthController@postLogin'));
Route::get('/logout', array('as' => 'user.logout', 'uses' => 'AuthController@getlogout'));

// question
Route::get('/posts', array('as' => 'question.all', 'uses' => 'PostController@all'));
Route::get('/questions/{id}/{slug?}', array('as' => 'post.show', 'uses' => 'PostController@show'));
Route::get('/post/{date}', array('as' => 'post.archive', 'uses' => 'PostController@archive'));

// tag
Route::get('/tags', array('as' => 'tag.all', 'uses' => 'TagController@all'));
Route::get('/tagged/{slug}', array('as' => 'tag.show', 'uses' => 'TagController@show'));

// rss
Route::get('/rss', array('as' => 'rss', 'uses' => 'RssController@index'));

// maillist
Route::get('/save-maillist', array('as' => 'maillist', 'uses' => 'MaillistController@getMaillist'));
Route::post('/save-maillist', array('as' => 'maillist.post', 'uses' => 'MaillistController@postMaillist'));

// route group
Route::group(array('before' => 'auth.user'), function () {

    // user
    Route::get('/user/edit', array('as' => 'user.edit', 'uses' => 'UserController@edit'));
    Route::post('/user/update', array('as' => 'user.update', 'uses' => 'UserController@update'));

    // question
    Route::get('/ask', array('as' => 'question.ask', 'uses' => 'PostController@getAsk'));
    Route::post('/ask', array('as' => 'question.ask.post', 'uses' => 'PostController@postAsk'));

    Route::post('/answer', array('as' => 'question.answer.post', 'uses' => 'PostController@postAnswer'));

    Route::post('/comment', array('as' => 'question.comment.post', 'uses' => 'CommentController@postComment'));

    Route::post('/question/{id}/toggle-favorite', array('as' => 'question.toggle-favorite', 'uses' => 'PostController@toggleFavorite'))
        ->where('id', '[0-9]+');
    Route::post('/question/{id}/toggle-accepted-answer', array('as' => 'question.toggle-accepted-answer', 'uses' => 'PostController@toggleAcceptedAnswer'))
        ->where('id', '[0-9]+');
});

