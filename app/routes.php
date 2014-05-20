<?php

/*
|--------------------------------------------------------------------------
| Routes (Rotalamalar)
|--------------------------------------------------------------------------
*/

// home
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

// user password reminder
Route::get('user/forgot-password', array('as' => 'user.forgot.password', 'uses' => 'AuthController@getForgotPassword'));
Route::post('user/forgot-password', array('as' => 'user.forgot.password.post', 'uses' => 'AuthController@postForgotPassword'));

Route::get('user/{id}/reset/{code}', array('as' => 'user.reset.password', 'uses' => 'AuthController@getResetPassword'))
    ->where('id', '[0-9]+');
Route::post('user/reset-password', array('as' => 'user.reset.password.post', 'uses' => 'AuthController@postResetPassword'));


// question
Route::get('/posts', array('as' => 'question.all', 'uses' => 'PostController@all'));
Route::get('/questions/{id}/{slug?}', array('as' => 'post.show', 'uses' => 'PostController@show'));
Route::get('/post/{date}', array('as' => 'post.archive', 'uses' => 'PostController@archive'));
Route::get('/most-views', array('as' => 'most.views', 'uses' => 'PostController@mostViews'));
Route::get('/most-votes', array('as' => 'most.votes', 'uses' => 'PostController@mostVotes'));
Route::get('/most-favorites', array('as' => 'most.favorites', 'uses' => 'PostController@mostFavorites'));
Route::get('/answered-post', array('as' => 'answered.post', 'uses' => 'PostController@answeredPost'));
Route::get('/unanswered-post', array('as' => 'unanswered.post', 'uses' => 'PostController@unansweredPost'));

// tag
Route::get('/tags', array('as' => 'tag.all', 'uses' => 'TagController@all'));
Route::get('/tagged/{slug}', array('as' => 'tag.show', 'uses' => 'TagController@show'));

// search
Route::get('/search', ['as'=>'admin.search', 'uses'=>'SearchController@index']);

// rss
Route::get('/rss', array('as' => 'rss', 'uses' => 'RssController@index'));

// maillist
Route::get('/save-maillist', array('as' => 'maillist', 'uses' => 'MaillistController@getMaillist'));
Route::post('/save-maillist', array('as' => 'maillist.post', 'uses' => 'MaillistController@postMaillist'));

// about
Route::get('/about', array('as' => 'about', 'uses' => 'AboutController@index'));

// faq
Route::get('/faq', array('as' => 'faq', 'uses' => 'FaqController@index'));

// help
Route::get('/help', array('as' => 'help', 'uses' => 'HelpController@index'));

// route group
Route::group(array('before' => 'auth.user'), function () {

    // user
    Route::get('/user/edit', array('as' => 'user.edit', 'uses' => 'UserController@edit'));
    Route::post('/user/update', array('as' => 'user.update', 'uses' => 'UserController@update'));

    // question
    Route::get('/ask', array('as' => 'question.ask', 'uses' => 'PostController@getAsk'));
    Route::post('/ask', array('as' => 'question.ask.post', 'uses' => 'PostController@postAsk'));
    Route::get('/post/{id}/delete', array('as' => 'post.confirm.destroy', 'uses' => 'PostController@confirmDestroy'))
        ->where('id', '\d+');
    Route::any('/post/{id}/destroy', array('as' => 'post.delete', 'uses' => 'PostController@destroy'))
        ->where('id', '\d+');


    Route::post('/answer', array('as' => 'question.answer.post', 'uses' => 'PostController@postAnswer'));

    Route::post('/comment', array('as' => 'question.comment.post', 'uses' => 'CommentController@postComment'));

    // favorite
    Route::post('/question/{id}/toggle-favorite', array('as' => 'question.toggle-favorite', 'uses' => 'PostController@toggleFavorite'))
        ->where('id', '[0-9]+');

    // accepted answer
    Route::post('/question/{id}/toggle-accepted-answer', array('as' => 'question.toggle-accepted-answer', 'uses' => 'PostController@toggleAcceptedAnswer'))
        ->where('id', '[0-9]+');

    // plus votes
    Route::post('/question/{id}/toggle-plus-vote', array('as' => 'question.toggle-plus-vote', 'uses' => 'PostController@togglePlusVote'))
        ->where('id', '[0-9]+');

    // minus votes
    Route::post('/question/{id}/toggle-minus-vote', array('as' => 'question.toggle-minus-vote', 'uses' => 'PostController@toggleMinusVote'))
        ->where('id', '[0-9]+');
});

