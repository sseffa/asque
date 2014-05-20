<?php

/**
 * Oturum bölümü
 * Class AuthController
 * @author Sefa Karagöz
 */
class AuthController extends \BaseController {

    /**
     * Login ekranı
     * @return View
     */
    public function getLogin() {

        if (Sentry::check()) Redirect::route('dashboard');
        else return View::make('auth.login');
    }

    /**
     * Login işlemi
     * @return Redirect
     */
    public function postLogin() {

        // validation
        $credentials = array(
            'email'    => Input::get('email'),
            'password' => Input::get('password')
        );

        $rememberMe = Input::get('rememberMe');

        try {

            // beni hatırla seçilmemişse, cookie tutma
            if (!empty($rememberMe)) {
                $user = Sentry::authenticate($credentials, true);
            } else {
                $user = Sentry::authenticate($credentials, false);
            }

            // user varsa dashboarda yönlendir
            if ($user) {
                return Redirect::route('dashboard');
            }
        } catch (\Exception $e) {
            return Redirect::route('user.login')->withErrors(array('login' => $e->getMessage()));
        }
    }

    /**
     * çıkış
     * @return mixed
     */
    public function getLogout() {

        Sentry::logout();

        Notification::success('Çıkış işlemi başarıyla tamamlandı');
        return Redirect::route('user.login');
    }

    /**
     * Şifremi unuttum sayfası
     * @return mixed
     */
    public function getForgotPassword() {

        if (!Sentry::check()) return View::make('auth.forgot-password');
        else return Redirect::route('dashboard');
    }

    /**
     * Şifremi unuttum işlemi
     * @return mixed
     */
    public function postForgotPassword() {

        $credentials = array(
            'email' => Input::get('email')
        );

        $rules = array(
            'email' => 'required|email',
        );

        $validation = Validator::make($credentials, $rules);

        if ($validation->fails()) {

            return Redirect::back()->withErrors($validation)->withInput();
        }

        try {

            $this->user = Sentry::findUserByLogin($credentials['email']);
            $resetCode = $this->user->getResetPasswordCode();

            $formData = array('userId' => $this->user->id, 'resetCode' => $resetCode);

            /*
            Mail::send('emails.auth.reset-password', $formData, function ($message) {

                $message->from('noreply@sfcms.com', 'sf CMS Team');
                $message->to('user@sfcms.com', 'Lorem Lipsum')->subject('Reset Password');
            });
            */

            /*
            $mailer = new Mailer;
            $mailer->send('emails.auth.reset-password', 'user@sfcms.com', 'Reset Password', $formData);
            */

        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {
            return Redirect::route('user.forgot.password')->withErrors(array('forgot-password' => $e->getMessage()));
        }
        catch (\Exception $e) {
            return Redirect::route('user.forgot.password')->withErrors(array('forgot-password' => $e->getMessage()));
        }
    }

    /**
     * Şifre sıfırlama
     * @param $id
     * @param $code
     * @return mixed
     */
    public function getResetPassword($id, $code) {

        $this->user = Sentry::findUserById($id);

        if (!$this->user->checkResetPasswordCode($code)) {
            return Redirect::route('user.login');
        }

        return View::make('auth.reset-password', compact('id', 'code'));
    }

    public function postResetPassword() {

        $formData = array(
            'id'               => Input::get('id'),
            'code'             => Input::get('code'),
            'password'         => Input::get('password'),
            'confirm-password' => Input::get('confirm_password')
        );

        $rules = array(
            'id'               => 'required',
            'code'             => 'required',
            'password'         => 'required|min:4',
            'confirm-password' => 'required|same:password'
        );

        $validation = Validator::make($formData, $rules);

        if ($validation->fails()) {

            return Redirect::back()->withErrors($validation)->withInput();
        }

        try {

            $this->user = Sentry::findUserById($formData['id']);

            if ($this->user->checkResetPasswordCode($formData['code'])) {

                if ($this->user->attemptResetPassword($formData['code'], $formData['password'])) {
                    return Redirect::route('user.login');
                } else {
                    return Redirect::action('AuthController@getResetPassword')->withErrors(array('forgot-password' => 'Password reset failed'));
                }
            } else {
                return Redirect::action('AuthController@getResetPassword')->withErrors(array('forgot-password' => 'The provided password reset code is Invalid'));
            }
        } catch (Cartalyst\Sentry\Users\UserNotFoundException $e) {

            return Redirect::route('admin.forgot.password')->withErrors(array('forgot-password' => $e->getMessage()));
        }
    }
}