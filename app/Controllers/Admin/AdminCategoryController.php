<?php
namespace App\Controllers\Admin;
use App\Controllers\BasicController;
use App\Classes\Request;
use App\Models\Category;

class AdminCategoryController extends BasicController{
    public function show(){
       $categories = Category::all();
       echo '<pre>';
       print_r($categories);
       die('dsfd');
    }

    public function store(){
       die('create');
    }
}