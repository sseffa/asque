<?php

use \Carbon\Carbon;

class PostController extends \BaseController {

    public function all() {

        dd(Post::all()->toArray());
    }

    public function getAsk() {

        return View::make("post.ask");
    }


    public function postAsk() {

        $formData = array(
            'title' => Input::get('title'),
            'body'  => Input::get('body'),
            'tag'   => Input::get('tag')
        );

        $rules = array(
            'title' => 'required',
            'body'  => 'required',
            'tag'   => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('PostController@getAsk')->withErrors($validation)->withInput();
        }

        $post = new Post();
        $post->title = $formData['title'];
        $post->body = $formData['body'];
        $post->post_type_id = 1;
        $post->user_id = Sentry::getUser()->id;
        $post->parent_id = 0;

        $post->save();

        $postTags = explode(',', $formData['tag']);

        foreach ($postTags as $postTag) {

            if (!$postTag) continue;

            $tag = Tag::where('name', '=', $postTag)->first();

            if (!$tag) $tag = new Tag;

            $tag->name = $postTag;
            $tag->slug = Str::slug($postTag);

            $post->tags()->save($tag);
        }

        Notification::success('Sorunuz başarıyla kaydedildi');

        return Redirect::action('HomeController@index');
    }

    public function show($id, $slug = null) {

        /*
        $post = Post::with(array('tags', 'user', 'comments', 'children' => function ($query) {

            $query->with(array('comments' => function ($subQuery) {

                $subQuery->with('user');
            }));
        }))->find($id);
        */

        $post = Post::with(array(
            'tags', 'user', 'comments', 'children.comments.user'
        ))->find($id);

        return View::make('post.show', compact('post'));
    }


    public function archive($date) {

        $year = Carbon::parse($date)->format('Y');
        $month = Carbon::parse($date)->format('m');

        $posts = Post::archive($year, $month)->paginate(10);

        return View::make('post.archive', compact('posts'));
    }

    public function postAnswer() {

        $formData = array(
            'body' => Input::get('body')
        );

        $rules = array(
            'body' => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('PostController@show', Input::get('parent_id'))->withErrors($validation)->withInput();
        }

        $post = new Post();
        $post->body = $formData['body'];
        $post->post_type_id = Input::get('post_type_id');
        $post->user_id = Input::get('user_id');
        $post->parent_id = Input::get('parent_id');
        $post->save();
        Notification::success('Cevabınız başarıyla kaydedildi');

        return Redirect::action('PostController@show', Input::get('parent_id'));
    }

    public function toggleFavorite($id) {

        /*
        $post = Post::with(array(
            'favorites.users'
        ))->find($id)->toArray();
        */

        /*
        $post = Post::with(array('favorites.users' => function ($query) {

            $query->where('id', 2);
        }))->find($id)->toArray();
        */

        /*
        $user = User::with(array(
            'favorites', 'favorites.posts' => function ($query) {

                $query->where('post_id', 1);
            }
        ))->where('id', 2)->get()->toArray();
        */


        $posts = Post::whereHas('favorites', function ($q) {

            $q->where('user_id', 3);
        })->where('id', 1)->get()->toArray();

        print_r($posts);
        die();
    }

    public function toggleAcceptedAnswer($id) {

        $acceptedAnswerId = Input::get('accepted_answer_id');

        $post = Post::find($id);

        $post->accepted_answer_id = $acceptedAnswerId;

        if ($post->save()) {

            return Response::json(array('result' => 'success'));
        }

        return Response::json(array('result' => 'error'));
    }
}