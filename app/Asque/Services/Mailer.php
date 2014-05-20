<?php namespace Asque\Services;

use Mail;
use Asque\Interfaces\MailInterface;

/**
 * Mail gönderme sınıfı
 * Class Mailer
 * @package Asque\Services
 * @author Sefa Karagöz
 */
class Mailer implements MailInterface {

    /**
     * Mail gönderir
     * @param $view
     * @param $email
     * @param $subject
     * @param array $data
     */
    public function send($view, $email, $subject, $data = array()) {

        Mail::send($view, $data, function ($message) use ($email, $subject) {

            $message->from('noreply@asque.com');
            $message->to($email)->subject($subject);
        });
    }

    /**
     * Mailleri kuyruğa ekler
     * @param $view
     * @param $email
     * @param $subject
     * @param array $data
     */
    public function queue($view, $email, $subject, $data = array()) {

        Mail::queue($view, $data, function ($message) use ($email, $subject) {

            $message->from('noreply@asque.com');
            $message->to($email)->subject($subject);
        });
    }
}