<?php
namespace App\Controllers\Admin;
use App\Controllers\BasicController;

class DashboardController extends BasicController{
    public function index(){
       return view('admin/dashboard');
    }
}