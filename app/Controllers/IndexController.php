<?php
namespace App\Controllers;
use App\Classes\Mail;
class IndexController extends BasicController{
    public function indext($id){
        $datas = 'dfsdfjdskl jfdkljfklj';
        return view('test', ['test' => $data]);
    }
}