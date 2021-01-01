<?php
namespace App\Controllers;
use App\Controllers\BasicController;
use App\Classes\Mail;
class IndexController extends BasicController{
    public function indext($id){
        $data = 'dfsdfjdskl jfdkljfklj';
        return view('test', ['test' => $data]);
    }
}