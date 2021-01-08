<?php
namespace App\Classes;

class CSRFToken{
    public function _token(){
        if(!session()->has('token')){
            $randomCode = base64_encode(openssl_random_pseudo_bytes(32));
            session()->set('token', $randomCode);
        }
        return session()->get('token');
    }

    public function verifyToken($token){
        if(session()->has('token') && $token == session()->get('token')){
            session()->unset('token');
            return true;
        }

        return false;
    }
}