<?php

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

        //$post = Post::with('tags', 'user', 'comments', 'children')->find(1)->toArray();

        /*
        $post = Post::with(array('tags', 'user', 'comments', 'children' => function ($query) {
            $query->with('comments');
        }))->find(1)->toArray();
        */

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
}