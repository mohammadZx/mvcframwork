<?php
namespace App\Classes;

class Request{
    public $getReqeust = [];
    public $postReqeust = [];
    public $files = [];
    public $all = [];
    public $noOrderAll = [];

    public function __construct(){
        $this->all();
    }

    public function __get($name){
        if(isset($this->all()->get->$name))
            return $this->all()->get->$name;
        if(isset($this->all()->post->$name))
            return $this->all()->post->$name;
        if(isset($this->all()->file->$name))
            return $this->all()->file->$name;
        return;
    }

    public function all($is_array = false){
        $this->getReqeust = $_GET;
        $this->postReqeust = $_POST;
        $this->files = $_FILES;
        $this->all = [
            'get' => $this->getReqeust,
            'post' =>  $this->postReqeust,
            'file' => $this->files
        ];
        return json_decode(json_encode($this->all), $is_array);
    }

    public function get($name){
        if(isset($this->all()->get->$name))
            return $this->all()->get->$name;
        return;
    }

    public function post($name){
        if(isset($this->all()->post->$name))
            return $this->all()->post->$name;
        return;
    }
    public function file($name){
        if(isset($this->all()->file->$name))
            return $this->all()->file->$name;
        return;
    }

    public function has($name){
        if(isset($this->all()->get->$name) || isset($this->all()->post->$name) || isset($this->all()->file->$name))
            return true;
        return false;
    }

    public function old($key, $value){
        return isset($this->all()->$key->$value) ? $this->all()->$key->$value : "";
    }

    public function refresh(){
        $_POST = [];
        $_GET = [];
        $_FILES = [];
        return;
    }
}