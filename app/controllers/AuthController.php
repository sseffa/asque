<?php

class AuthController extends \BaseController {

    /**
     * Display the login page
     * @return View
     */
    public function getLogin() {

        // oturum açılmışsa buraya girmeyecek unutma!
        return View::make('auth.login');
    }

    /**
     * Login action
     * @return Redirect
     */
    public function postLogin() {

        $credentials = array(
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        );

        $rememberMe = Input::get('rememberMe');

        try {

            if (!empty($rememberMe)) {
                $user = Sentry::authenticate($credentials, true);
            } else {
                $user = Sentry::authenticate($credentials, false);
            }

            if ($user) {
                return Redirect::route('dashboard');
            }
        } catch (\Exception $e) {
            return Redirect::route('user.login')->withErrors(array('login' => $e->getMessage()));
        }
    }

    public function getLogout() {

        Sentry::logout();

        Notification::success('Çıkış işlemi başarıyla tamamlandı');
        return Redirect::route('user.login');
    }
}