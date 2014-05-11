<?php

class MaillistController extends \BaseController {

    public function getMaillist() {

        return View::make('maillist.maillist');
    }

    public function postMaillist() {

        $formData = array(
            'email' => Input::get('email'),
        );

        $rules = array(
            'email' => 'required|email|unique:maillist,email',
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::action('MaillistController@getMaillist')->withErrors($validation)->withInput();
        }

        $maillist = new Maillist();
        $maillist->email = $formData['email'];
        $maillist->save();

        Notification::success('E-posta adresiniz sisteme başarıyla eklendi');

        return Redirect::action('HomeController@index');
    }
}
