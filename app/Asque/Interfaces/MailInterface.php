<?php namespace Asque\Interfaces;

/**
 * Mailer Interface
 * Interface MailInterface
 * @package Asque
 * @author Sefa Karagöz
 */
interface MailInterface {

    public function send($view, $email, $subject, $data = array());
    public function queue($view, $email, $subject, $data = array());
}