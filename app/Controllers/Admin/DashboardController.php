<?php
namespace App\Controllers\Admin;
use App\Controllers\BasicController;
use App\Classes\Request;


class DashboardController extends BasicController{
    public function index(){
       return view('admin/dashboard');
    }

    public function get(){
        if(request()->has('name'))
            print_r(request()->post('name'));
    }
}