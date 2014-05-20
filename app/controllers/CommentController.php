<?php

/**
 * Yorum bölümü
 * Class CommentController
 * @author Sefa Karagöz
 */
class CommentController extends \BaseController {

    /**
     * Yapılan yorumu sisteme kaydeder
     * @return mixed
     */
    public function postComment() {

        // form validation
        $formData = array(
            'comment'  => Input::get('comment')
        );

        $rules = array(
            'comment'  => 'required'
        );

        $validation = Validator::make($formData, $rules);

        // eğer validation false dönerse, hata mesajıyla beraber geri redirect yapalım
        if ($validation->fails()) {

            return Redirect::action('PostController@show', Input::get('post_id'))->withErrors($validation)->withInput();
        }

        // yorumu kaydedelim
        $comment = new Comment();
        $comment->comment = $formData['comment'];
        $comment->user_id = Input::get('user_id');
        $comment->post_id = Input::get('post_id');
        $comment->save();

        // notification
        Notification::success('Yorumunuz başarıyla kaydedildi');

        // son olarak posta tekrar yönlendirelim
        return Redirect::action('PostController@show', Input::get('post_id'));
    }

}