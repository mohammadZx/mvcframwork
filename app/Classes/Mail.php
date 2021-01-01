<?php

namespace App\Classes;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mail{
    protected $mail;
    public function __construct(){
        $this->mail = new PHPMailer();
        $this->setUp();
    }


    public function setUp(){
        $this->mail->isSMTP();
        $this->mail->Mailer = 'smtp';
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPSecure = 'tls';
        $this->mail->Host = getenv('EMAIL_HOST');
        $this->mail->Port = getenv('EMAIL_PORT');

        $environment = getenv('APP_ENV'); 
        if($environment === 'local')
            $this->mail->SMTPDebug = 0;

        $this->mail->Username = getenv('EMAIL_USERNAME');
        $this->mail->Password = getenv('EMAIL_PASSWORD');

        $this->mail->isHTML(true);
        $this->mail->SingleTo = true;

        $this->mail->From = getenv('ADMIN_EMAIL');
        $this->mail->FromName = getenv('Arya Tehran');


    }

    public function send($data){

        $this->mail->addAddress($data['to'], $data['name']);
        $this->mail->Subject = $data['subject'];
        $this->mail->Body = make($data['view'], ['data' => $data['body']]);
        return $this->mail->send();

    }
}