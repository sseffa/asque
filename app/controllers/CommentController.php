<?php

class CommentController extends \BaseController {

    public function postComment() {

        $formData = array(
            'comment'  => Input::get('comment')
        );

        $rules = array(
            'comment'  => 'required'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('PostController@show', Input::get('post_id'))->withErrors($validation)->withInput();
        }

        $comment = new Comment();
        $comment->comment = $formData['comment'];
        $comment->user_id = Input::get('user_id');
        $comment->post_id = Input::get('post_id');
        $comment->save();
        Notification::success('Yorumunuz başarıyla kaydedildi');

        return Redirect::action('PostController@show', Input::get('post_id'));
    }

}