<?php
namespace App\Controllers\Admin;
use App\Controllers\BasicController;
use App\Classes\Request;
use App\Models\Category;

class AdminCategoryController extends BasicController{
    public function show(){
       $categories = Category::paginate(2);
       return view('admin/products/category', [
           'cats' => $categories
       ]);
    }

    public function store(){
       $category = new Category();
       $category->name = request()->name;
       $category->slug = slug(request()->name);
       $category->save();
       $categories = Category::paginate(2);

       return view('admin/products/category', [
           'cats' => $categories
       ]);
    }
}