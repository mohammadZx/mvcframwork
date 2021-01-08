<?php
namespace App\Classes;

class Session{
    
    //create session

    public function set($name, $value){
        if($name && $value){
            $_SESSION[$name] = $value;
            return $_SESSION[$name];
        }
        throw new \Exception('the name and value required');
    }

    // get value of session
    public function get($name){
        if($this->has($name))
            return $_SESSION[$name];

        throw new \Exception('the session not exsit');
    }


    // check session exsit
    public function has($name){
        return isset($_SESSION[$name]) ? true : false;
    }
    // remove session
    public function unset($name){
        if($this->has($name))
            unset($_SESSION[$name]);
    }

    // create flash sesssion
    public function flash($name , $value){
        return $this->set($name, $value);   
    }

    public function getflash($name){
        if($this->has($name)){
            echo $this->get($name);
            $this->unset($name);
            return;
        }
        return;
    }

}