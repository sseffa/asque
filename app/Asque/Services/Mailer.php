<?php namespace Asque\Services;

use Mail;
use Asque\Services\MailInterface;

class Mailer implements MailInterface {

    public function send($view, $email, $subject, $data = array()) {

        Mail::send($view, $data, function ($message) use ($email, $subject) {

            $message->from('noreply@asque.com');
            $message->to($email)->subject($subject);
        });
    }

    public function queue($view, $email, $subject, $data = array()) {

        Mail::queue($view, $data, function ($message) use ($email, $subject) {

            $message->from('noreply@asque.com');
            $message->to($email)->subject($subject);
        });
    }
}