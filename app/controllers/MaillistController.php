<?php

/**
 * Maillist bölümü
 * Class MaillistController
 * @author Sefa Karagöz
 */
class MaillistController extends \BaseController {

    /**
     * mail listesine kayıt sayfası
     * @return mixed
     */
    public function getMaillist() {

        return View::make('maillist.maillist');
    }

    /**
     * mail listesi kaydının alınması
     * @return mixed
     */
    public function postMaillist() {

        // form validation
        $formData = array(
            'email' => Input::get('email'),
        );

        $rules = array(
            'email' => 'required|email|unique:maillist,email',
        );

        $validation = Validator::make($formData, $rules);

        // validation kontrolü false dönerse, maillist formuna geri dönelim (hatalarla beraber)
        if ($validation->fails()) {
            return Redirect::action('MaillistController@getMaillist')->withErrors($validation)->withInput();
        }

        // herşey yolundaysa e-mail adresini mail listesine ekleyelim
        $maillist = new Maillist();
        $maillist->email = $formData['email'];
        $maillist->save();

        // işlem tamamlandığına ait mesaj
        Notification::success('E-posta adresiniz sisteme başarıyla eklendi');

        // sayfa yönlendirmesi
        return Redirect::action('HomeController@index');
    }

    /**
     * mail listesine kayıt olan kullanıcılara mail gönderimi
     * NOT: mail server bilgileri gerekmektedir. aksi halde mail gönderimi yapılamaz
     */
    public function sendMail() {

        $formData=array();
        $mailer = new Mailer;
        $mailer->send('emails.newsletter', 'noreply@asque.com', 'Haber Bülteni', $formData);
    }
}
