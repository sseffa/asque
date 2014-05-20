<?php

use \Carbon\Carbon;

class PostController extends \BaseController {

    public function __construct() {

        View::share('active', 'question');
    }

    public function mostViews() {

        $posts = Post::with('tags', 'user')->orderBy('view_count', 'desc')->paginate(10);

        return View::make('post.most-views', compact('posts'));
    }

    public function mostVotes() {

        $posts = Post::with('tags', 'user')->orderBy('vote_count', 'desc')->paginate(10);

        return View::make('post.most-votes', compact('posts'));
    }

    public function mostFavorites() {

        $posts = Post::with('tags', 'user')->orderBy('favorite_count', 'desc')->paginate(10);

        return View::make('post.most-favorites', compact('posts'));
    }

    public function answeredPost() {

        $posts = Post::with('tags', 'user')->where('accepted_answer_id', '!=', 0)->orderBy('view_count', 'desc')->paginate(10);

        return View::make('post.answered', compact('posts'));
    }

    public function unansweredPost() {

        $posts = Post::with('tags', 'user')->where('accepted_answer_id', 0)->orderBy('view_count', 'desc')->paginate(10);

        return View::make('post.unanswered', compact('posts'));
    }

    public function getAsk() {

        return View::make("post.ask");
    }

    public function postAsk() {

        $formData = array(
            'title' => Input::get('title'),
            'body'  => Input::get('body'),
            'tag'   => Input::get('tag'));

        $rules = array(
            'title' => 'required',
            'body'  => 'required',
            'tag'   => 'required');

        $validation = Validator::make($formData, $rules);

        if($validation->fails()) {

            return Redirect::action('PostController@getAsk')->withErrors($validation)->withInput();
        }

        $post = new Post();
        $post->title = $formData['title'];
        $post->body = $formData['body'];
        $post->post_type_id = Input::get('type');
        $post->user_id = Sentry::getUser()->id;
        $post->parent_id = 0;

        $post->save();

        $postTags = explode(',', $formData['tag']);

        foreach($postTags as $postTag) {

            if(!$postTag)
                continue;

            $tag = Tag::where('name', '=', $postTag)->first();

            if(!$tag)
                $tag = new Tag;

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
            'favorites.users',
            'tags',
            'user',
            'comments',
            'children.comments.user'))->find($id);

        $favorite = false;

        if(Sentry::check()) {

            // favorites
            $result = DB::table('favorites')->where('user_id', Sentry::getUser()->id)->Where('post_id', $id)->get();

            if(isset($result[0]))
                $favorite = true;
            else $favorite = false;

            // favorites
            $result = DB::table('votes')->Where('post_id', $id)->get();
        }

        $totalVote = 0;
        if(isset($result)) {
            foreach($result as $v) {
                $totalVote = ($v->value) + $totalVote;
            }
        }

        // görüntülenme değerini 1 arttıralım
        DB::table('posts')->where('id', $id)->increment('view_count', 1);

        return View::make('post.show', compact('post'))->with('favorite', $favorite)->with('totalVote', $totalVote);
    }

    public function archive($date) {

        $year = Carbon::parse($date)->format('Y');
        $month = Carbon::parse($date)->format('m');

        $posts = Post::archive($year, $month)->paginate(10);

        return View::make('post.archive', compact('posts'));
    }

    public function postAnswer() {

        if(Input::get('body') == "<p><br></p>")
            return Redirect::action('PostController@show', Input::get('parent_id'));

        $formData = array(
            'body' => Input::get('body'));

        $rules = array(
            'body' => 'required');

        $validation = Validator::make($formData, $rules);

        if($validation->fails()) {

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

        $table = "favorites";
        $result = DB::table($table)->where('user_id', Sentry::getUser()->id)->Where('post_id', $id)->get();

        if(isset($result[0])) {

            $obj = $result[0];
            DB::table($table)->where('id', $obj->id)->delete();
        }
        else {

            DB::table($table)->insert(array('post_id' => $id, 'user_id' => Sentry::getUser()->id));
        }

        //--------------------------

        // favorites
        $result = DB::table('favorites')->Where('post_id', $id)->get();

        $totalFavorite = count($result);

        //
        DB::table('posts')->where('id', $id)->update(array('favorite_count' => $totalFavorite));
    }

    public function togglePlusVote($id) {

        $table = "votes";
        $result = DB::table($table)->where('user_id', Sentry::getUser()->id)->Where('post_id', $id)->get();

        if(isset($result[0])) {

            $obj = $result[0];
            DB::table($table)->where('id', $obj->id)->update(array('value' => 1));
        }
        else {

            DB::table($table)->insert(array('post_id' => $id, 'user_id' => Sentry::getUser()->id, 'value' => 1));
        }

        //--------------

        // votes
        $result = DB::table('votes')->Where('post_id', $id)->get();

        $totalVote = 0;
        if(isset($result)) {
            foreach($result as $v) {
                $totalVote = ($v->value) + $totalVote;
            }
        }

        //
        DB::table('posts')->where('id', $id)->update(array('vote_count' => $totalVote));
    }

    public function toggleMinusVote($id) {

        $table = "votes";
        $result = DB::table($table)->where('user_id', Sentry::getUser()->id)->Where('post_id', $id)->get();

        if(isset($result[0])) {

            $obj = $result[0];
            DB::table($table)->where('id', $obj->id)->update(array('value' => -1));
        }
        else {

            DB::table($table)->insert(array('post_id' => $id, 'user_id' => Sentry::getUser()->id, 'value' => -1));
        }

        //--------------------------

        // votes
        $result = DB::table('votes')->Where('post_id', $id)->get();

        $totalVote = 0;
        if(isset($result)) {
            foreach($result as $v) {
                $totalVote = ($v->value) + $totalVote;
            }
        }

        //
        DB::table('posts')->where('id', $id)->update(array('vote_count' => $totalVote));
    }

    public function toggleAcceptedAnswer($id) {

        $acceptedAnswerId = Input::get('accepted_answer_id');
        $post = Post::find($id);
        $post->accepted_answer_id = $acceptedAnswerId;

        if($post->save()) {
            return Response::json(array('result' => 'success'));
        }

        return Response::json(array('result' => 'error'));
    }

    /**
     * Gönderiyi siler
     * @param int $id
     * @return Response
     */
    public function destroy($id) {

        $post = Post::find($id);
        $post->destroy($id);

        // cevapları ve yorumları da silelim
        $post->children()->delete();

        Notification::success('Gönderi başarıyla silindi');
        return Redirect::action('HomeController@index');
    }

    public function confirmDestroy($id) {

        $post = Post::find($id);
        return View::make('post.confirm-destroy', compact('post'));
    }
}