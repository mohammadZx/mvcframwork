<?php
namespace App\Classes;

class ErrorHandler{
    public function handleErrors($errNumber,$errMessage, $errFile, $errLine){
        $error = "{$errNumber}; Message: {$errMessage}; inFile: {$errFile}; in line: {$errLine}";
        $environment = getenv('App_ENV');
        if($environment === 'local'){

            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();

        }else{

            $data = [
                'to' => getenv('ADMIN_EMAIL'),
                'subject' => 'Your site Has error',
                'view' => 'errors',
                'name' => 'admin',
                'body' => $error
            ];

            ErrorHandler::adminEmail($data);
        }
    }
    public function outputFriendlyError(){
        ob_end_clean();
        view('errors/generic');
        exit;
    }
    public static function adminEmail($data){
        $mail = new Mail();
        $mail->send($data);
        return new static;
    }
}