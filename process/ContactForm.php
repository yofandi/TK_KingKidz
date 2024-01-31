<?php

class ContactForm {
    private $to;
    private $from;
    private $subject;
    private $message;

    public function __construct($to, $from, $subject, $message) {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function sendEmail() {
        $headers = "From: " . $this->from . "\r\n";
        $headers .= "Reply-To: " . $this->from . "\r\n";
        $headers .= "Content-type: text/html\r\n";

        return mail($this->to, $this->subject, $this->message, $headers);
    }
}
